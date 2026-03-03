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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab active">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_2" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s5_1" class="sub-tab">노인맞춤돌봄서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_3" class="sub-tab active">응급안전안심서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_5" class="sub-tab">이동세탁서비스사업</a>
            <!-- <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_2" class="sub-tab">세탁서비스</a> -->
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">응급안전안심서비스</h2>
        </div>
        <p>IoT 장비를 활용한 실시간 안전관리로 취약계층의 응급상황에 신속하게 대응합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon2">응급안전안심서비스</h3>
                <p>IoT 기반 실시간 안전관리 시스템을 구축하여 취약계층의 응급상황 발생 시 신속하고 효율적으로 대응할 수 있도록 지원합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>지역사회 예방적 돌봄 차원에서 상시 보호가 필요한 노인 및 장애인 가구에 IoT 기반 안전관리 장비를 설치하여 화재·질병 등 응급상황을 자동 신고하고, 응급관리체계를 통해 신속한 대응을 지원합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 관내</li>
                    <li><strong>서비스 대상 :</strong> 독거노인 · 장애인</li>
                    <li><strong>서비스 기간 :</strong> 설치 후 종결 시까지</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업내용</h3>
                <div class="business-detail">
                    <p>취약가구를 대상으로 IoT 기반 응급안전관리시스템을 구축하여 응급·화재·활동 정보를 실시간으로 감지·전송·모니터링하고, 위기 상황 발생 시 소방서 등 관계기관과 연계한 신속 대응체계를 운영합니다.</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon2">사업절차</h3>
                <div class="business-detail">
                    <ul class="procedure-list">
                        <li><strong>선정절차 :</strong> 서비스 신청 및 접수 → 대상자 선정조사 및 상담 → 심의 및 승인 → 선정결과 안내</li>
                        <li><strong>서비스 :</strong> 댁내장비 설치 → 서비스 제공 → 댁내장비 관리</li>
                        <li><strong>서비스종결 :</strong> 종결신청 및 접수 → 종결 보고 → 댁내장비 철거</li>
                    </ul>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">이용 대상</h3>
                <div class="business-detail">
                    <p>· 노인가구</p>
                    <p>※ 통합돌봄 연계 대상자 우선 지원</p>
                    <p>(독거노인) 주민등록상 거주지와 동거자 유무, 소득과 관계없이 실제로 혼자 살고 있는 65세 이상의 노인</p>
                    <p>(노인 2인 가구) 노인(65세 이상) 2인으로 구성되며 ① 기초생활수급자, ② 차상위, ③ 기초연금수급자 가구 중</p>
                    <ul>
                        <li>한 명이 질환(당뇨, 혈압, 뇌졸중 및 치매 등)을 앓고 있거나 거동이 불편한 경우</li>
                        <li>모두 75세 이상인 경우</li>
                    </ul>
                    <p>(조손가구) 노인(65세 이상)과 손·자녀(24세 이하)로만 구성된 가구 중</p>
                    <ul>
                        <li>(노인 1인 및 손자녀) 독거노인 기준과 동일</li>
                        <li>(노인 2인 및 손자녀) 노인 2인 가구 기준과 동일</li>
                    </ul>

                    <p>· 장애인 가구</p>
                    <ul>
                        <li>장애인활동지원 수급자이면서 독거 또는 취약가구에 해당하는 장애인</li>
                        <li>장애인활동지원 수급자 외 장애인으로서 기초지자체장이 독거 또는 취약가구 등의 생활 여건을 고려해 상시 보호가 필요하다고 인정하는 장애인</li>
                    </ul>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">시스템 소개</h3>
                <div class="business-detail">
                    <p>· 댁내장비 : 게이트웨이, 화재감지기, 출입감지기, 활동량감지기, 응급호출기</p>
                </div>
            </div>
        </div>

        <img style="width:600px" src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img0.png" alt="">
        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img3.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img4.jpg" alt="">
            </div>
        </div>
    </div>
</div>