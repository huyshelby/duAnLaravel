<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Support\Facades\DB;
use App\Http\Requests\registerValid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function all_user()
    {
        $user = DB::table('users')
            ->get();
        return $user;
    }
    public function user_byEmail(Request $request){
        $email = $request['email'];
        $a = DB::table('users')
        ->where('email', $email)
        ->first();
        return $a;
    }
    public function add_token($token, $id){
        DB::table('users')
        ->where('id_user', $id)
        ->update([
            'token' => $token
        ]);
    }
    public function register(registerValid $request)
    {
        $email = strtolower(trim(strip_tags($request['email'])));
        $pass = trim(strip_tags($request['password']));
        $user_name = explode('@', $email);
        // dd($user_name);
        
        DB::table('users')
            ->insert([
                'user_name' => $user_name[0],
                'email' => $email,
                'password' => Hash::make($pass)
            ]);
    }

    public function user_by_email_token(registerValid $request){
        $email = $request['email'];
        $token = $request['token'];
        return DB::table('users')
        ->where('email', '=' , $email, 'and', 'token', '=', $token)
        ->get();
    }

    public function update_pass(registerValid $request, $token_random){
        $email = $request['email'];
        $token = $request['token'];
        return DB::table('users')
        ->where('email', '=' , $email, 'and', 'token', '=', $token)
        ->update([
            'password' => Hash::make($request['pass']),
            'token' => $token_random
        ]);
    }
}
