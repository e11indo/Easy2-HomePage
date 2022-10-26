@extends('layout')


@section('content')
<title>이메일 인증 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-main">
        <div class="input-top">
            이메일 인증
        </div>
        인증을 위해 이메일로 전송된 숫자 6자리를 입력해주세요.
        <form action="/verify_email" method="POST">
            @csrf
            <div style="margin-top: 20px">
                <input type="text" name="verify_num" id="">
                <input type="submit" name="" id="" value="입력" style="margin-left: 10px">
            </div>
        </form>
        <form action="/re_email" method="POST">
            @csrf
            <input type="submit" name="" id="" value="메일 다시보내기" style="margin-top: 20px">
        </form>
    </div>
</div>

@endsection