<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m2_s1_1" class="main-tab">운영지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s2_1" class="main-tab">문화건강팀</a>
        <a href="/bbs/content.php?co_id=m2_s3_1" class="main-tab">기획홍보팀</a>
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab active">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_2" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s4_1" class="sub-tab">사례관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab active">재가복지사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_3" class="sub-tab">경로식당 무료급식사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_4" class="sub-tab">식사배달지원사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">재가복지사업</h2>
        </div>
        <p>경제적·신체적·심리적 어려움이 있는 저소득 어르신에게 맞춤형 서비스를 제공해 건강하고 안정된 노후를 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <p>경제적·신체적·심리적 어려움이 있는 저소득 어르신에게 맞춤형 서비스를 제공하여, 정든 집에서 건강하고 안정된 노후를 보내실 수 있도록 지원합니다.</p>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>경제적·신체적·심리적 제약이 있는 저소득 어르신을 대상으로 다양한 지원 및 프로그램 운영으로 실질적인 생활 지원 서비스를 제공합니다. 일상의 불편함을 해소하고 정서적 유대감을 강화함으로써, 어르신이 소외되지 않고 건강한 노후를 누릴 수 있도록 돕는 통합 돌봄 서비스입니다.</p>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 관내 및 당사자 가정</li>
                    <li><strong>서비스 대상 :</strong> 안성시 거주 만 60세이상 저소득 어르신</li>
                    <li><strong>서비스 기간 :</strong> 연중</li>
                </ul>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <table class="service-table">
                    <colgroup>
                        <col width="20%">
                        <col width="40%">
                        <col width="40%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>사업명</th>
                            <th>세부사업명</th>
                            <th>내 용</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="4">일상생활 및 자립지원</th>
                            <td>생활물품 지원</td>
                            <td>식료품, 생필품 등 일상생활에 실질적으로 필요한 물품을 전달</td>
                        </tr>
                        <tr>
                            <td>결연후원금 지원</td>
                            <td>경제적 안정을 위해 후원자와 연계하여 정기적인 경제적 지원</td>
                        </tr>
                        <tr>
                            <td>계절 맞춤 지원</td>
                            <td>겨울철 난방비 지원 등 기후 위기에 취약한 어르신을 위한 생활 환경을 개선</td>
                        </tr>
                        <tr>
                            <td>재가방문서비스</td>
                            <td>주거환경개선, 방문 이미용 등의 서비스 제공을 통해 어르신이 사시는 곳에서 느끼는 불편함을 실질적으로 해소하고 삶의 질을 높이는 통합적 지원</td>
                        </tr>
                        <tr>
                            <th rowspan="2">정서지원</th>
                            <td>정서지원 프로그램</td>
                            <td>우울·고독감 완화를 위한 정서 지원활동 </td>
                        </tr>
                        <tr>
                            <td>문화활동지원</td>
                            <td>나들이, 문화 공연 관람 등 다채로운 외부 활동을 통해 일상의 즐거움을 선사 </td>
                        </tr>
                        <tr>
                            <th rowspan="3">기획사업</th>
                            <td>명절행사</td>
                            <td>설과 추석 등 명절의 정을 함께 나누며 이웃 간의 관계를 형성</td>
                        </tr>
                        <tr>
                            <td>1·3세대 통합프로그램</td>
                            <td>1·3세대가 함께 어울리며 서로를 이해하고 소통하는 프로그램</td>
                        </tr>
                        <tr>
                            <td>어르신 인생노트</td>
                            <td>살아온 삶을 돌아보고 앞으로의 시간을 준비하며 삶의 의미를 기록하는 프로그램</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img4.png" alt="">
            </div>
        </div>
    </div>
</div>