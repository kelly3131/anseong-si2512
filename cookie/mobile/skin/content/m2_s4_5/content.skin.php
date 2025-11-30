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
            <a href="/bbs/content.php?co_id=m2_s4_4" class="sub-tab">식사배달지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_5" class="sub-tab active">이동세탁서비스사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">이동세탁서비스사업</h2>
        </div>
        <p>안성시 노인을 대상으로 이동 세탁 서비스를 제공하여 위생적인 생활환경 조성과 건강 증진을 도모합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>안성시 노인을 대상으로 이동 세탁 서비스를 제공하여 위생적인 생활환경 조성과 건강 증진을 도모.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시</li>
                    <li><strong>서비스 대상 :</strong> 독거, 기초수급자, 차상위, 취약계층어르신(만65세이상)</li>
                    <li><strong>서비스 기간 :</strong> 3월 ~ 11월(동절기 12월~2월/혹서기 7월~8월 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <p>대상자 가정 또는 인근 경로당에서 세탁 및 건조 진행</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">홍보 및 발굴</span>
                    <span class="arrow">→</span>
                    <span class="step">신청 및 접수</span>
                    <span class="arrow">→</span>
                    <span class="step">서비스 제공</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img3.png" alt="">
            </div>
        </div>
    </div>
</div>