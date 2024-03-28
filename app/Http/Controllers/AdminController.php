<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $product;
    public function __construct(admin_product $admin_product)
    {
        $this->product = $admin_product;
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
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product->add($request);

        // dd($request);
        return redirect('admin');
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
