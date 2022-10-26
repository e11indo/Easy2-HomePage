<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function composition_1(){
        return view('Easy2.composition_1');
    }

    public function composition_2(){
        return view('Easy2.composition_2');
    }
    
    public function composition_3(){
        return view('Easy2.composition_3');
    }

    public function howtouse(){
        return view('Easy2.howtouse');
    }
    public function tariff(){
        return view('Easy2.tariff');
    }

    public function native(){
        return view('Easy2.native');
    }
}
