<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;
class cate extends Model
{
    use HasFactory;
    protected $table = 'type_main';
    function allCate(){
        $all = DB::table('type_main')
        ->get();
        return $all;
    }
}
