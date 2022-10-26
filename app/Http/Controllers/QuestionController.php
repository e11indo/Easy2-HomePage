<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\question;

class QuestionController extends Controller
{
    public function index(){

        $question = question::orderBy('id','desc') ->paginate(10);

        return view('Notice.question',compact('question'));
    }

    

}
