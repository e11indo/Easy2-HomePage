<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ContactController;

//로그인, 회원가입, 마이페이지, 계정 찾기
Route::get('/',[IndexController::class,'index'])->name('main');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::get('/verify',[UserController::class,'verify'])->name('verify');
Route::post('/User_store',[UserController::class,'store']);
Route::post('/User_login',[UserController::class,'User_login']);
Route::post('/User_logout',[UserController::class,'User_logout']) ;
Route::get('/mypage/{id}',[IndexController::class,'mypage'])->middleware('auth')->name('mypage');
Route::put('/user_update/{nickname}',[IndexController::class,'user_update'])->middleware('auth') ;
Route::delete('/user_delete/{id}',[IndexController::class,'user_delete'])->middleware('auth');
Route::get('/find_account',[IndexController::class,'find'])->name('find');
Route::post('/find_id',[IndexController::class,'find_id']);
Route::get('/welcome',function(){
    return view('Main.welcome');
})-> middleware('auth')->name('welcome');
Route::post('/verify_email',[UserController::class,'verify_email']);
Route::post('/re_email',[UserController::class,'re_email']);
Route::post('/find_pw',[IndexController::class,'find_pw']);
Route::put('/pw_update/{id}',[IndexController::class,'pw_update']);

//메뉴 목록
Route::get('/composition/1',[MainController::class,'composition_1'])->name('composition/1');
Route::get('/composition/2',[MainController::class,'composition_2'])->name('composition/2');
Route::get('/composition/3',[MainController::class,'composition_3'])->name('composition/3');
Route::get('/howtouse',[MainController::class,'howtouse'])->name('howtouse');
Route::get('/tariff',[MainController::class,'tariff'])->name('tariff');
Route::get('/native',[MainController::class,'native'])->name('native');
Route::get('/question',[NoticeController::class,'question'])->name('question');
Route::get('/information',[NoticeController::class,'information'])->name('information');

//문의글
Route::get('/contact',[ContactController::class,'contact'])->middleware('auth')->name('contact');
Route::get('/contact_create',[ContactController::class,'contact_create'])->middleware('auth')->name('contact_create');
Route::get('/contact/{id}',[ContactController::class,'contact_view'])->middleware('auth')->name('contact_view');
Route::post('contact_save',[ContactController::class,'save'])->middleware('auth');
Route::post('Contact_delete/{id}',[ContactController::class,'delete'])->middleware('auth');
Route::post('/Comment/{id}',[ContactController::class,'comment'])->middleware('auth');
Route::post('Comment_delete/{id}',[ContactController::class,'comment_delete'])->middleware('auth');

//1:1상담
Route::get('/notice',[NoticeController::class,'index'])->middleware('auth')->name('notice');
Route::get('/notice/write',[NoticeController::class,'notice_write'])->name('notice_write');
Route::post('/notice/save',[NoticeController::class,'save'])->middleware('auth');
Route::get('/notice/view/{notice}',[NoticeController::class,'notice_view'])->middleware('auth')->name('notice_view');
Route::delete('/notice/view/{notice}',[NoticeController::class,'delete'])->middleware('auth');
Route::get('/notice/view/{notice}/edit',[NoticeController::class,'edit'])->middleware('auth') -> name('notice_edit');
Route::put('/notice/{notice}',[NoticeController::class,'update'])->middleware('auth');

//푸터
Route::get('/consume',function(){
    return view('Footer.consume');
})->name('consume');
Route::get('/email_refuse',function(){
    return view('Footer.email_refuse');
})->name('email_refuse');
Route::get('/intro',function(){
    return view('Footer.intro');
})->name('intro');
Route::get('/policy',function(){
            return view('Footer.policy');
})->name('policy');