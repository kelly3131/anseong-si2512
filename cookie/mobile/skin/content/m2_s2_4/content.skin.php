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
            <a href="/bbs/content.php?co_id=m2_s2_4" class="sub-tab active">건강생활지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_5" class="sub-tab">기능회복지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_6" class="sub-tab">노인상담사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">건강생활지원사업</h2>
        </div>
        <p>조기검진·건강교육·의료연계로 어르신의 건강한 노후를 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>조기검진·건강교육·의료연계로 어르신의 건강한 노후를 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시</li>
                    <li><strong>서비스 대상 :</strong> 안성시노인복지관 이용 어르신</li>
                    <li><strong>서비스 기간 :</strong> 1월~12월</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>의료사업</h4>
                    <p>무료이동진료, 만성질환관리(혈압,혈당체크) 병원연계, 응급처치, 비상약 지급</p>
                    
                    <h4>예방사업</h4>
                    <p>감염예방교육, 심폐소생술교육</p>
                    
                    <h4>진단사업</h4>
                    <p>체력검진, 청력검사, 치매선별검사, 인바디검사</p>
                    
                    <h4>건강교육사업</h4>
                    <p>고혈압교실, 당뇨교실, 전립성질환교육, 요실금교육, 퇴행성관절염교육, 노인성 피부질환관리 등</p>
                    
                    <h4>노인건강운동</h4>
                    <p>가치라인, 낙상예방운동, 체력검진</p>
                    
                    <h4>치매예방프로그램</h4>
                    <ul>
                        <li><strong>가치놀자</strong> (관내어르신대상)</li>
                        <li><strong>가치해요</strong> (재가어르신대상)</li>
                        <li><strong>가치성장</strong> (치매 관련 민간강사역량강화)</li>
                    </ul>
                    
                    <h4>건강증진사업</h4>
                    <p>안마</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="business-detail">
                    <h4>일회성교육</h4>
                    <div class="procedure-flow">
                        <span class="step">참여자모집(게시판)</span>
                        <span class="arrow">→</span>
                        <span class="step">참여자 신청접수</span>
                        <span class="arrow">→</span>
                        <span class="step">프로그램진행</span>
                    </div>
                    
                    <h4>집단교육(8회기 이상진행)</h4>
                    <div class="procedure-flow">
                        <span class="step">참여자모집(게시판)</span>
                        <span class="arrow">→</span>
                        <span class="step">프로그램 OT참석</span>
                        <span class="arrow">→</span>
                        <span class="step">참여신청</span>
                        <span class="arrow">→</span>
                        <span class="step">신청자중 선별작업</span>
                        <span class="arrow">→</span>
                        <span class="step">사전검사</span>
                        <span class="arrow">→</span>
                        <span class="step">프로그램진행</span>
                        <span class="arrow">→</span>
                        <span class="step">사후검사</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_4_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_4_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_4_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_4_img4.png" alt="">
            </div>
        </div>
    </div>
</div>