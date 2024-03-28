<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use App\Models\products;
use App\Models\cate;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product;
    private $cate;
    public function __construct(products $product){
        $this->product = $product;
        // $this->cate = $cate;
        // $data = $this->cate->allCate();
        $data_type = DB::table('type_main')->get();
        // dd($data);
        View::share('data_type', $data_type);
        // view('layout.header', ['data' => $data]);
    }
    public function showApi(){
        $all = $this->product->all_product();
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
        return view('home', ['product_hot' => $product_hot, 'speaker_home' => $speaker_home]);
    }

    public function detail($id = 0){
        $data = $this->product->detail_product($id);
        $data_type = DB::table('type_main')->get();
        // $relate = $this->product->related_product($id);
        // dd($relate);
        return view('detail-product', ['data' => $data, 'data_type' => $data_type]);
    }

    public function search(){
        $search = $this->product->search();
        return view('search', ['data' => $search, 'key' => request()->key]);
    }

    public function product_cate($id = 0){
        // $data_type = DB::table('type_main')->get();
        $data = $this->product->product_cate($id);
        // dd($data);
        return view('product_cate', ['data' => $data]);
        
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
        //
    }
}
