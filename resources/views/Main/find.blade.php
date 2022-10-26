@extends('layout')


@section('content')
<title>계정 찾기 | 스피드통신</title>
<div class="main-width mt-5">
    <div class="justify-center" style="width:100%; display:flex">
        <div class="select-find text-center active" id="find_id" style="width: 49.75%">
            아이디 찾기
        </div>
        <div class="select-find text-center" id="find_pw" style="width: 49.75%; margin-left:0.5%">
            비밀번호 찾기
        </div>

        {{-- <div class="wd-50 pd-20">

            <form action="/find_id" method="POST">
                @csrf
                <div style="text-align: center">아이디 찾기</div>
                    <input type="text" name="tel" id="tel" placeholder="전화번호">
                <div style="text-align: center" class="mt-5"><input type="submit" name="find_pw" id="find_pw"></div>
            </form>
        </div>
        <div class="wd-50 pd-20">
            <form action="/find_pw" method="POST">
                @csrf
            <div style="text-align: center">비밀번호 찾기</div>
            <input type="text" name="userId" id="userId" placeholder="아이디">
            <input type="text" name="email" id="email" placeholder="E-Mail">
            <input type="text" name="tel" id="tel" pattern="전화번호">
            <div style="text-align: center"><input type="submit" name="find_pw" id="find_pw"></div>
            </form>
        </div> --}}
    </div>
    <div>
        <form action="/find_id" method="POST" class="find-main active" id="find-main-id">
            @csrf
            <div style="text-align: center;    margin-top: 60px;"><input type="text" name="tel" id="tel" placeholder="전화번호" class="find-input"></div>
            <div style="text-align: center" class="mt-5"><input type="submit" name="find_pw" id="find_pw" class="find-submit" value="찾기"></div>
        </form>
    </div>


    <div>
        <form action="/find_pw" method="POST" class="find-main" id="find-main-pw">
            @csrf
            <div style="text-align: center;" ><input type="text" name="userId" id="userId" placeholder="아이디" class="find-input"></div>
            <div style="text-align: center; margin-top: 20px" ><input type="text" name="email" id="email" placeholder="E-Mail" class="find-input"></div>
            <div style="text-align: center; margin-top: 20px" ><input type="text" name="tel" id="tel" placeholder="전화번호" class="find-input"></div>
            <div style="text-align: center; margin-top: 20px" class="mt-5"><input type="submit" name="find_pw" id="find_pw" class="find-submit" value="찾기"></div>
        </form>
    </div>

</div>
@endsection