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
            <a href="/bbs/content.php?co_id=m2_s1_3" class="sub-tab active">운영사업(회계)</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_4" class="sub-tab">시설안전관리</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">운영사업(회계)</h2>
        </div>
        <p>투명하고 정확한 회계관리를 통해 신뢰받는 기관운영을 실현합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>복지관의 재정을 효율적으로 운영하기 위해 예산 편성, 집행, 회계관리 등 전반적인 재정업무를 수행함으로써 기관 운영의 안정성과 투명성을 확보</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 복지관 관할 지역</li>
                    <li><strong>서비스 대상 :</strong> 복지관 직원 및 어르신 등</li>
                    <li><strong>서비스 기간 :</strong> 매년 1월 1일 ~ 12월 31일</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li>연간 예산수립 및 집행</li>
                        <li>회계 관리 및 정산</li>
                        <li>세무 신고 및 관련 법규 준수</li>
                        <li>보조금 수입 및 지출관리</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">예산수립</span>
                    <span class="arrow">→</span>
                    <span class="step">예산집행</span>
                    <span class="arrow">→</span>
                    <span class="step">예산정산</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_3_img.jpg" alt="">
            </div>
        </div>
    </div>
</div>