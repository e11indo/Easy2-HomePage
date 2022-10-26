@extends('layout')


@section('content')
<title>1:1 상담문의 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
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
                    {{$notice -> title}}
                </div>
            </div>
        </div>
        <div class="input-box">
            <div class="input-title">상담유형</div>
            <div class="input-content">        
                <div>
                    {{$notice -> type}}
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
                    {{$notice -> content}}
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 40px;height:60px;position: relative;">
        <form action="/notice/view/{{$notice -> id}}" method="post" style="position: absolute; top:0; right:0" onsubmit="return confirm('해당 게시글을 삭제하시겠습니까?');">
            @method('delete')
            @csrf
            <button name="delete" id="password" class="btn-no">삭제</button>

        </form>
        <a href="{{Route('notice_edit',$notice-> id)}}" class="btn-okay">수정</a>
    </div>
</div>

@endsection