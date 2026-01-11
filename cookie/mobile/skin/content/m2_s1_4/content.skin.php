<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m2_s1_1" class="main-tab active">운영지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s2_1" class="main-tab">문화건강팀</a>
        <a href="/bbs/content.php?co_id=m2_s3_1" class="main-tab">기획홍보팀</a>
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s1_1" class="sub-tab">인재육성사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_2" class="sub-tab">운영사업(사무, 자산관리)</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_3" class="sub-tab">운영사업(회계)</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_4" class="sub-tab active">시설안전관리</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">시설안전관리</h2>
        </div>
        <p>시설물의 효율적인 관리와 운영을 통해 쾌적하고 안전한 환경을 조성합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>시설물의 효율적인 관리와 운영을 통해 쾌적하고 안전한 환경을 만들고 유지하여 복지관의 서비스 품질 향상에 기여</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시노인복지관</li>
                    <li><strong>서비스 대상 :</strong> 노인복지관을 이용하시는 어르신, 복지관 임직원</li>
                    <li><strong>서비스 기간 :</strong> 연중</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <p>시설의 점검 및 유지관리, 이용 어르신들의 안전관리, 냉난방기전기 가스등 설비의 운영</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">1. 시설 점검 / 소방 및 안전 계획 수립</span>
                    <span class="arrow">→</span>
                    <span class="step">2. 정기 및 수시 점검</span>
                    <span class="arrow">→</span>
                    <span class="step">3. 유지 보수 작업 수행</span>
                    <span class="arrow">→</span>
                    <span class="step">4. 관리 결과 보고 및 기록 관리</span>
                    <span class="arrow">→</span>
                    <span class="step">5. 이용자 의견 접수, 개선사항 반영 및 사후 점검</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_4_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_4_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_4_img3.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_4_img4.jpg" alt="">
            </div>
        </div>
    </div>
</div>