@extends('layout')


@section('content')
<title>1:1 상담문의 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        1:1 상담문의
    </div>

    <h4>나의 상담내역</h4>
    <div class="input-main">
        <div id="table-title">
            <div class="wd-20 pd-20">별명</div>
            <div class="wd-20 pd-20">타입</div>
            <div class="wd-40 pd-20">제목</div>
            <div class="wd-20 pd-20">날짜</div>
        </div>
        @if(!empty($notice) && $notice->count())
        @foreach($notice as $key => $value )
        <div id="table-content">
            <div class="wd-20 pd-20 tx-ct tx-flex" style="font-weight:600">{{$value -> nickname}}</div>
            <div class="wd-20 pd-20 tx-ct tx-flex" style="font-weight:600">{{$value -> type}}</div>
            <div class="wd-40 pd-20 tx-flex" style="font-weight:600"><a href="{{Route('notice_view', $value -> id)}}">{{$value -> title}}</a></div>
            <div class="wd-20 pd-20 tx-ct tx-flex" style="font-weight:600">{{$value -> created_at}}</div>
        </div>
        @endforeach
        @else
        <div style="margin: 30px;text-align:center">상담문의 내역이 없습니다.</div>

        @endif
        
    </div>
    <div style="margin-top: 40px;height:60px">
        <a href="{{Route('notice_write')}}">
            <div class="btn-okay" style="float: right">문의하기</div>
        </a>
    </div>



</div>

@endsection