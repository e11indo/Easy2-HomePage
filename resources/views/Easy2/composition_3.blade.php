@extends('layout')

@section('content')
<title>도어센서 | 스피드통신</title>
<div class="main-width mt-5">
    <div class="row">
        <div class="d-flex composition">
            <div class="col-5">
                <div style="position: relative">
                    <div class="slide">
                        <img src="/image/우리집 지킴이 Easy2/도어센서 1.png" alt="" class="slide-img" style="display: inline">
                        <img src="/image/우리집 지킴이 Easy2/도어센서 2.png" alt="" class="slide-img">
                        <img src="/image/우리집 지킴이 Easy2/도어센서 3.png" alt="" class="slide-img">
                    </div>
                    <div class="slide-btn">
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <div class="easy-title mt-5">
                    <span class="fw-bolder" style="font-size:30px">도어센서(Easy앱 전용)</span>
                    <p>문 열림 여부를 확인할 수 있고, 문이 열리고 일정시간이 지나도 닫히지 않으면 알림을 보내주는 센서</p>
                </div>
                <div class="easy-desc mt-5">
                    <div>
                        <span class="fw-bold" style="font-size: 20px;">주 기능</span>
                        <ul>
                          <li>·&nbsp;&nbsp;문과 창문의 열림 및 닫힘 상태를 확인할 수 있습니다.</li>
                          <li>·&nbsp;&nbsp;침입 감지 시 즉시 알림을 받을 수 있습니다.</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <span class="fw-bold">U+ 스마트홈 패키지 요금제를 이용하고 있다면</span>
                        <div style="border-radius: 20px; background:#f5f5f5; width:100%;  margin-top:10px; padding:20px; position: relative;">
                            <h3 class="fw-bold">1,100원</h3>
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
                <img src="/image/우리집 지킴이 Easy2/도어센서 용도1.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">움직임이나 소리가 감지되면 스마트폰으로 알림을 보내주기 때문에 CCTV를 계속 지켜보지 않아도 돼요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/도어센서 용도2.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">외출할 동안 촬영한 사진을 15초 영상으로 만들어, 하루 동안의 우리집 모습을 간편하게 확인 가능해요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/도어센서 용도3.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">보안칩이 내장되어있어 네트워크를 통한 영상 해킹을 차단할 수 있어요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/도어센서 용도4.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">아이가 집에 들어오면 사진을 촬영해 스마트폰으로 보내줘요. 영상을 통해 아이와 대화할 수 있어요.</span>
            </div>
        </div>
    </div>
</div>

<div class="main-width mt-5" style="text-align: center">
    <img src="/image/door.jpg" alt="" style="width:100%">
</div>

<div class="mt-5" style="padding: 10px">
    <div class="main-width">
        <h3 class="fw-bolder">기기 사양</h3>
        <table class="c-cell" style="width: 100%; margin-top:10px">
            <tbody>
                <tr>
                    <th class="cell-th fw-bold">기기명</th>
                    <td class="cell-td">도어센서 Easy</td>
                    <th class="cell-th fw-bold">모델명</th>
                    <td class="cell-td">MCCGQ12LM</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">크기</th>
                    <td class="cell-td">41(가로) x 22(세로) x 11(높이)mm</td>
                    <th class="cell-th fw-bold">허브와의 최대 거리</th>
                    <td class="cell-td">30m (실내)</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">배터리</th>
                    <td class="cell-td">CR1632</td>
                    <th class="cell-th fw-bold">통신방법</th>
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