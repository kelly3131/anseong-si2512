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
            <a href="/bbs/content.php?co_id=m2_s2_2" class="sub-tab active">평생교육사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_3" class="sub-tab">동아리활동지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s2_4" class="sub-tab">건강생활지원사업</a>
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
            <h2 class="title-with-icon">평생교육사업</h2>
        </div>
        <p>자기개발·사회참여·여가활동 지원으로 어르신의 활기찬 노후와 삶의 질 향상을 도모합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>자기개발·사회참여·여가활동 지원으로 어르신의 활기찬 노후와 삶의 질 향상 도모.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성관내</li>
                    <li><strong>서비스 대상 :</strong> 복지관 회원</li>
                    <li><strong>서비스 기간 :</strong> 1월~12월</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>취미여가 프로그램(23과목)</h4>
                    <p>가요교실(오전,오후), 실버난타(초급,중급), 사진반, 매듭공예, 우쿨렐레(초급,중급), 오카리나(초급,중급), 하모니카(초급,중급), 통기타(초급,중급,고급), 사물놀이(A,B,중급), 민요장고(초급,중급,고급), 전통무용, 색연필 및 수채화</p>
                    
                    <h4>건강증진 프로그램(12과목)</h4>
                    <p>에어로빅(초급,중급), 실버건강체조, 요가(오전,오후), 힐링댄스, 라인댄스(초급,중급), 소설댄스(초급,중급), 시니어힐링체조, 근력강화체조</p>
                    
                    <h4>정보화 프로그램(4과목)</h4>
                    <p>컴퓨터(초급,중급), 스마트폰(초급,중급)</p>
                    
                    <h4>학습프로그램(10과목)</h4>
                    <p>영어(기초,초급,중급), 일본어(기초,초급,중급), 서예A, 서예B, 사군자, 한국화</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="business-detail">
                    <h4>이용안내</h4>
                    <div class="procedure-flow">
                        <span class="step">회원가입</span>
                        <span class="arrow">→</span>
                        <span class="step">이용등록 및 이용증 발급</span>
                        <span class="arrow">→</span>
                        <span class="step">프로그램 상담 및 신청</span>
                        <span class="arrow">→</span>
                        <span class="step">프로그램 이용</span>
                    </div>
                    
                    <h4>환불안내</h4>
                    <div class="procedure-flow">
                        <span class="step">복지관 방문</span>
                        <span class="arrow">→</span>
                        <span class="step">환불신청서 작성</span>
                        <span class="arrow">→</span>
                        <span class="step">계좌이체</span>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">회원준수사항</h3>
                <ul>
                    <li>모든 프로그램 접수는 선착순으로 진행됩니다.</li>
                    <li>본인 방문접수(회원증 지참)만 가능합니다.</li>
                    <li>등록하지 않은 프로그램 수강 적발 시 차후 접수에 불이익이 발생할 수 있습니다.</li>
                    <li>프로그램별 청강은 1회 가능하오니 충분히 고려하여 접수해주시기 바랍니다.<br>
                        <span class="indent">(1층 사무실에서 담당자와 상담 후 청강이 가능합니다)</span></li>
                    <li>프로그램 변경은 정해진 기간안에서만 가능합니다.</li>
                </ul>
            </div>
        </div>
        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_2_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_2_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s2_2_img3.png" alt="">
            </div>
        </div>
    </div>
</div>