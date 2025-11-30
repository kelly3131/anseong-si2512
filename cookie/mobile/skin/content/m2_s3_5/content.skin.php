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
            <a href="/bbs/content.php?co_id=m2_s3_4" class="sub-tab">지역복지연계사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_5" class="sub-tab active">지역사회자원개발사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_6" class="sub-tab">복리후생사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">지역사회자원개발사업</h2>
        </div>
        <p>지역사회의 잠재적 나눔 자원을 발굴하고 후원자 신뢰를 바탕으로 선순환적 자원 개발을 통해 복지관 재정 안정과 어르신 삶의 질 향상을 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>지역사회의 잠재적 나눔 자원을 발굴하고 후원자 신뢰를 바탕으로 선순환적 자원 개발을 통해 복지관 재정 안정과 어르신 삶의 질 향상을 지속적으로 지원합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시</li>
                    <li><strong>서비스 대상 :</strong> 복지관 이용자</li>
                    <li><strong>서비스 기간 :</strong> 월~금, 9:00~18:00 (주말, 공휴일 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>1. 기금후원 (정기, 일시)</h4>
                    <ul>
                        <li><strong>월 정기 후원(CMS) :</strong> 월 1회 정기적으로 하는 후원. 은행에 방문하지 않고 후원신청서 작성을 통한 후원 신청</li>
                        <li><strong>자동이체 후원 :</strong> 후원자가 후원계좌에 자동이체 설정을 통해 후원</li>
                        <li><strong>통장 입금 :</strong> 후원자가 후원계좌에 직접 입금을 통해 후원</li>
                        <li><strong>후원계좌 :</strong> 농협 301-0298-5901-31 (예금주: 안성시노인복지관)</li>
                    </ul>
                    
                    <h4>2. 물품후원 (정기, 일시)</h4>
                    <p>어르신, 복지관에 필요한 물품 후원</p>
                    
                    <h4>3. 지정후원</h4>
                    <p>후원금품이 사용되는 목적, 대상을 지정하여 후원<br>
                    후원계좌: 농협 301-0298-5888-01 (예금주: 안성시노인복지관)</p>
                    
                    <h4>4. 모금통</h4>
                    <p>안성시 내 가게, 상점 등에 비치된 안성시노인복지관 모금함을 통해 후원</p>
                    
                    <h4>5. 후원혜택</h4>
                    <ul>
                        <li>기부금영수증 발행 (법인세법 24조 및 소득세법 제34조에 의거하여 소득공제 혜택)</li>
                        <li>후원 감사 문자 발송</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">복지관에 방문하여 후원신청서 작성</span>
                    <span class="arrow">→</span>
                    <span class="step">후원 등록</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_5_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_5_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_5_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_5_img4.png" alt="">
            </div>
        </div>
    </div>
</div>