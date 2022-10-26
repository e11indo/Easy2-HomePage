<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Mail\ReEmail;
use App\Models\User;

class UserController extends Controller
{
    public function register(){
        return view('Main.register');
    }
    
    public function store(Request $request){
        $validation = $request -> validate([
            'userId' => 'required|min:6|max:12|unique:users|string',
            'password' => 'required|min:8|max:16|confirmed',
            'email' => 'required|email',
            'tel' => 'required|min:11|max:11',
            'nickname' => 'required|min:2|max:10'
        ]);

        $email_verify = rand(100000,999999);

        $user = new User();
        $user -> userId = $validation['userId'];
        $user -> password = Hash::make($validation['password']);
        $user -> email = $validation['email'];
        $user -> tel = $validation['tel'];
        $user -> nickname = $validation['nickname'];
        $user -> verify_num = $email_verify;
        $user -> save();

        Auth::attempt($validation);
        Mail::to($user)->send(new SendEmail($user));
/*         User::create([
        'userId' => $validation['userId'],
        'password' => Hash::make($validation['password']),
        'email' => $validation['email'],
        'tel' => $validation['tel'],
        'nickname' => $validation['nickname']
        ]); */

        return redirect() -> Route('welcome');
    }

    public function welcome(){
        return view('Main.welcome');
    }

    public function login(){
        return view('Main.login');
    }

    public function User_login(Request $request){
        $validation = $request -> validate([
        'userId' => 'required',
        'password' => 'required',
        ]);

        $remember = $request -> input('remember');

        if(Auth::attempt($validation, $remember)){
            return redirect()->route('main');
        } 
        else{
            return redirect() -> back() -> with('status', '로그인 정보가 옳지 않습니다.');
        }
    }

    public function User_logout(){
        Auth::logout();
        
        return redirect()->route('main');
    }

    public function verify(){
        if((Auth::user()->is_verify) == '0'){
            return view('Main.verify');
        }
        else{
            return view('Main.index');
        }
    }

    public function verify_email(Request $request){
        $verify_num = Auth::user() -> verify_num;
        $verify_request = $request -> input('verify_num');

        if($verify_num == $verify_request){
            $user = User::where('userId', '=', Auth::user()->userId) -> first();
            $user -> is_verify = "1";
            $user -> verify_num = NULL;
            $user -> save();

            return redirect() -> route('welcome');
        }
        else{
            return redirect() -> back();
        }
    }

    public function re_email(){
        $email_verify = rand(100000,999999);

        $user = User::where('id','=',Auth::user() -> id) ->first();
        $user -> verify_num = $email_verify; 
        $user -> save();

        Mail::to($user)->send(new ReEmail($user));

        return redirect() -> route('verify');
    }


}
