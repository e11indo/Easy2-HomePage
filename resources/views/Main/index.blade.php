@extends('layout')


@section('content')
<title>우리집 지킴이 Easy2 | 스피드통신</title>

<div class="row">
    <img src="/image/banner.jpg" alt="">
</div>



<div class="mt-5" style="background:#f8f8f8; padding:10px">
    <div class="main-width">
        <h2 class="fw-bold">제품 구성</h2>
        <div class="d-flex" style="margin-top: 30px; margin-bottom:30px">
            <div class="card product-card">
                <img src="/image/우리집지킴이 맘카.png" alt="" style="width:250px">
                <h4 class="fw-bold" style="margin-top: 20px">맘카 Easy2</h3>
                <span>움직임과 소리를 감지하면 휴대폰으로 알림을 보내고,
                    대상을 추적 촬영하여 영상을 저장하는 홈 CCTV</span>
            </div>
            <div class="card product-card ml-30" >
                <img src="/image/우리집지킴이 동작감지센서.png" alt="" style="width:250px">
                <h4 class="fw-bold" style="margin-top: 20px">동작감지센서</h3>
                <span>움직임과 빛의 변화를 감지해 침입이 발생하면
                        휴대폰으로 알림을 보내주는 센서</span>
            </div>
            <div class="card product-card ml-30">
                <img src="/image/우리집지킴이 도어센서.png" alt="" style="width:250px">
                <h4 class="fw-bold" style="margin-top: 20px">도어센서</h3>
                <span>문열림 여부를 확인할 수 있고 문이 열리고
                    일정시간이 지나도 닫히지 않으면 알림을 보내주는 센서</span>
            </div>
        </div>
    </div>
</div>

<div class="mt-5" style="padding:10px">
    <div class="main-width" style="display:flex">
        <img src="/image/서비스특징.jpg" alt="" style="margin-left: auto; margin-right:auto; width:100%">
    </div>
</div>

<div class="mt-5" style="padding:10px">
    <div class="main-width justify-content-center align-items-center" style="display: flex">
        <img src="/image/요금제.jpg" alt="" style="width:100%">
    </div>
</div>

<div class="mt-5" style="padding:10px">
    <div class="main-width" style="display: flex">
        <img src="/image/call.jpg" alt="" class="call-btn">
    </div>
</div>



<script>
    jQuery(document).ready(function($) {
      $('.loop').owlCarousel({
        center: true,
        items: 2,
        loop: true,
        margin: 10,
        autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
        responsive: {
          600: {
            items: 1
          }
        }
      });
    });
  </script>
@endsection