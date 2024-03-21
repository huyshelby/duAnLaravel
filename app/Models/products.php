<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    function all_product(){
        $all = DB::table('products')
        ->get();
        return $all;
    }
    function product_hot()
    {
        $product_hot = DB::table('products')
            ->join('type_sub', 'type_sub.id_type_sub', '=', 'products.id_type_sub')
            ->select('products.*', 'type_sub.name_type_sub')
            ->orderBy('view', 'desc')
            ->limit(4)
            ->get();
        return $product_hot;
    }
    function speaker_home()
    {
        $speaker_home = DB::table('products')
            ->join('type_sub', 'type_sub.id_type_sub', '=', 'products.id_type_sub')
            ->select('products.*', 'type_sub.name_type_sub')
            ->where('type_sub.name_type_sub', '=', 'loa nghe trong nhà')
            ->orderBy('view', 'desc')
            ->limit(4)
            ->get();
        return $speaker_home;
    }
    function detail_product($id)
    {
        $detail_product = DB::table('products')
            ->where('id_product', $id)
            ->first();
        return $detail_product;
    }

    function search()
    {
        if($key = request()->key){
            $search = DB::table('products')
            ->where('name', 'like', '%'.$key.'%')->get();
        }
        return $search;
    }

    // local scope
    // function scopeSearch($query){
    //     if($key = request()->key){
    //         $query = $query->where('name', 'like', '%'.$key.'%')->get();
    //     }
    //     return $query;
    // }

    // global scope
}
