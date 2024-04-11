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
        if (isset($user_byEmail)) {
            return redirect()->route('user')->with('message', 'Email đã tồn tại !');
        }
        $new_user = $this->user->register($request);

        // gửi mail
        Mail::send('mail', ['user_name' => $user_name, 'email' => $request['email']], function ($email) use ($request) {
            $email->subject('Đăng ký thành công');
            $email->to($request['email']);
        });
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
            // $user = auth()->guard('web')->user();
            // dd($user);
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
            $link_reset = url('/user/update-pass?email=' . $to_email . '&token=' . $token_random);
            $dataa = array("name" => $title, "body" => $link_reset, "email" => $data['email']);

            Mail::send('forgot_pass_notification', ['data' => $dataa], function ($message) use ($title, $data) {
                $message->to($data['email'])->subject($title);
                // $message->from($data['email'], $title);
            });

            return redirect()->back()->with('message', 'Gửi mail thành công, Vui lòng vào mail để lấy lại mật khẩu !');
        } else {
            return redirect()->back()->with('error', 'Email không chính xác');
        }
    }
    public function update_pass(Request $request)
    {
        // dd($request['token']);
        $user = $this->user->user_byEmail($request);
        // dd($user->token);
        if ($user) {
            if ($user->token == $request['token']) {
                return view('update_pass');
            } else {
                return  redirect()->route('forgot_pass')->with('error', 'Link quên mật khẩu đã hết hạn, vui lòng gửi lại email');
            }
        }
    }
    public function update_pass_act(registerValid $request)
    {
        $user = $this->user->user_by_email_token($request);
        // dd(count($user));
        if (count($user) >= 1) {
            $token_random = str::random(20);
            $this->user->update_pass($request, $token_random);
            return redirect()->route('login')->with('success', 'Thay đổi mật khẩu thành công !');
        } else {
            return redirect()->back()->with('error', 'Email không chính xác !');
        }
    }
    public function user_profile()
    {
        return view('profile');
    }
}
