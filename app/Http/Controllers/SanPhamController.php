<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_hot = DB::table('products')
            ->join('type_main', 'type_main.id_type_main', '=', 'products.id_type_main')
            ->select('products.*', 'type_main.name_type')
            ->orderBy('view', 'desc')
            ->limit(4)
            ->get();
        $speaker_home = DB::table('products')
            ->join('type_sub', 'type_sub.id_type_main', '=', 'products.id_type_main')
            ->select('products.*', 'type_sub.name_type_sub')
            ->where('type_sub.name_type_sub', '=', 'loa nghe trong nhà')
            ->orderBy('view', 'desc')
            ->limit(4)
            ->get();
        // dd($speaker_home);
        return view('home', ['product_hot' => $product_hot, 'speaker_home' => $speaker_home]);
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
