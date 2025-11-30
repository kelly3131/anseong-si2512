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
        <a href="/bbs/content.php?co_id=m2_s2_1" class="main-tab active">문화건강팀</a>
        <a href="/bbs/content.php?co_id=m2_s3_1" class="main-tab">기획홍보팀</a>
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s2_1" class="sub-tab">상담사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_2" class="sub-tab">평생교육사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_3" class="sub-tab">동아리활동지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_4" class="sub-tab">건강생활지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_5" class="sub-tab active">기능회복지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_6" class="sub-tab">노인상담사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">기능회복지원사업</h2>
        </div>
        <p>어르신의 신체·정신 기능 회복을 통해 자립적이고 건강한 노후를 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>어르신의 신체·정신 기능 회복을 통해 자립적이고 건강한 노후를 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시</li>
                    <li><strong>서비스 대상 :</strong> 복지관 이용자</li>
                    <li><strong>서비스 기간 :</strong> 주중</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>물리치료</h4>
                    <p>온열, 마사지 등을 통한 기능 회복 지원</p>
                    
                    <h4>전문의 진료</h4>
                    <p>건강상담 및 촉탁의 진료 제공</p>
                    
                    <h4>체력단련</h4>
                    <p>로잉머신, 실내자전거, 스텝퍼, 케틀벨, 플랫벤치 등 운동기구 활용</p>
                    
                    <h4>재활운동</h4>
                    <p>소도구를 활용한 맞춤형 운동 진행 및 사전•사후 검사 실시</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">이용접수 (참여 신청 및 기초상담)</span>
                    <span class="arrow">→</span>
                    <span class="step">사전 평가 (건강 상태 평가)</span>
                    <span class="arrow">→</span>
                    <span class="step">프로그램 참여 (맞춤 프로그램 진행)</span>
                    <span class="arrow">→</span>
                    <span class="step">사후 평가 (효과 측정 및 만족도 조사)</span>
                    <span class="arrow">→</span>
                    <span class="step">사후 관리 (필요시 타 서비스 및 기관 연계)</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_5_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_5_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_5_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_5_img4.png" alt="">
            </div>
        </div>
    </div>
</div>