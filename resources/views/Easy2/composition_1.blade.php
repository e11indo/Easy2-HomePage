@extends('layout')

@section('content')
<title>맘카 Easy2 | 스피드통신</title>
<div class="main-width mt-5">
    <div class="row">
        <div class="d-flex composition">
            <div class="col-5">

{{--                 <div class="loop owl-carousel owl-theme">
                    <div class="item">
                      <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 정면.jpg" alt="이미지 없음">
                    </div>
                    <div class="item">
                        <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 측면.jpg" alt="이미지 없음">
                    </div>
                    <div class="item">
                        <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 후면.jpg" alt="이미지 없음">
                    </div>
                  </div> --}}

                <div style="position: relative">
                    <div class="slide">
                        <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 정면.jpg" alt="" class="slide-img" style="display: inline">
                        <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 측면.jpg" alt="" class="slide-img">
                        <img src="/image/우리집 지킴이 Easy2/맘카 Easy2 후면.jpg" alt="" class="slide-img">
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
                    <span class="fw-bolder" style="font-size:30px">맘카 Easy2</span>
                    <p>움직임과 소리를 감지하면 휴대폰으로 알림을 보내고, 대상을 추적 촬영하여 영상을 저장하는 홈 CCTV</p>
                </div>
                <div class="easy-desc mt-5">
                    <div>
                        <span class="fw-bold" style="font-size: 20px;">주 기능</span>
                        <ul>
                          <li>·&nbsp;&nbsp;침입을 감지하면 경보음이 울리고 녹화를 시작합니다.</li>
                          <li>·&nbsp;&nbsp;FHD보다 선명한 SFHD 화질로 사람과 반려동물을 추적하며 촬영합니다. </li>
                          <li>·&nbsp;&nbsp;실시간으로 집안의 상황을 보며 양방향으로 통화할 수 있습니다. </li>
                          <li>·&nbsp;&nbsp;카메라 회전 기능을 이용해 집 밖에서도 집 안 곳곳을 확인할 수 있습니다. </li>
                          <li>·&nbsp;&nbsp;보안칩이 장착되어있어 네트워크를 통한 해킹을 원천 차단합니다.</li>
                        </ul>
                    </div>
                    <div class="mt-5">
                        <span class="fw-bold">U+ 스마트홈 패키지 요금제를 이용하고 있다면</span>
                        <div style="border-radius: 20px; background:#f5f5f5; width:100%; margin-top:10px; padding:20px; position: relative;">
                            <h3 class="fw-bold">4,400원</h3>
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



<div style="background:#f8f8f8; padding:10px; margin-top:100px">
    <div class="main-width">
        <h3 class="fw-bolder">우리 제품은 이렇게 사용해요.</h3>
        <div class="d-flex" style="margin-top: 20px">
            <div class="card use-card card-pd-0" >
                <img src="/image/우리집 지킴이 Easy2/맘카 용도1.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">움직임이나 소리가 감지되면 스마트폰으로 알림을 보내주기 때문에 CCTV를 계속 지켜보지 않아도 돼요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/맘카 용도2.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">외출할 동안 촬영한 사진을 15초 영상으로 만들어, 하루 동안의 우리집 모습을 간편하게 확인 가능해요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/맘카 용도3.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">보안칩이 내장되어있어 네트워크를 통한 영상 해킹을 차단할 수 있어요.</span>
            </div>
            <div class="card use-card ml-20" >
                <img src="/image/우리집 지킴이 Easy2/맘카 용도4.png" alt="" style="width:100%; height:65%">
                <span style="margin-top:10px">아이가 집에 들어오면 사진을 촬영해 스마트폰으로 보내줘요. 영상을 통해 아이와 대화할 수 있어요.</span>
            </div>
        </div>
    </div>
</div>


<div class="main-width mt-5" style="text-align: center">
    <img src="/image/momcar.jpg" alt="" style="width:100%">
</div>
<div class="mt-5" style="padding: 10px ">
    <div class="main-width">
        <h3 class="fw-bolder">기기 사양</h3>
        <table class="c-cell" style="width: 100%; margin-top:10px">
            <tbody>
                <tr>
                    <th class="cell-th fw-bold">기기명</th>
                    <td class="cell-td">맘카 Easy2</td>
                    <th class="cell-th fw-bold">모델명</th>
                    <td class="cell-td">CH-H04</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">크기</th>
                    <td class="cell-td">123.4(가로) x 85.1(세로) x 67.8(높이)mm</td>
                    <th class="cell-th fw-bold">해상도</th>
                    <td class="cell-td">2,304(가로) x 1,296(세로)</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">렌즈 화각</th>
                    <td class="cell-td">110도 광각</td>
                    <th class="cell-th fw-bold">감지 대상</th>
                    <td class="cell-td">사람, 펫, 움직임, 소리</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold">카메라 회전 각도</th>
                    <td class="cell-td">좌우 340도 상하 39도</td>
                    <th class="cell-th fw-bold">타임랩스 영상 길이</th>
                    <td class="cell-td">15초</td>
                </tr>
                <tr>
                    <th class="cell-th fw-bold" >영상압축</th>
                    <td class="cell-td">H.265</td>
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