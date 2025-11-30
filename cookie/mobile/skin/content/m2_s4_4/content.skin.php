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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab active">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s4_1" class="sub-tab">사례관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab">재가복지사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_3" class="sub-tab">경로식당 무료급식사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_4" class="sub-tab active">식사배달지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_5" class="sub-tab">이동세탁서비스사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">식사배달지원사업</h2>
        </div>
        <p>소득 거동불편 재가 어르신에게 식사 배달로 결식을 예방하고 건강과 경제적 부담을 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>소득 거동불편 재가 어르신에게 식사 배달로 결식을 예방하고 건강과 경제적 부담을 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 대상자 가정</li>
                    <li><strong>서비스 대상 :</strong> 안성시 거주 만 60세 이상 취약계층 노인 중 식사 배달이 필요한 노인</li>
                    <li><strong>서비스 기간 :</strong> 연중</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <p>주 1회 식사배달 서비스 지원</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">STEP 01 안성시 외 유관기관 등 추천</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 02 가정방문 및 실태조사</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 03 판정회의</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 04 대상자 선정 및 탈락</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 05 식사배달 지원(자원봉사자 배달)</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_4_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_4_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_4_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_4_img4.png" alt="">
            </div>
        </div>
    </div>
</div>