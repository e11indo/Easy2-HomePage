@extends('layout')

@section('content')
<title>동작감지센서 | 스피드통신</title>
<div class="main-width mt-5">
    <div class="row">
        <div class="d-flex composition">
            <div class="col-5">
                <div style="position: relative">
                    <div class="slide">
                        <img src="/image/우리집 지킴이 Easy2/동작감지센서.png" alt="이미지 없음" class="slide-img" style="display: inline">
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <div class="easy-title mt-5">
                    <span class="fw-bolder" style="font-size:30px">동작감지센서(Easy앱 전용)</span>
                    <p>움직임과 빛의 변화를 감지해, 침입이 발생하면 휴대폰으로 알림을 보내주는 센서</p>
                </div>
                <div class="easy-desc mt-5">
                    <div>
                        <span class="fw-bold" style="font-size: 20px;">주 기능</span>
                        <ul>
                          <li>·&nbsp;&nbsp;24시간 움직임을 감지하여 휴대폰으로 알림을 보내줍니다.</li>
                          <li>·&nbsp;&nbsp;시야각이 170도에 이르는 광각센서를 사용해 넓은 면적을 감지할 수 있습니다.</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <span class="fw-bold">U+ 스마트홈 패키지 요금제를 이용하고 있다면</span>
                        <div style="border-radius: 20px; background:#f5f5f5; width:100%;  margin-top:10px; padding:20px; position: relative;">
                            <h3 class="fw-bold">2,200원</h3>
                            <span class="pay-main" style=" color: #666;font-weight: 100;">3년 기준, 설치비 무료</span>
                            <span class="pay-sub"  style="position: absolute; right:20px; bottom:30px;  color: #666;font-weight: 100;">이용 상품/AS/일반 문의: 101(무료)</span>
                            <span class="pay-sub" style="position: absolute; right:20px; bottom:10px;  color: #666;font-weight: 100;">상담 시간: 평일 10시~18시</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div style="background:#f8f8f8; padding: 10px; margin-top:100px">
    <div class="main-width">
        <h3 class="fw-bolder">우리 제품은 이렇게 사용해요.</h3>
        <div class="d-flex" style="margin-top: 20px">
            <div class="card use-card card-pd-0">
                <img src="/image/우리집 지킴이 Easy2/동작감지센서 용도1.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">24시간 실시간으로 감지하고, 움직임을 확인하면 앱으로 알림을 보내줘요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/동작감지센서 용도2.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">동작감지센서가 움직임을 감지하면, 맘카 Easy가 경보음을 울리고 앱 알림화면에서 112에 신고할 수 있어요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/동작감지센서 용도3.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">170도 시야각의 광각센서를 사용해 넓은 면적을 감지할 수 있어요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/동작감지센서 용도4.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">사람 또는 사물의 열을 감지해, 깜깜한 밤 빛이 없는 방에서도 움직임을 확인할 수 있어요.</span>
            </div>
        </div>
    </div>
</div>

<div class="main-width mt-5" style="text-align: center">
    <img src="/image/action.jpg" alt="" style="width:100%">
</div>

<div class="mt-5" style="padding: 10px">
    <div class="main-width">
        <h3 class="fw-bolder">기기 사양</h3>
        <table class="c-cell" style="width: 100%; margin-top:10px">
            <tbody>
                <tr>
                    <th class="cell-th fw-bold">기기명</th>
                    <td class="cell-td">동작감지센서</td>
                    <th class="cell-th fw-bold">모델명</th>
                    <td class="cell-td">RTCGQ12LM</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">크기</th>
                    <td class="cell-td">30(가로) x 30(세로) x 33(높이)mm</td>
                    <th class="cell-th fw-bold">최대 감지 각도</th>
                    <td class="cell-td">수평 170도</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">허브와의 최대 거리</th>
                    <td class="cell-td">실내 30m</td>
                    <th class="cell-th fw-bold">배터리</th>
                    <td class="cell-td">CR2450</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold" >통신방법</th>
                    <td class="cell-td">Zigbee 3.0</td>
                </tr>
            </tbody>
        </table>
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
          autoplayTimeout:2000,
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