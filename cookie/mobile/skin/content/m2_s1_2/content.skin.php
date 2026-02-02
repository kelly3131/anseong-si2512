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
            <a href="/bbs/content.php?co_id=m2_s1_2" class="sub-tab active">운영사업(사무, 자산관리)</a>
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
            <h2 class="title-with-icon">운영사업(사무, 자산관리)</h2>
        </div>
        <p>효율적인 사무관리와 체계적인 자산관리를 통해 안정적인 기관운영을 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>복지관의 효율적 행정 운영과 자산의 체계적 관리를 통해 기관의 투명성과 공공성을 강화하고, 안정적인 복지서비스 제공 기반 조성</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시노인복지관</li>
                    <li><strong>서비스 대상 :</strong> 복지관 전 부서 및 이용자, 외부 협력기관</li>
                    <li><strong>서비스 기간 :</strong> 매년 1월 1일 ~ 12월 31일</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>1. 사무관리</h4>
                    <ul>
                        <li>각종 공문서 접수·발송 및 기록물 관리</li>
                        <li>복지관 운영 관련 각종 계약·수입결의 업무 지원</li>
                        <li>비품 및 소모품 구입, 물품 재고 관리</li>
                        <li>복지관 내 공용서류 및 행정지원 시스템 유지</li>
                    </ul>
                    
                    <h4>2. 자산관리</h4>
                    <ul>
                        <li>자산대장 정비 및 물품 등록·말소 관리</li>
                        <li>불용품 처리 및 고철·폐기물 수입 정산</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">운영계획 수립</span>
                    <span class="arrow">→</span>
                    <span class="step">예산 편성 및 집행 관리</span>
                    <span class="arrow">→</span>
                    <span class="step">자산등록 및 물품관리 체계 구축</span>
                    <span class="arrow">→</span>
                    <span class="step">불용품 처리 및 결과 보고</span>
                    <span class="arrow">→</span>
                    <span class="step">성과평가 및 차년도 계획 수립</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_2_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s1_2_img2.png" alt="">
            </div>
            <!--  -->
        </div>
    </div>
</div>