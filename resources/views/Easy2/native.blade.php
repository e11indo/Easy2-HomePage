@extends('layout')


@section('content')
<title>유의사항 | 스피드통신</title>
<div class="main-width mt-5" style="padding: 10px">
    <div class="input-top">
        유의사항
    </div>

    <li class="guide-title">설치 및 AS 안내</li>
    <li class="guide-desc">신규 또는 이전 설치비는 부가세 포함 22,000원이며, 스마트홈 패키지 기본 구성 기기 외 기기 추가 시, 설치비는 무료입니다.</li>

    <li class="guide-title mt-5">해지 안내</li>
    <li class="guide-desc">약정 기간 내 해지 시, 이용료 약정 할인 반환금 및 기사 출동 회수비용이 발생합니다.</li>
    <li class="guide-desc">
        - 이용요금 약정 할인 반환금<br>
        이용 월수 x ( 이용기간 이용요금 - 약정기간 이용요금 )<br>
        예시: 3년 약정 가입 후, 15개월 이후 해지 시<br>
        15 x ( 19,800원 - 9,900원 ) = 148,500원
    </li>
    <li class="guide-desc">이용기간에 따라 아래와 같이 요금을 적용함</li>
    <table class="table-cell" style="margin-top: 10px"> 
        <colgroup>
            <col style="width: 25%" />
            <col style="width: 25%" />
            <col style="width: 25%" />
            <col style="width: 25%" />
        </colgroup>
        <thead>
            <th scope="col">이용기간</th>
            <th scope="col">1년 미만</th>
            <th scope="col">2년 미만</th>
            <th scope="col" style="border-right: 1px solid #eee;">3년 미만</th>
        </thead>
        <tbody>
            <td class="cl-black" style="background-color: #f8f8f8; font-weight:600">요금</th>
            <td class="cl-black">25,300원</td>
            <td class="cl-black">19,800원</td>
            <td class="cl-black" style="border-right: 1px solid #eee;">15,400원</td>
        </tbody>
    </table>
    <li class="guide-desc">스마트홈 기기 분실 및 파손이 발생하는 경우, 단말 손실보상금이 발생합니다.</li>
    <li class="guide-desc">
        - 손실보상금<br>
        기기 가격 x (48개월 - 스마트홈 기기 이용 월수) / 48개월<br>
        예시: 37개월 차에 해지했으나, 플러그 분실 시<br>
        손실보상금 : 44,000원 x (48-37) / 48 = 10,083원
    </li>

    <li class="guide-title mt-5">고객센터 안내</li>
    <li class="guide-desc">스마트홈 전담 고객센터 : 1544-0107(유료)</li>
    <li class="guide-desc">운영시간 : 평일 오전 9시~18시 (주말 및 공휴일 제외)</li>

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