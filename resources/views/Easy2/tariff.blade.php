@extends('layout')


@section('content')
<title>요금표 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        요금표
    </div>
    <span class="fw-bold" style="font-size: 22px;">우리집 지킴이 Easy2 요금제</span>
    <table class="table-cell" style="margin-top: 10px"> 
        <colgroup>
          <col style="width: 20%" />
          <col style="width: 20%" />
          <col style="width: 20%" />
          <col style="width: 20%" />
          <col style="width: 20%" />
        </colgroup>
        <thead>
          <tr>
            <th scope="col">약정 기간</th>
            <th scope="col">3년 약정</th>
            <th scope="col">2년 약정</th>
            <th scope="col">1년 약정</th>
            <th scope="col" style="border-right: 1px solid #eee;">무약정</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cl-black">월정액(우리집 지킴이 Easy2)</td>
            <td class="cl-black">월 9,900원</td>
            <td class="cl-black">월 15,400원</td>
            <td class="cl-black">월 19,800원</td>
            <td class="cl-black" style="border-right: 1px solid #eee;">월 25,300원</td>
          </tr>
        </tbody>
      </table>

      <li style="font-size: 14px; color:#666; margin-top:10px">부가세가 포함된 금액입니다.</li>
    <div class="mt-10">
        <span class="fw-bold" style="font-size: 22px;">결합 할인</span>
        <table class="table-cell" style="margin-top: 10px"> 
            <colgroup>
            <col style="width: 35%" />
            <col style="width: 25%" />
            <col style="width: 20%" />
            <col style="width: 20%" />
            </colgroup>
            <thead>
            <tr>
                <th scope="col" colspan="2">결합 조건</th>
                <th scope="col">할인 금액</th>
                <th scope="col" style="border-right: 1px solid #eee;">할인 적용 월정액</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="cl-black">
                    <p>인터넷</p>
                    스마트 기가안심(1G), 스마트 기가슬림안심(500M)
                </td>
                <td class="cl-black" rowspan="2">
                    <p>우리집 지킴이 Easy2</p>
                </td>
                <td class="cl-black" rowspan="2">2,200원</td>
                <td class="cl-black" rowspan="2" style="border-right: 1px solid #eee;">7,700원</td>
            </tr>
            <tr>
                <td class="cl-black">
                    <p>휴대폰</p>
                    5G - 5G 라이트 이상 요금제<br>
                    4G - 속도 용량 걱정없는 데이터 59 이상 요금제
                </td>
            </tr>
            </tbody>
        </table>

      <li style="font-size: 14px; color:#666; margin-top:10px">3년 약정 기준으로 부가세가 포함된 금액입니다.</li>
      <li style="font-size: 14px; color:#666; margin-top:5px">이미 휴대폰 또는 인터넷 결합 할인을 받고 있는 경우 중복으로 할인받을 수 없습니다.</li>
    </div>

    <div class="mt-10">
        <span class="fw-bold" style="font-size: 22px;">기존 패키지 결합</span>
        <table class="table-cell" style="margin-top: 10px"> 
            <colgroup>
            <col style="width: 25%" />
            <col style="width: 50%" />
            <col style="width: 25%" />
            </colgroup>
            <thead>
            <tr>
                <th scope="col">사용 중인 요금제</th>
                <th scope="col">요금제</th>
                <th scope="col" style="border-right: 1px solid #eee;">월 정액</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="cl-black" rowspan="2">
                    하나하나 IoT<br>
                    골라담아 IoT
                </td>
                <td class="cl-black">내맘대로2/키즈케어/펫케어</td>
                <td class="cl-black" style="border-right: 1px solid #eee;">월 12,100원</td>
            </tr>
            <tr>
                <td class="cl-black">우리집 지킴이 Easy2 / Google 패키지</td>
                <td class="cl-black" style="border-right: 1px solid #eee;">월 9,900원</td>
            </tr>
            <tr>
                <td class="cl-black">
                    모두담아 IoT
                </td>
                <td class="cl-black">
                    패키지 3종 中 자유선택<br>
                    내맘대로2/키즈케어/펫케어
                </td>
                <td class="cl-black" style="border-right: 1px solid #eee;">월 12,100원</td>
            </tr>
            </tbody>
        </table>

        <li style="font-size: 14px; color:#666; margin-top:10px">부가세가 포함된 금액입니다.</li>
        <li style="font-size: 14px; color:#666; margin-top:5px">패키지 월 이용요금으로 현재 사용 중인 스마트홈 기기와 추가한 기기를 함께 사용할 수 있습니다.(단, 우리집 지킴이 Easy2는 스마트홈Easy 전용 기기만 사용할 수 있습니다)</li>
        <li style="font-size: 14px; color:#666; margin-top:5px">현재 사용 중인 스마트홈 기기의 남은 할부금은 계속 납부해야 합니다.</li>
        <li style="font-size: 14px; color:#666; margin-top:5px">추가한 스마트홈 기기는 임대 상품으로, 중간에 해지하거나 약정기간이 끝나면 반납해야 합니다.</li>
        <li style="font-size: 14px; color:#666; margin-top:5px">재약정 기간일 경우에 우리집 지킴이 Easy2로 변경이 가능합니다.</li>
    </div>

    <div class="mt-10">
        <span class="fw-bold" style="font-size: 22px;">설치비</span>
        <table class="table-cell" style="margin-top: 10px"> 
            <colgroup>
            <col style="width: 50%" />
            <col style="width: 50%" />
            </colgroup>
            <thead>
            <tr>
                <th scope="col">신규 가입 시</th>
                <th scope="col" style="border-right: 1px solid #eee;">요금제 변경 시</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="cl-black">22.000원</td>
                <td class="cl-black" style="border-right: 1px solid #eee;">무료</td>
            </tr>
            </tbody>
        </table>

        <li style="font-size: 14px; color:#666; margin-top:10px">부가세가 포함된 금액입니다.</li>
        <li style="font-size: 14px; color:#666; margin-top:5px">신규 가입 시 설치비는 1개월 차 요금에 합산되어 1회만 청구됩니다.</li>
    </div>
</div>

<div class="mt-5" style="background:#f8f8f8; padding: 10px; margin-bottom:100px">
    <div class="main-width">
        <h2 class="fw-bold">채팅 및 가입상담하기</h2>
        <div class="d-flex" style="margin-top: 30px">
            <div class="card d-flex contact-card justify-content-center" style="text-align:start">
                <img src="https://image.lguplus.com/static/pc-static/common/images/indv-biz/icon/ico-iptv-tell.png" alt="" style="margin-left:0">
                <div class="call">
                    <h3 class="fw-bold">가입 상담 신청</h3>
                    <h6>0000-0000</h6>
                </div>
            </div>
            <div class="card d-flex contact-card justify-content-center ml-20" style="text-align:start">
                <img src="https://image.lguplus.com/static/pc-static/common/images/indv-biz/icon/ico-iptv-chat.png" alt="" style="margin-left:0">
                <div class="call">
                    <h3 class="fw-bold">카카오톡 상담</h3>
                    <h6>카카오톡으로 가입 상담을 받아보세요.</h6>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection