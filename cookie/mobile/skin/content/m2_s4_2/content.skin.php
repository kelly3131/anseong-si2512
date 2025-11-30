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
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab active">재가복지사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_3" class="sub-tab">경로식당 무료급식사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_4" class="sub-tab">식사배달지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_5" class="sub-tab">이동세탁서비스사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">재가복지사업</h2>
        </div>
        <p>경제적·신체적·심리적 어려움이 있는 저소득 어르신에게 맞춤형 서비스를 제공해 건강하고 안정된 노후를 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>경제적·신체적·심리적 어려움이 있는 저소득 어르신에게 맞춤형 서비스를 제공해 건강하고 안정된 노후를 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 관내 및 당사자 가정</li>
                    <li><strong>서비스 대상 :</strong> 안성시 거주 만60세이상 저소득 노인</li>
                    <li><strong>서비스 기간 :</strong> 연중</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li><strong>재가방문서비스</strong> (방문이미용, 효도사진촬영)</li>
                        <li><strong>자원연계 프로그램</strong> (나들이, 정서지원 프로그램, 후원물품 지원)</li>
                        <li><strong>결연후원사업</strong></li>
                        <li><strong>명절지원사업</strong> (설, 추석)</li>
                        <li><strong>겨울나기 지원사업</strong> (난방유, 김치 등)</li>
                        <li><strong>주거환경개선서비스</strong> (청소지원)</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">서비스 신청</span>
                    <span class="arrow">→</span>
                    <span class="step">실태조사</span>
                    <span class="arrow">→</span>
                    <span class="step">선정</span>
                    <span class="arrow">→</span>
                    <span class="step">서비스 제공</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_2_img4.png" alt="">
            </div>
        </div>
    </div>
</div>