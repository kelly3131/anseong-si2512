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
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab">재가복지사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_3" class="sub-tab active">경로식당 무료급식사업</a>
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
            <h2 class="title-with-icon">경로식당 무료급식사업</h2>
        </div>
        <p>기초·차상위, 국가유공자, 90세 이상 어르신들에게 균형 잡힌 무료 식사를 제공해 경제적 부담을 줄이고 건강과 사회적·심리적 안녕을 증진합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>기초·차상위, 국가유공자, 90세 이상 어르신들에게 균형 잡힌 무료 식사를 제공해 경제적 부담을 줄이고 건강과 사회적·심리적 안녕을 증진.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong><br>
                        ① 안성시노인복지관 경로식당<br>
                        ② 공도 나소향 나눔밥상(공도읍 고무다리길 16)
                    </li>
                    <li><strong>서비스 대상 :</strong> 안성시 거주 만 60세 이상 국민기초생활수급자, 차상위 계층, 국가유공자(본인), 만 90세 이상</li>
                    <li><strong>서비스 기간 :</strong> 매주 월~금요일(공휴일 및 주말 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <p>주 5회 식사제공을 통해 균형적인 영양섭취 및 영양결핍 방지</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="procedure-flow">
                    <span class="step">STEP 01 서류 지참</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 02 복지관 방문</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 03 신청 및 상담</span>
                    <span class="arrow">→</span>
                    <span class="step">STEP 04 경로식당 이용(중식)</span>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_3_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_3_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_3_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_3_img4.png" alt="">
            </div>
        </div>
    </div>
</div>