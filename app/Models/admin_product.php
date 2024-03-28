<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class admin_product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function add(Request $request)
    {
        $name = $request['name'];
        $type = $request['type'];
        $price = $request['price'];
        $sale = $request['sale'];
        $img = $request['img'];
        $des = $request['description'];
        $data = DB::table('products')
            ->insert([
                'name' => $name,
                'id_type_sub' => $type,
                'price' => $price,
                'sale' => $sale,
                'img_main' => $img,
                'description' => $des
            ]);
        return $data;
    }

    public function delete_product(String $id)
    {
        // $id = $request['id'];
        DB::table('products')
            ->where('id_product', $id)
            ->delete();
    }

    public function edit_product(String $id)
    {
        $data = DB::table('products')
            ->join('type_sub', 'type_sub.id_type_sub', '=', 'products.id_type_sub')
            ->orderBy('id_product', 'desc')
            ->where('id_product', $id)
            ->get();
        return $data;
    }

    public function update_product(Request $request, string $id)
    {
        $name = $request['name'];
        $type = $request['type'];
        $price = $request['price'];
        $sale = $request['sale'];
        $img = $request['img'];
        $des = $request['description'];
        DB::table('products')
            ->where('id_product', $id)
            ->update([
                'name' => $name,
                'id_type_sub' => $type,
                'price' => $price,
                'sale' => $sale,
                'img_main' => $img,
                'description' => $des
            ]);
    }
}
