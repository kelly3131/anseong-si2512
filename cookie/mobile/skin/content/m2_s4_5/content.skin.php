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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab active">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_2" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s5_1" class="sub-tab">노인맞춤돌봄서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_3" class="sub-tab">응급안전안심서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_5" class="sub-tab active">이동세탁서비스사업</a>
            <!-- <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_2" class="sub-tab">세탁서비스</a> -->
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
                <h3 class="section-title-with-icon2">이동세탁서비스 사업</h3>
                <p>이동세탁서비스 사업은 고령화로 인한 신체기능 저하와 열악한 주거환경으로 인해 일상적인 세탁 및 위생 관리에 어려움을 겪는 취약노인을 대상으로, 이동세탁 차량을 활용하여 세탁·건조 서비스를 제공하는 찾아가는 생활 지원입니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>이동세탁서비스사업은 고령화로 인한 신체기능 저하와 열악한 생활환경으로 일상적인 세탁 및 위생 관리에 어려움을 겪는 취약노인을 대상으로, 찾아가는 세탁·건조 서비스를 제공함으로써 노인의 기본적인 생활 유지를 지원하고 안전하고 위생적인 주거환경을 조성합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>서비스지역 :</strong> 안성시(대상자 가정 또는 마을회관, 경로당에서 진행)</li>
                    <li><strong>운영기간 :</strong> 3월 ~ 11월(동절기 12월 ~ 2월 제외)</li>
                    <li><strong>운영대상 :</strong> 독거, 기초생활수급자, 차상위, 취약계층, 저소득(만 65세 이상)</li>
                    <li><strong>세탁종류 :</strong> 이불 종류(카페트, 솜이불, 의류는 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업내용</h3>
                <div class="business-detail">
                    <p>대상자 가정 또는 인근 경로당에서 세탁 및 건조 진행</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon2">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">홍보 및 발굴</span>
                    <span class="arrow">→</span>
                    <span class="step">신청 및 접수</span>
                    <span class="arrow">→</span>
                    <span class="step">이동세탁 답사</span>
                    <span class="arrow">→</span>
                    <span class="step">서비스 제공</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_5_img3.jpg" alt="">
            </div>
        </div>
    </div>
</div>