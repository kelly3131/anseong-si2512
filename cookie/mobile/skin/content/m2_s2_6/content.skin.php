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
            <a href="/bbs/content.php?co_id=m2_s2_5" class="sub-tab">기능회복지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_6" class="sub-tab active">노인상담사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">노인상담사업</h2>
        </div>
        <p>노인자살·우울·학대 등 다양한 노인문제 예방을 위한 상담중심 지원사업을 추진합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>노인자살·우울·학대 등 다양한 노인문제 예방을 위한 상담중심 지원사업 추진.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 관내</li>
                    <li><strong>서비스 대상 :</strong> 복지관 만 65세 이상 어르신</li>
                    <li><strong>서비스 기간 :</strong> 1월~12월</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>① 상담이 필요한 지역 내 거주 어르신</h4>
                    <p>노인심리상담, 노인성(性)상담, 노인우울, 사별(애도)상담, 치매 및 치매 가족 상담, 위기상담 (자살, 학대, 재해 등)</p>
                    
                    <h4>② 집단상담</h4>
                    <p>웰-다잉(죽음준비), 대인관계 향상(IPT), 자아 통합 집단, 미술 심리치료 집단, 사별(애도)집단 등 지역 내 어르신 대상</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">① 초기상담면담접수 (자발적/연개 및 의뢰)</span>
                    <span class="arrow">→</span>
                    <span class="step">② 위험성 평가 및 분류 (면담평가)</span>
                    <span class="arrow">→</span>
                    <span class="step">③ 위기 개입 (긴급구조)</span>
                    <span class="arrow">→</span>
                    <span class="step">④ 심리상담 (대인관계향상, 우울등)</span>
                    <span class="arrow">→</span>
                    <span class="step">⑤ 서비스연계 (생활지원 및 경제지원)</span>
                    <span class="arrow">→</span>
                    <span class="step">⑥ 사후평가 및 상담종결</span>
                    <span class="arrow">→</span>
                    <span class="step">⑦ 추수상담</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_6_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_6_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_6_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_6_img4.png" alt="">
            </div>
        </div>
    </div>
</div>