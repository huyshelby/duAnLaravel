<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;

class cate extends Model
{
    use HasFactory;
    protected $table = 'type_main';
    protected $type_sub = 'type_sub';
    function allCate()
    {
        $all = DB::table('type_main')
            ->get();
        return $all;
    }
    function type_sub()
    {
        $data = DB::table('type_sub')
        ->get();
        return $data;
    }
}
