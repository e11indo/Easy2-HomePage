@extends('layout')


@section('content')
<title>아이디 찾기 | 스피드통신</title>
<div class="main-width mt-5">

    <div class="d-flex justify-center" style="width:100%">
        <div class="select-find text-center" id="find_id" style="width: 100%;">
            아이디 찾기
        </div>
    </div>
    <div class="find-main active">
        <div style="display: flex">
            @if(!empty($id) && $id->count())
            <div style="width:50%; text-align:center">
                <div class="find-result-title">해당 전화번호로 가입된 ID</div>  
                @foreach($id as $key => $value )
                <div class="find-result-content" id="find-result-ids">{{$value -> userId}}</div>
                @endforeach
            </div>
            <div style="width:50%; text-align:center">
                <div class="find-result-title">해당 전화번호로 가입된 이메일</div>  
                @foreach($id as $key => $value )
                <div class="find-result-content" id="find-result-emails">{{$value -> email}}</div>
                @endforeach
            </div>
            @else
            <div style="margin: 30px;text-align:center">해당 전화번호로 가입된 아이디가 없습니다.</div>
            @endif
        </div>
        
        <div style="margin-top: 50px; text-align:center" ><a href="/find_account" class="btn-back">돌아가기</div></a> </div>
    </div>
    
</div>



@endsection