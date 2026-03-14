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
            <a href="/bbs/content.php?co_id=m2_s2_1" class="sub-tab active">회원관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_2" class="sub-tab">평생교육사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_3" class="sub-tab">동아리활동지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_4" class="sub-tab">건강생활지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_5" class="sub-tab">기능회복지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_7" class="sub-tab">모바일헬스케어사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_6" class="sub-tab">노인상담사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_3" class="sub-tab">노인권익증진사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">회원관리사업</h2>
        </div>
        <p>회원관리, 상담과 정보제공을 통해 어르신의 욕구를 충족하고 심리사회적 지지를 지원합니다.</p>
    </div>

    <div class="content-card">
        

        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>어르신의 신체적·정신적 건강 유지 및 증진을 xhdog 활기찬 노후생활을 지원합니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>서비스지역 :</strong> 안성시노인복지관</li>
                    <li><strong>서비스 대상 :</strong> 만 60세 이상 안성시 거주 어르신</li>
                    <li><strong>서비스 기간 :</strong> 월~금 9:00~18:00(주말, 공휴일 제외)</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업내용</h3>
                <div class="business-detail">
                    <ul>
                        <li>회원관리 및 회원증 발급</li>
                        <li>회원가입 및 회원증 발급</li>
                        <li>월 1회 신규 회원 교육(기관 및 사업소개, 라운딩 등)</li>
                        <li>신규 및 기존 회원 상담 및 관리</li>
                    </ul>
                    <h4>2. 전문교육</h4>
                    <ul>
                        <li>전문가 및 전문기관과 연계하여 교육 실시</li>
                    </ul>
                    <h4>3. 집단상담</h4>
                    <ul>
                        <li>정서생활 지원, 노인행복 증진, 대인관계 향상 집단 프로그램 실시</li>
                    </ul>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon2">이용절차</h3>
                <div class="procedure-flow">
                    <span class="step">이용상담</span>
                    <span class="arrow">→</span>
                    <span class="step">이용등록</span>
                    <span class="arrow">→</span>
                    <span class="step">회원증 발급</span>
                    <span class="arrow">→</span>
                    <span class="step">신규회원교육</span>
                    <span class="arrow">→</span>
                    <span class="step">복지관 이용</span>
                </div>
                <div class="documents">
                    <p><strong>필요서류:</strong> 신분증, 증명사진 1장</p>
                    <p><strong>추가서류(해당자에 한함):</strong> 수급자, 차상위증명서, 국가유공자증(유족증 제외), 실거주지확인서</p>
                    <p><strong>본인이 직접 내방하여 신청하는 것을 원칙으로 함.</strong></p>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_1_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_1_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_1_img3.jpg" alt="">
            </div>
            <!-- <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_1_img4.png" alt="">
            </div> -->
        </div>
    </div>
</div>