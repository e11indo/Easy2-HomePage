<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\question;

class NoticeController extends Controller
{
    public function index(){

            $notice = DB::table('notices') ->where('userid','=', Auth::user()->id)->paginate(10);
            return view('Notice.notice',compact('notice'));
    }

    public function notice_view($id){
        $notice = notice::where('id',$id) -> first();

        return view('Notice.notice_view',compact('notice'));
    }
    
    public function notice_write(){
        if((Auth::user()->is_verify) == '1'){
            return view('Notice.notice_write');
        }
        else{
            return redirect() -> Route('verify');
        }
    }

    public function edit($id){
        $notice = notice::where('id', $id) -> first();
        return view('Notice.notice_edit', compact('notice'));
    }

    public function update(Request $request, $id){
        $validation = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'content' => 'required',
        ]);


            $notice = notice::where('id',$id)->first();
            $notice -> title = $validation['title'];
            $notice -> type = $validation['type'];
            $notice -> content = $validation['content'];
            $notice -> save();
        return redirect() -> route('notice_view',$id);
    }




    public function delete($id){
        $notice = notice::where('id',$id) ->first();
        $notice -> delete();
        return redirect() -> route('notice');
    }

    public function save(Request $request){
        $validation = Validator::make(request()->all(), [
            'title' => 'required',
            'type' => 'required',
            'content' => 'required',
        ]);

        if($validation->fails()){
            return redirect()->back();
        } 
        else{
            notice::create([
                'userid' => auth() -> id(),
                'title' => request() ->title,
                'type' => request() -> type,
                'content' => request() -> content,
                'nickname' => Auth::user()-> nickname
            ]);
            return redirect()->Route('notice');
        }
    }

    public function question(){
        $question = question::orderBy('id','desc') ->paginate(10);
        return view('Notice.question',compact('question'));
    }

    public function information(){
        return view('Notice.information');
    }
}
