@extends('layout')


@section('content')
<title>비밀번호 찾기 | 스피드통신</title>
<div class="main-width mt-5">
    <div class="d-flex justify-center" style="width:100%">
        <div class="select-find text-center" id="find_id" style="width: 100%;">
            비밀번호 재설정
        </div>
    </div>
    <div class="find-main active d-flex align-items-center justify-content-center">
        @if(!empty($pw) && $pw->count())
        @foreach($pw as $key => $value )
        <form  method="POST" action="/pw_update/{{$value -> id}}" >
            @csrf   
            @method('PUT')
            <div class="input-content">        
                <div>
                    <input id="password" type="password" name="password" size="30" class="account" placeholder="비밀번호">
                </div>
                <p>비밀번호는 8 ~ 16글자입니다</p>
                <div>
                    <input id="password_confirmation" type="password" name="password_confirmation" size="30" class="account" placeholder="비밀번호 확인" style="margin-top:10px">
                </div>
            </div>
            <div style="text-align: center; margin-top:30px"><input type="submit" name="pw_update" id="pw_update" class="btn-back" value="변경"></div>
        </form>
        @endforeach
    @else
    <div style="margin: 30px;text-align:center">해당 정보가 입력된 아이디가 없습니다.</div>

    @endif
    </div>
</div>



@endsection