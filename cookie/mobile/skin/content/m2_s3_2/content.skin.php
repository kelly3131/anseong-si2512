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
        <a href="/bbs/content.php?co_id=m2_s3_1" class="main-tab active">기획홍보팀</a>
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s3_1" class="sub-tab">홍보사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_2" class="sub-tab active">일반자원봉사사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_3" class="sub-tab">노인권익증진사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_4" class="sub-tab">지역복지연계사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_5" class="sub-tab">지역사회자원개발사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_6" class="sub-tab">복리후생사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">일반자원봉사사업</h2>
        </div>
        <p>지역사회의 재능 있는 자원봉사자를 발굴·연계해 노인복지관 프로그램에 참여시켜 어르신 복지 향상과 나눔문화 확산에 기여합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>지역사회의 재능 있는 자원봉사자를 발굴·연계해 노인복지관 프로그램에 참여시켜 어르신 복지 향상과 나눔문화 확산에 기여</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 및 인근 지역</li>
                    <li><strong>서비스 대상 :</strong> 복지관 이용 어르신, 어르신 및 지역사회 어르신</li>
                    <li><strong>서비스 기간 :</strong> 연중 상시</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li><strong>프로그램 보조</strong></li>
                        <li><strong>경로식당 급식 및 배식 지원</strong></li>
                        <li><strong>행사 지원</strong> (경로잔치, 기념행사 등)</li>
                        <li><strong>재능기부</strong> (이미용, 공연, 상담, 교육)</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">홍보 및 모집 (1365, VMS를 통한 자원봉사자 모집)</span>
                    <span class="arrow">→</span>
                    <span class="step">신청 및 등록 (자원봉사 신청 → 자원봉사자 등록)</span>
                    <span class="arrow">→</span>
                    <span class="step">배치 및 활동 (봉사자의 특성 및 희망 분야에 따라 배치)</span>
                    <span class="arrow">→</span>
                    <span class="step">관리 및 지원 (활동일지 관리, 봉사활동 교육 실시)</span>
                    <span class="arrow">→</span>
                    <span class="step">평가 및 보상 (활동실적 확인, 우수 자원봉사자 표창)</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_2_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_2_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_2_img3.png" alt="">
            </div>
        </div>
    </div>
</div>