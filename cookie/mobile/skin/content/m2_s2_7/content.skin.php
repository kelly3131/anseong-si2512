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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_2" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container m2">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s2_1" class="sub-tab">회원관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_2" class="sub-tab">평생교육사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_3" class="sub-tab">동아리활동지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_4" class="sub-tab">건강생활지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_5" class="sub-tab">기능회복지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_7" class="sub-tab active">모바일헬스케어사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_6" class="sub-tab">노인상담사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_3" class="sub-tab">노인권익증진사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">모바일헬스케어사업</h2>
        </div>
        <p></p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>간호사·물리치료사·상담사의 전문적 협업을 통해 모바일 기반 건강 모니터링과 맞춤형 건강관리를 제공하여 어르신들의 자가 건강관리 능력 향상과 건강한 생활 유지를 지원하는 것을 목적으로 합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>건강이음</strong> :<br>
                        서비스 대상 : 복지관 이용어르신 중 만성질환을 가지고 있는 어르신<br>
                        서비스 기간 : 3월~11월<br>
                        서비스 내용 : 건강교육, 재활운동, 집단상담<br>
                        서비스 시간 : 주1회(월) 10:00~11:00<br>
                        서비스 장소 : 2층 즐김터 및 다목적실<br>
                        참여자 관리 : 사전,사후 검사(인바디,혈액검사,노인우울척도검사) 등을 통한 개별 상담 및 관리를 통해 올바른 생활습관을 하도록 지원
                    </li>
                    <li><strong>디지털트레이닝</strong> :<br>
                        서비스 대상 : 복지관 이용어르신 중 고령자<br>
                        서비스 기간 : 3월~9월<br>
                        서비스 내용 : 동영상을 통한 근육 및 치매예방 운동 (무료 수업)<br>
                        서비스 시간 : 주2회(화,목) 14:00~15:00<br>
                        서비스 장소 : 4층 강당<br>
                        참여자 관리 : 사전,사후 체력검진을 통하여 신체(근육량 등) 변화를 통하여 만족감을 얻어 자가관리역량 지원
                    </li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li><strong>건강이음</strong> : 전문직(간호사, 물리치료사, 상담사) 협업을 통한 맞춤형 건강관리로 건강한 노후를 지원</li>
                        <li><strong>디지털트레이닝</strong> : 근력 향상과 치매 예방을 위한 맞춤형 운동 프로그램을 제공하고, 교육 중 활용한 유튜브 동영상을 가정에서도 혼자 지속적으로 활용할 수 있도록 지원하여 자가 건강관리를 지원</li>
                    </ul>
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