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
            <a href="/bbs/content.php?co_id=m2_s3_2" class="sub-tab">일반자원봉사사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_3" class="sub-tab">노인권익증진사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_4" class="sub-tab active">지역복지연계사업</a>
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
            <h2 class="title-with-icon">지역복지연계사업</h2>
        </div>
        <p>지역사회 주체와 연계하여 파트너십을 강화하고 시너지를 창출하는 지역복지 거점을 구축합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>지역사회 주체와 연계하여 파트너십을 강화하고 시너지를 창출하는 지역복지 거점 구축.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시노인복지관</li>
                    <li><strong>서비스 대상 :</strong> 만 60세 이상 안성시 거주 어르신</li>
                    <li><strong>서비스 기간 :</strong> 월~금, 9:00~18:00 (주말, 공휴일 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ol>
                        <li><strong>지역사회 특별 행사</strong></li>
                        <li><strong>지역 연계 행사</strong></li>
                        <li><strong>연계기관 관리</strong></li>
                        <li><strong>문화특강</strong></li>
                        <li><strong>편의시설 제공 및 시설대여</strong></li>
                        <li><strong>사회복지 실습지도</strong></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_4_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_4_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_4_img3.png" alt="">
            </div>
        </div>
    </div>
</div>