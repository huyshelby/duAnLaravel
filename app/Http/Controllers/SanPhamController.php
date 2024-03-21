<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;

use App\Models\products;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product;
    public function __construct(products $product){
        $this->product = $product;
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
        $detail_product = $this->product->detail_product($id);
        return view('detail-product', ['detail_product' => $detail_product]);
    }

    public function search(){
        $search = $this->product->search();
        return view('search', ['data' => $search, 'key' => request()->key]);
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
