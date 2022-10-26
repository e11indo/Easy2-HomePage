<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\notice;


class IndexController extends Controller
{
    public function index(){  
        return view('Main.index');
    }

    public function mypage($id){
        $user = DB::table('users') -> where('id','=', $id) -> first();
        $notice = DB::table('notices') -> where('userid','=',$id) -> paginate(10);

        return view('mypage.mypage',compact('user','notice'));
    }

    public function user_update(Request $request, $id){
        $validation = $request -> validate([
            'tel' => 'required|min:11|max:11',
            'nickname' => 'required|min:2|max:10'
        ]);

        $user = User::where('id', $id)->first();
        $notice = DB::table('notices')->where('userid',$id)->update(array('nickname'=>$validation['nickname']));

        $user -> tel = $validation['tel'];
        $user -> nickname = $validation['nickname'];

        $user -> save();

        

        return redirect() -> route('mypage',$user -> id);
    }

    public function user_delete($id){
        $user = User::where('id',$id) ->first();
        $notice = notice::where('userid',$id) ->get();
        $notice -> each -> delete(); //자식 노드 DB는 지울 때 each 적기
        $user -> delete();

        return redirect() -> route('main');
    }

    public function edit(){
        return view('mypage.account_edit');
    }
    public function find(){
        return view('Main.find');
    }
    public function find_id(Request $request){
        $validation = $request->validate([
            'tel' => 'required'
        ]);
        $id = DB::table('users') -> where('tel', $validation['tel']) -> get();

        return view('Main.find_id',compact('id'));
    }
    public function find_pw(Request $request){
        $validation = $request->validate([
            'userId' => 'required' ,
            'email' => 'required',
            'tel' => 'required'
        ]);
        $pw = DB::table('users') -> where('userId', $validation['userId']) -> where('email', $validation['email']) -> where('tel', $validation['tel']) -> get();
        return view('Main.find_pw',compact('pw'));
    }

    public function pw_update(Request $request,$id){
        $validation = $request -> validate([
            'password' => 'required|min:8|max:16|confirmed'
        ]);

        $user = User::where('id', $id)->first();
        $user -> password = Hash::make($validation['password']);
        $user -> save();

        return redirect() -> route('main');
    }


    public function upload(Request $request){
        $file = $request -> file('uploadFile') -> store('images','action.jpg');
        return redirect() -> route('main');
    }
}
