<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_product;
use App\Models\cate;
use App\Models\products;
use App\Models\cate_sub;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product;
    private $cate;
    private $product_list;
    private $cate_sub;
    public function __construct(admin_product $admin_product, cate $cate, products $product_list, cate_sub $cate_sub)
    {
        $this->product = $admin_product;
        $this->cate = $cate;
        $this->product_list = $product_list;
        $this->cate_sub = $cate_sub;
    }
    public function index()
    {
        return view('admin.layout_admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = $this->cate->type_sub();
        return view('admin.products.add', ['data' => $cate]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product->add($request);

        dd($request);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = $this->product_list->all_product();
        // dd($data);
        return view('admin.products.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->product->edit_product($id);
        $cate_sub = $this->cate_sub->get_all();
        // dd($data);
        return view('admin.products.edit', ['data' => $data, 'cate_sub' => $cate_sub]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->product->update_product($request, $id);
        return redirect()->route('admin.product.show')->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $this->product->delete_product($id);
        return redirect()->route('admin.product.show')->with('message', 'Xóa thành công');
    }
}
