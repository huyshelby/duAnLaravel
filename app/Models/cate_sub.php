<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;

class cate_sub extends Model
{
    use HasFactory;
    protected $table = 'type_sub';
    public function get_all()
    {
        $data = DB::table('type_sub')
            ->get();
        return $data;
    }
}
