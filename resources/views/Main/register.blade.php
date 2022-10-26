@extends('layout')


@section('content')
<title>회원가입 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div style="margin-left:auto; margin-right:auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-top">
            회원가입
        </div>
        <form method="POST" action="/User_store" onsubmit="return register_check()" name="register">
            @csrf
            <div class="input-main">
                <div class="input-box">
                    <div class="input-title">아이디입력</div>
                    <div class="input-content">        
                        <div>
                            <input id="userId" type="text" name="userId" value="{{old('userId') ? old('userId') : ''}}" class="account">
                        </div>
                        <p>아이디는 6 ~ 12글자입니다.</p>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">이메일 주소</div>
                    <div class="input-content">        
                        <div>
                            <input id="email" type="email" name="email" size="30" value="{{old('email') ? old('email') : ''}}" class="account">
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">비밀번호</div>
                    <div class="input-content">        
                        <div>
                            <input id="password" type="password" name="password" size="30" class="account">
                        </div>
                        <p>비밀번호는 영문자+숫자+특수문자 조합으로 8 ~ 16글자입니다</p>
                        <div>
                            <input id="password_confirmation" type="password" name="password_confirmation" size="30" class="account" placeholder="비밀번호 확인" style="margin-top:10px">
                        </div>
                    </div>
                </div>     
                <div class="input-box">
                    <div class="input-title">별명</div>
                    <div class="input-content">        
                        <div>
                            <input id="nickname" type="nickname" name="nickname" size="30" value="{{old('nickname') ? old('nickname') : ''}}" class="account">
                        </div>
                        <p>별명은 2 ~ 10글자입니다.</p>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">전화번호</div>
                    <div class="input-content">        
                        <div>
                            <input id="tel" type="tel" name="tel" size="30" value="{{old('tel') ? old('tel') : ''}}" class="account">
                        </div>
                        <p>'ㅡ' 빼고 숫자만 11자리 입력해주세요</p>
                    </div>
                </div>
            </div>
            <div style="margin-top: 40px; text-align:center">
                <input type="submit" value="간편 회원가입" class="btn-register">
            </div>
        </form>
    </div>
</div>



@endsection