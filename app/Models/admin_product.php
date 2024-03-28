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
    public function add(Request $request){
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
}
