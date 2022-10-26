<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://image.lguplus.com/static/pc-contents/cv2022/images/indv/it1311ct1119-thumb-01.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47b4af5cf9.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <link rel="stylesheet" href={{asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('css/owl.theme.default.min.css')}}>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
</head>
<body>
<div class="body">
    <div class="top">
        <div class="main-width">
            <div class="topbar">
                <div class="navbar-right">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <div class="user-icon">
                        @if(auth() ->check())
                            <form action="/User_logout" method="POST">
                                @csrf
                                <div class="welcome-user">{{Auth::user()-> nickname}} 님 안녕하세요.</div>
                                <input type="submit" value="로그아웃" class="user-box" style="background: #e0562d; color:white">
                                <a href="{{Route('mypage', Auth::user()-> id)}}">
                                    <div class="user-box">마이페이지</div>
                                </a>
                            </form>
                        @else
                        <div style="display: flex">
                            <a href="{{Route('login')}}">
                                <div class="login">
                                    로그인
                                </div>
                            </a>
                            <a href="{{Route('register')}}" style="margin-left: 20px">
                                <div class="register">
                                    회원가입
                                </div>
                            </a>
                        </div>
                        <div class="find"><a href="{{Route('find')}}">아이디/비밀번호 찾기</a></div>
                        @endif
                    </div>
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="navbar-left d-flex">
                        <a href="{{Route('main')}}"><img src="/image/스피드통신 로고.jpg" class="logo" alt="없음"></a>
                        <ul class="navbar-menu" style="padding-left: 0; display:flex">
                            <li><span class="menu-subject">우리집 지킴이 Easy2</span>
                                <div class="menu-sub">
                                    <div class="main-width d-flex hi-100">
                                        <div class="menu-title">
                                            <span id="menu-title">우리집 지킴이 Easy2</span>
                                            <p>스마트홈 우리집 지킴이 Easy2 제품에 대한 설명입니다.</p>
                                        </div>
                                        <div class="menu-desc">
                                            <span style="font-size:20px">구성</span>
                                                <a href="{{Route('composition/1')}}" style="font-size:16px">맘카 Easy2</a>
                                                <a href="{{Route('composition/2')}}" style="font-size:16px">동작감지센서</a>
                                                <a href="{{Route('composition/3')}}" style="font-size:16px">도어센서</a>
                                        </div>
                                        <div class="menu-desc">
                                            <span style="font-size:20px">가격</span>
                                            <a href="{{Route('tariff')}}" style="font-size:16px">요금표</a>
{{--                                                 <a href="/" style="font-size:16px">해지방법</a> --}}
                                        </div>
                                        <div class="menu-desc">
                                            <span style="font-size:20px">기타</span>
                                            <a href="{{Route('howtouse')}}" style="font-size:16px">사용방법</a>
                                            <a href="{{Route('native')}}" style="font-size:16px">유의사항</a>
{{--                                                 <a href="/" style="font-size:16px">해지방법</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><span class="menu-subject">고객센터</span>
                                <div class="menu-sub">
                                    <div class="main-width d-flex hi-100">
                                        <div class="menu-title">
                                            <span id="menu-title">고객센터</span>
                                            <p>고객님들이 궁금하신 사항을 모아두었습니다.</p>
                                        </div>
                                        <div class="menu-desc">
                                            <a href="{{Route('notice')}}" style="font-size:20px;margin-top:0">1:1 문의</a>
                                        </div>
                                        <div class="menu-desc">
                                            <a href="{{Route('question')}}" style="font-size:20px;margin-top:0">자주하는 질문</a>
                                        </div>
{{--                                         <div class="menu-desc">
                                            <a href="{{Route('contact')}}" style="font-size:20px;margin-top:0">문의글</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
{{--                             <li><a href="{{Route('contact')}}" style="color: #4c4c4c">문의사항</a>
        
                            </li> --}}
                        </ul>
                </div>
    
            </div>
        </div>
    </div>
    @section('content')
        
    @show


    <div class="footer" style="border-top: 3px solid #999; margin-top:50px;letter-spacing: 0.6px; font-weight:600">
        <div class="footer-box1 ">
            <div class="main-width justify-content-center align-items-center footer_1" style="display: flex">
                <li><a href="{{Route('intro')}}">회사소개</a></li>
                <li><a href="{{Route('consume')}}">이용약관</a></li>
                <li><a href="{{Route('policy')}}">개인정보취급방침</a></li>
                <li><a href="{{Route('email_refuse')}}">이메일무단수집거부</a></li>
            </div>
        </div>
    
        <div class="main-width" style="padding:10px">
            <div class="footer-box2">
                <div class="soho_container" style="height: 100px; margin-top:15px">
                    <div><img src="/image/스피드통신 로고.jpg" alt="" ></div>
                    <div class="footer-block">
                        <div>상호: 스피드통신</div>
                        <span>주소: 익산시 무왕로 스피드통신</span>
                        <span>전화: 000-0000-0000</span>
                        <span>팩스: 0502-329-0100 </span>
                        <span>이메일: KT0100@Bizmeka.com</span>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
</div>

<div class="side-menu">
    <div class="side-title  align-items-center justify-content-center" style="display: flex">
        전체메뉴
        <div class="exit">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="side-content">
        <div class="side-content-box">
            <div class="side-start">
                구성
            </div>
            <a href="{{Route('composition/1')}}" class="side-end">맘카 Easy2</a>
            <a href="{{Route('composition/2')}}" class="side-end">동작감지센서</a>
            <a href="{{Route('composition/3')}}" class="side-end">도어센서</a>
        </div>
        <div class="side-content-box">
            <div class="side-start">
                가격
            </div>
            <a href="{{Route('tariff')}}" class="side-end">요금표</a>
        </div>
        <div class="side-content-box">
            <div class="side-start">
                기타
            </div>
            <a href="{{Route('howtouse')}}" class="side-end">사용방법</a>
            <a href="{{Route('native')}}" class="side-end">유의사항</a>
        </div>
        <div class="side-content-box">
            <div class="side-start">
                고객센터
            </div>
            <a href="{{Route('notice')}}" class="side-end">1:1 문의</a>
            <a href="{{Route('question')}}" class="side-end">자주하는질문</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
<script>
    $( document ).ready( function() {
   var jbOffset = $( '.top' ).offset();
   console.log(jbOffset);
   $( document ).scroll( function() {
     if ( $( document ).scrollTop() > jbOffset.top +0 ) {
       $( '.top' ).addClass( 'menu_fixed' );
     }
     else {
       $( '.top' ).removeClass( 'menu_fixed' );
     }
   });
 } );
</script>