@extends('layout')


@section('content')
<title>마이페이지 | 스피드통신</title>
<div class="main-width mt-5" style="padding:10px">
    <div class="select-bar">
        <div style="display: flex">
            <div class="select-menu d-flex align-items-center justify-content-center" id="one">
                회원 정보
            </div>
            <div class="select-menu d-flex align-items-center justify-content-center" id="two">
                문의 내역
            </div>
        </div>
    </div>
    <div class="select-content" id="one-content">
        <form action="/user_update/{{$user -> id}}" method="POST" onsubmit="return confirm('계정정보를 변경하시겠습니까?');">
            @csrf
            @method('PUT')


            <div class="input-main">
                <div class="input-box">
                    <div class="input-title">아이디</div>
                    <div class="input-content">        
                        <div>
                            <span class="account">{{$user -> userId}}</span>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">닉네임</div>
                    <div class="input-content">        
                        <div>
                            <input id="password" type="text" name="nickname" size="30" class="account" value="{{$user -> nickname}}">
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">이메일</div>
                    <div class="input-content">        
                        <div>
                            <span class="account">{{$user -> email}}</span>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">전화번호</div>
                    <div class="input-content">        
                        <div>
                            <input id="password" type="text" name="tel" size="30" class="account" value="{{$user -> tel}}">
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-title">이메일 인증</div>
                    <div class="input-content">        
                        <div>
                            @if(($user -> is_verify) == '1')
                                이메일 인증 성공
                            @else
                                <a href="{{Route('verify')}}">이메일 인증하기</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div style="text-align: center; width:100%; margin-top:30px">
                <input type="submit" name="" id="" value="수정" class="btn-okay">
            </div>
        </form>

        <form action="/user_delete/{{$user -> id}}" method="post" style="position: absolute; right: 20px; bottom: 20px;" onsubmit="return confirm('한번 탈퇴한 계정은 되돌릴 수 없습니다. 탈퇴하시겠습니까?');" >
            @csrf
            @method('delete')
            <input type="submit" name="" id="" value="계정 탈퇴" class="btn-no">
        </form>

    </div>

    <div class="select-content" id="two-content">
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
    </div>
</div>


@endsection