@extends('layout')


@section('content')
<title>1:1 상담 글쓰기 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        1:1 상담 글쓰기
    </div>
    <div class="input-main">
        <form action="/notice/save" method="post">
            @csrf
            <div class="input-box">
                <div class="input-title">제목</div>
                <div class="input-content">        
                    <div>
                        <input id="title" type="text" name="title" class="account" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="input-box">
                <div class="input-title">상담 유형</div>
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
                <div class="input-title">문의 내용</div>
                <div class="input-content">        
                    <div>
                        <textarea name="content" id="content" cols="30" rows="10" style="width: 100%"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center btn-write">
                <input type="submit" name="" id="btn-write" value="글쓰기">
            </div>
        </form>
    </div>
</div>
@endsection