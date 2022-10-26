@extends('layout')


@section('content')
<title>회원가입 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">

    @if((Auth::user()->is_verify) == '0')
    <div class="input-top">
        회원가입
    </div>
    <div class="input-main welcome justify-content-center align-items-center">
        <div class="welcome-box justify-content-center align-items-center"> 
            <div class="welcome1"><span style="color:red">회원가입</span> 이 완료되었습니다.</div>
            <div class="welcome2">스피드통신을 이용해주셔서 감사합니다.</div>
            <div class="welcome-btn"><a href="{{Route('main')}}" style="color: white; padding:10px 20px">메인화면으로</a></div>
        </div>

        <div class="welcome-box justify-content-center align-items-center">
            <div class="welcome2" style="bottom: 60%"><span style="color:red">본인인증</span>을 하시면 좀 더 다양한 활동이 가능합니다.</div> 
            <div class="welcome-btn"><a href="{{Route('verify')}}" style="color: white; padding:10px 20px">이메일 인증하기</a></div>
        </div>
    </div>
    @else
    <div class="input-top">
        이메일 인증
    </div>
    <div class="input-main welcome justify-content-center align-items-center">
        <div style="width: 50%; display:flex" class="justify-content-center align-items-center"> 
            <div class="welcome1"><span style="color:red">본인인증</span>이 완료되었습니다.</div>
            <div class="welcome2">스피드통신을 이용해주셔서 감사합니다.</div>
            <div class="welcome-btn"><a href="{{Route('main')}}" style="color: white; padding:10px 20px">메인화면으로</a></div>
        </div>
    </div>
    @endif
</div>



@endsection