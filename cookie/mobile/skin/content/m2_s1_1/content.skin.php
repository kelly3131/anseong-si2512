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
            <a href="/bbs/content.php?co_id=m2_s1_1" class="sub-tab active">인재육성사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_2" class="sub-tab">운영사업(사무, 자산관리)</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_3" class="sub-tab">운영사업(회계)</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s1_3" class="sub-tab">시설안전관리</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">인재육성사업</h2>
        </div>
        <p>전문성 향상과 역량 개발을 통해 우수한 인재를 육성합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>사회복지 현장에서 사회복지전문가로 성장하기 위해 교육과 훈련과정은 필수다. 인재상(참사람)을 정립하고 이를 바탕으로 전문성 있는 교육을 통해 이용자와 종사자가 모두 성장하고, 안정화된 기관운영을 도모하고자 한다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시노인복지관 전 직원</li>
                    <li><strong>서비스 대상</strong>안성시노인복지관 종사자</li>
                    <li><strong>서비스 기간</strong>계속</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ol>
                        <li>기본소양 함양: 보수교육, 법정의무교육, 안전교육, 인권교육</li>
                        <li>역량 향상: 신입직원교육, 역량교육</li>
                        <li>인재상 확립: 직원 연수, 법인 교육</li>
                        <li>직원 포상: 우수직원 포상, 관외 포상</li>
                    </ol>
                    
  
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">교육 욕구조사</span>
                    <span class="arrow">→</span>
                    <span class="step">교육계획 수립</span>
                    <span class="arrow">→</span>
                    <span class="step">교육 실시, 직원 포상</span>
                    <span class="arrow">→</span>
                    <span class="step">인재상 확립</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_1_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_1_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_1_img3.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_1_img4.jpg" alt="">
            </div>
        </div>
    </div>
</div>