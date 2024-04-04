<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Models\users;
use App\Http\Requests\registerValid;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $user;
    public function __construct(users $user)
    {
        $this->user = $user;
        $data_type = DB::table('type_main')->get();
        // dd($data);
        View::share('data_type', $data_type);
    }
    public function index()
    {

        return view('user-login');
    }
    public function register(registerValid $request)
    {
        // dd($request);
        $email_user = strtolower(trim(strip_tags($request['email'])));
        $pass = trim(strip_tags($request['pass']));
        $user_name = explode('@', $email_user)[0];
        $user_byEmail = $this->user->user_byEmail($request);
        // dd($user_byEmail);
        if (isset($user_byEmail)) {
            return redirect()->route('user')->with('message', 'Email đã tồn tại !');
        }
        // dd($request);
        $new_user = $this->user->register($request);

        // gửi mail
        Mail::send('mail', ['user_name' => $user_name, 'email' => $request['email']], function ($email) use ($request) {
            $email->subject('Đăng ký thành công');
            $email->to($request['email'], $request['user_name']);
        });
        // dd($user_name);
        // Mail::send('mail', ['user_name' => $user_name, 'email' => $request['email']], function ($message) use ($request) {
        //     $message->to($request['email'], $request['userName'])
        //         ->subject('Đăng ký thành công');
        // });
        return redirect()->route('profile')->with('message', "Đăng ký thành công!");
    }
    public function login()
    {
        return view('login');
    }
    public function login_(Request $request)
    {
        $a = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // dd($request['pass']);
        if (auth()->guard('web')->attempt($a)) {
            return redirect()->route('profile')->with('message', 'Đăng nhập thành công!');
        }

        return redirect()->route('login')->with('message', 'Email hoặc mật khẩu không chính xác');
    }
    public function forgot_pass()
    {
        return view('forgot_pass');
    }
    public function forgot_pass_(Request $request)
    {
        $data = $request->all();
        // $email = strtolower(trim(strip_tags($request['email'])));
        $user = $this->user->user_byEmail($request);

        $title = 'Lấy lại mật khẩu website Dự Án Laravel';

        if (isset($user)) {
            $id_user = $user->id_user;
            $token_random = str::random(20);
            $this->user->add_token($token_random, $id_user);

            $to_email = $data['email'];
            $link_reset = url('/update-pass?email=' . $to_email . '&token=' . $token_random);
            $dataa = array("name" => $title, "body" => $link_reset, "email" => $data['email']);

            Mail::send('forgot_pass_notification', ['data' => $dataa], function ($message) use ($title, $data) {
                $message->to($data['email'])->subject($title);
                $message->from($data['email'], $title);
            });

            return redirect()->back()->with('message', 'Gửi mail thành công, Vui lòng vào mail để lấy lại mật khẩu !');
        } else {
            return redirect()->back()->with('error', 'Email không chính xác');
        }
    }
    public function user_profile()
    {
        return view('profile');
    }
}
