<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use App\Models\products;
use App\Models\cate;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product;
    private $cate;
    const perPage = 8;
    private $saleCodes = [
        'huydeptrai' => 50,
        'huyhandsome' => 50,
        'abc' => 10,
        'def' => 10
    ];
    public function __construct(products $product)
    {
        $this->product = $product;
        // $this->cate = $cate;
        // $data = $this->cate->allCate();
        $data_type = DB::table('type_main')->get();
        // dd($data);
        View::share('data_type', $data_type);
        // view('layout.header', ['data' => $data]);
    }
    public function showApi()
    {
        $all = $this->product->getAll();
        // dd($all);
        return response([
            'data' => $all,
            'status' => 200,
            'message' => 'ok'
        ]);
    }
    public function index()
    {

        $product_hot = $this->product->product_hot();
        $speaker_home = $this->product->speaker_home();
        // dd($speaker_home);
        // session()->flush();
        return view('home', ['product_hot' => $product_hot, 'speaker_home' => $speaker_home]);
        // return [
        //     $product_hot,
        //     $speaker_home
        // ];

        // return response()->json([
        //     'data-hot' => $product_hot,
        //     'status' => 200,
        //     'message' => 'ok',
        //     'data-speaker' => $speaker_home,
        // ], 200);
    }

    public function detail($id = 0)
    {
        $data = $this->product->detail_product($id);
        $data_type = DB::table('type_main')->get();
        return view('detail-product', ['data' => $data, 'data_type' => $data_type]);
    }

    public function search()
    {
        $search = $this->product->search(self::perPage);
        return view('search', ['data' => $search]);
        // return $search;
        // return response()->json([
        //     'data-hot' => $search,
        //     'status' => 200,
        //     'message' => 'ok'
        // ], 200); 
    }

    public function product_cate($id = 0)
    {
        // $data_type = DB::table('type_main')->get();
        $data = $this->product->product_cate($id);

        return view('product_cate', ['data' => $data]);
    }

    public function cart(string $id, $quantity = 1)
    {
        $product = $this->product->detail_product($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->name,
                "quantity" => 1,
                "image" => $product->img_main
            ];
        }
        session()->put('cart', $cart);

        // session()->flush();
        return view('cart', ['cart' => $cart])->with('message', 'Product has been added to cart!');
    }

    public function show_cart()
    {
        // dd(session()->get('cart'));
        $cart = session()->get('cart');
        // session()->flush();
        return view('cart', ['cart' => $cart]);
    }

    public function update_cart(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        foreach ($request->input('id_sp', []) as $index => $id) {
            $quantity = $request->input('quantity.' . $index);
            if ($quantity > 0) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity'] = $quantity;
                }
            } else {
                $index = array_search($id, array_column($cart, 'id'));
                array_splice($cart, $index, 1);
            }
        }

        $request->session()->put('cart', $cart);
        return redirect()->route('showCart')->with('message', 'Thay đổi thành công');
    }

    public function deleteCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart', []);

        if (array_key_exists($id, $cart)) {
            $cartIndex = array_search($id, array_column($cart, 'id_product'));
            array_splice($cart, $cartIndex, 1);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('showCart')->with('message', 'Xóa thành công');

        // return redirect()->route('showCart')->with('message', 'Xóa thành công');
    }

    public function sale(Request $request)
    {
        $saleCode = $request->input('sale');
        $saleCodes = [
            'huydeptrai' => 50,
            'huyhandsome' => 50,
            'abc' => 10,
            'def' => 10
        ];

        if (array_key_exists($saleCode, $saleCodes)) {
            $discount = $saleCodes[$saleCode];
            session()->flash('success', 'Bạn được giảm ' . $discount . ' %');
        } else {
            $discount = 0;
            session()->flash('error', 'Mã giảm giá không tồn tại!');
        }
        // session()->flush();
        return redirect()->route('showCart')->with('discount', $discount);
    }

    public function check_out()
    {
        // dd(Auth::user());

        return view('checkout');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
