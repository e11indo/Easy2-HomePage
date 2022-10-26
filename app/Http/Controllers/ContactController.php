<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function contact(){
        $contact = Contact::orderBy('id','desc') -> get();
        /* $contact = DB::table('contacts') -> leftJoin('comments','contacts.id','=','comments.contact_id') 
        -> selectRaw('contacts.*, count(comments.contact_Id) as commentcount') 
        -> groupBy('contacts.id') -> orderBy('id','desc')->paginate(10); */

        return view('contact.contact',['contact' => $contact]); //compact랑 동일
    }

    public function contact_create(){
        return view('contact.contact_create'); 
    }

    public function save(Request $request){
        $validation = $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $contact = new Contact();
        $contact -> userId = Auth::id();
        $contact -> title = $validation['title'];
        $contact -> content = $validation['content'];
        $contact -> nickname = Auth::user()-> nickname;

        if($request -> hasFile('picture')){
            $fileName = time().'_'.$request -> file('picture') -> getClientOriginalName();
            $path = $request -> file('picture') -> storeAs('public/images', $fileName);
            $contact -> image_name = $fileName;
            $contact -> image_path = $path;
        }

        $contact -> save();
/* 
        return redirect() -> view('contact.contact'); */
        return redirect() -> route('contact');
    

    }


    public function contact_view($id){
        $contact = Contact::where('id',$id) -> first(); 
        $comment = Comment::where('contact_Id',$id) -> get();

        return view('contact.contact_view',['contact' => $contact, 'comment' => $comment]);
    }

    public function delete($id){

        $contact = Contact::where('id',$id) -> first();
        Storage::delete($contact -> image_path);
        $comment = Comment::where('contact_Id',$id) -> first();

        $contact -> delete();
        if(!empty($comment)){
            $comment -> delete();
        }

        return redirect() -> route('contact');
    }

    public function update($id){
        
    }

    public function comment(Request $request, $id){
        $contact_comment = new Comment();
        $contact_Id = DB::table('contacts') -> where('contacts.id','=',$id) -> selectRaw('contacts.id') ->first();

        $contact_comment -> userId = Auth::id();
        $contact_comment -> contact_Id =  $contact_Id -> id;
        $contact_comment -> content = $request -> input('comment');
        $contact_comment -> nickname = Auth::user() -> nickname;

        $contact_comment -> save();

        return redirect() -> back();
    }

    public function comment_delete($id){
        $comment = Comment::where('id',$id) -> first();
        $comment -> delete();

        return redirect() -> back();
    }
}
