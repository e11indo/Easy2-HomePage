@extends('layout')


@section('content')
<title>1:1 상담 글 수정 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <form action="/notice/{{$notice ->id}}" method="post" onsubmit="return confirm('수정정보를 저장하시겠습니까?');">
        @method('PUT')
        @csrf   
    <div class="input-top">
        내 문의 내역 보기
    </div>

    <div class="input-main">
        <div class="input-box">
            <div class="input-title">상담자</div>
            <div class="input-content">        
                <div>
                    {{$notice -> nickname}}
                </div>
            </div>
        </div>
        <div class="input-box">
            <div class="input-title">제목</div>
            <div class="input-content">        
                <div>
                    <input id="title" type="text" name="title" class="account" style="width:100%" value="{{$notice -> title}}">
                </div>
            </div>
        </div>
        <div class="input-box">
            <div class="input-title">상담유형</div>
            <div class="input-content">        
                <div>
                    <select name="type" id="option" style="height: 40px;width:100%">
                        <option name="one" id="one" value="가격 문의">가격 문의</option>
                        <option name="two" id="two" value="설치 문의">설치 문의</option>
                        <option name="three" id="three" value="해지 문의">해지 문의</option>
                    </select>
                </div>
            </div>
        </div>
                <div class="input-box">
            <div class="input-title">작성일</div>
            <div class="input-content">        
                <div>
                    {{$notice -> created_at}}
                </div>
            </div>
        </div>
        <div class="input-box">
            <div class="input-title">작성 내용</div>
            <div class="input-content">        
                <div>
                    <textarea name="content" id="content" cols="30" rows="10" style="width: 100%">{{$notice -> content}}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 40px; height:60px; position: relative;">
        <button name="update" class="btn-okay" style="position: absolute; right:0; top:0">수정완료</button>
    </div>
</form>
</div>

@endsection