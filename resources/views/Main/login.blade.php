@extends('layout')


@section('content')
<title>로그인 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div style="margin-left:auto; margin-right:auto">
        @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
        @endif
        <div class="input-top">
            로그인
        </div>
        <form method="POST" action="/User_login">
            @csrf
            <div class="input-main">
                <div class="input-box">
                    <div class="input-title">아이디</div>
                    <div class="input-content">        
                        <div>
                            <input id="userId" type="text" name="userId" value="{{old('userId') ? old('userId'):''}}" class="account">
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">비밀번호</div>
                    <div class="input-content">        
                        <div>
                            <input id="password" type="password" name="password" size="30" class="account">
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 40px; text-align:center">
                <input type="submit" value="로그인" class="btn-register">
            </div>
        </form>
    </div>
</div>



@endsection
