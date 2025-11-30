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
            <a href="/bbs/content.php?co_id=m2_s3_1" class="sub-tab active">홍보사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_2" class="sub-tab">일반자원봉사사업</a>
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
            <h2 class="title-with-icon">홍보사업</h2>
        </div>
        <p>지역사회 내 노인복지관의 다양한 사업과 서비스를 효과적으로 알리고, 어르신 및 지역주민의 참여를 확대합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>지역사회 내 노인복지관의 다양한 사업과 서비스를 효과적으로 알리고, 어르신 및 지역주민의 참여를 확대하여 복지관 인지도 향상과 긍정적 이미지 제고에 기여.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 전역 및 인근 지역</li>
                    <li><strong>서비스 대상 :</strong> 복지관 이용 어르신, 지역주민, 유관기관 및 후원·자원봉사자</li>
                    <li><strong>서비스 기간 :</strong> 연중 상시</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li>복지관 웹진, 리플렛, 홍보물 제작 및 배포</li>
                        <li>홈페이지, SNS(카카오톡 채널) 운영</li>
                        <li>지역 언론사 보도자료 배포 및 언론홍보</li>
                        <li>대내외 현수막, 배너 등 홍보매체 활용</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">홍보계획 수립 (연간 홍보계획 및 홍보 전략 마련)</span>
                    <span class="arrow">→</span>
                    <span class="step">홍보콘텐츠 제작 (온라인·오프라인 홍보물 제작)</span>
                    <span class="arrow">→</span>
                    <span class="step">홍보 실행 (배포 및 게시, 온라인 채널 업로드, 언론 홍보 진행)</span>
                    <span class="arrow">→</span>
                    <span class="step">결과보고 (사업실적 정리 및 평가)</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_1_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_1_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_1_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_1_img4.png" alt="">
            </div>
        </div>
    </div>
</div>