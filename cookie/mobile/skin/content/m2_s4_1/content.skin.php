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
            <a href="/bbs/content.php?co_id=m2_s4_1" class="sub-tab active">사례관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab">재가복지사업</a>
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
            <h2 class="title-with-icon">사례관리사업</h2>
        </div>
        <p>복합적·만성적 어려움을 가진 당사자가 사례관리자와 함께 자원 활용 및 목표 수립을 통해 자립적 생활을 유지하도록 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>복합적·만성적 어려움을 가진 당사자가 사례관리자와 함께 자원 활용 및 목표 수립을 통해 자립적 생활을 유지하도록 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 당사자 가정</li>
                    <li><strong>서비스 대상 :</strong> 복합적이고 만성적인 어려움이 있어 사례 회의를 통해 개입이 필요하다고 판단된 어르신</li>
                    <li><strong>서비스 기간 :</strong> 연중</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li><strong>전화/내방/방문 상담</strong></li>
                        <li><strong>자원연계 및 발굴</strong></li>
                        <li><strong>위기가정지원</strong></li>
                        <li><strong>지역 네트워크 구축</strong></li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">사례 발굴·접수</span>
                    <span class="arrow">→</span>
                    <span class="step">초기면접 (방문/내방상담)</span>
                    <span class="arrow">→</span>
                    <span class="step">사례회의 (당사자 선정)</span>
                    <span class="arrow">→</span>
                    <span class="step">개입 계획</span>
                    <span class="arrow">→</span>
                    <span class="step">개입, 점검</span>
                    <span class="arrow">→</span>
                    <span class="step">평가 및 종결</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_1_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_1_img2.png" alt="">
            </div>
        </div>
    </div>
</div>