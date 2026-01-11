<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m1_s1" class="main-tab">법인소개</a>
        <a href="/bbs/content.php?co_id=m1_s2" class="main-tab">인사말</a>
        <a href="/bbs/content.php?co_id=m1_s3" class="main-tab active">미션 및 비전</a>
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-info">
                <h2 class="title-with-icon">미션 및 비전</h2>
                <p class="foundation-subtitle">안성시노인복지관의 사명과 미래 목표</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon mission-title">MISSION</h3>
                <div class="mission-statement">
                    <p class="mission-text">나눔과 소통으로 행복을 디자인하는 안성맞춤 노인복지 실현</p>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon vision-title">VISION</h3>
                <div class="vision-grid">
                    <div class="vision-item">
                        <div class="vision-number">01</div>
                        <div class="vision-content">
                            <h4>행복을 디자인하는 복지관</h4>
                            <p>변화하는 이용자의 욕구에 부합하는 맞춤형 프로그램 제공</p>
                            <p>신체 및 정신적 건강생활 지원을 통한 행복한 노년 실현</p>
                        </div>
                    </div>
                    
                    <div class="vision-item">
                        <div class="vision-number">02</div>
                        <div class="vision-content">
                            <h4>나눔을 디자인하는 복지관</h4>
                            <p>지역사회 내 다양한 복지파트너 발굴을 통해 나눔활동을 실현</p>
                            <p>나눔활동을 통한 자원봉사 공헌 및 참여 실현</p>
                        </div>
                    </div>
                    
                    <div class="vision-item">
                        <div class="vision-number">03</div>
                        <div class="vision-content">
                            <h4>소통을 디자인하는 복지관</h4>
                            <p>지역사회 네트워크를 활용하여 함께 소통하고 성장하는 복지 공동체 실현</p>
                            <p>세대간 소통과 화합의 나눔 문화 조성</p>
                        </div>
                    </div>
                    
                    <div class="vision-item">
                        <div class="vision-number">04</div>
                        <div class="vision-content">
                            <h4>동행을 디자인하는 복지관</h4>
                            <p>다양한 욕구 파악을 통해 당사자 중심의 통합 사례관리</p>
                            <p>맞춤형 돌봄 플랫폼 구축을 통해 지역사회 안전망 실현</p>
                        </div>
                    </div>
                    
                    <div class="vision-item">
                        <div class="vision-number">05</div>
                        <div class="vision-content">
                            <h4>참여를 디자인하는 복지관</h4>
                            <p>전문성 있는 노인일자리를 제공함으로써 신노년 세대의 참여 기회 확대</p>
                            <p>지역주민의 참여를 통해 봉사 문화 확산</p>
                        </div>
                    </div>
                    
                    <div class="vision-item">
                        <div class="vision-number">06</div>
                        <div class="vision-content">
                            <h4>존중을 디자인하는 복지관</h4>
                            <p>이용자와 직원의 인권과 권익을 존중하여 윤리경영 실현</p>
                            <p>공감과 존중을 통해 바른 인성을 갖춘 인재 양성</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>