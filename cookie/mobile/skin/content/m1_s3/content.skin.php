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
                <!-- <p class="foundation-subtitle">안성시노인복지관의 사명과 미래 목표</p> -->
            </div>
        </div>
    </div>

      <div class="content-card">
        <!-- 핵심가치 -->
        <div class="section">
            <h2 class="section-title">핵심가치</h2>
            <div class="core-values">
                <div class="core-value-item">나눔으로 함께</div>
                <div class="core-value-item">소통하는 우리</div>
                <div class="core-value-item">향기로운 세상</div>
            </div>
        </div>

        <!-- 일러스트 -->
        <div class="illustration">
            <svg width="600" height="300" viewBox="0 0 600 300" xmlns="http://www.w3.org/2000/svg">
                <!-- 배경 원들 -->
                <circle cx="150" cy="150" r="80" fill="#FFF8E1" opacity="0.7"/>
                <circle cx="300" cy="150" r="80" fill="#E8F5E9" opacity="0.7"/>
                <circle cx="450" cy="150" r="80" fill="#FBE9E7" opacity="0.7"/>
                
                <!-- 나눔 (하트 모양) -->
                <g transform="translate(150, 120)">
                    <path d="M0,20 C0,10 -10,0 -20,0 C-30,0 -35,10 -35,20 C-35,40 0,60 0,60 C0,60 35,40 35,20 C35,10 30,0 20,0 C10,0 0,10 0,20 Z" fill="#F7B825"/>
                    <text x="0" y="80" text-anchor="middle" fill="#F7B825" font-size="16" font-weight="bold">나눔</text>
                </g>
                
                <!-- 소통 (대화 말풍선) -->
                <g transform="translate(300, 130)">
                    <ellipse cx="0" cy="0" rx="35" ry="28" fill="#4A9B8C"/>
                    <ellipse cx="-10" cy="5" rx="30" ry="23" fill="white"/>
                    <circle cx="-20" cy="0" r="4" fill="#4A9B8C"/>
                    <circle cx="-10" cy="0" r="4" fill="#4A9B8C"/>
                    <circle cx="0" cy="0" r="4" fill="#4A9B8C"/>
                    <text x="0" y="60" text-anchor="middle" fill="#4A9B8C" font-size="16" font-weight="bold">소통</text>
                </g>
                
                <!-- 향기 (꽃) -->
                <g transform="translate(450, 130)">
                    <circle cx="0" cy="0" r="8" fill="#FFD54F"/>
                    <ellipse cx="0" cy="-18" rx="10" ry="15" fill="#E67E5A" transform="rotate(0)"/>
                    <ellipse cx="15" cy="-9" rx="10" ry="15" fill="#E67E5A" transform="rotate(72)"/>
                    <ellipse cx="9" cy="14" rx="10" ry="15" fill="#E67E5A" transform="rotate(144)"/>
                    <ellipse cx="-9" cy="14" rx="10" ry="15" fill="#E67E5A" transform="rotate(216)"/>
                    <ellipse cx="-15" cy="-9" rx="10" ry="15" fill="#E67E5A" transform="rotate(288)"/>
                    <rect x="-3" y="10" width="6" height="30" fill="#8BC34A" rx="3"/>
                    <text x="0" y="65" text-anchor="middle" fill="#E67E5A" font-size="16" font-weight="bold">향기</text>
                </g>
                
                <!-- 연결선 -->
                <line x1="180" y1="150" x2="270" y2="150" stroke="#4A9B8C" stroke-width="2" stroke-dasharray="5,5" opacity="0.4"/>
                <line x1="330" y1="150" x2="420" y2="150" stroke="#E67E5A" stroke-width="2" stroke-dasharray="5,5" opacity="0.4"/>
            </svg>
        </div>

        <!-- 운영철학 -->
        <div class="section">
            <h2 class="section-title">운영철학</h2>
            <div class="philosophy-grid">
                <div class="philosophy-item">자비행원</div>
                <div class="philosophy-item">노인공경</div>
                <div class="philosophy-item">생명존중</div>
                <div class="philosophy-item">환경실천</div>
                <div class="philosophy-item">맞춤돌봄</div>
            </div>
        </div>

        <!-- 미션 -->
        <div class="section">
            <h2 class="section-title">미션</h2>
            <div class="mission-box">
                함께하는 안성맞춤 노인복지 실천
            </div>
        </div>

        <!-- 비전 -->
        <div class="section">
            <h2 class="section-title">비전</h2>
            
            <div class="vision-item">
                <div class="vision-title">나눔으로 함께하는 복지관</div>
                <ul class="vision-content">
                    <li>지역사회 다양한 복지 자원연계를 통한 나눔문화 확산</li>
                    <li>나눔 활동을 통한 지역사회 기부문화 형성과 참여 실천</li>
                </ul>
            </div>

            <div class="vision-item">
                <div class="vision-title">소통하는 우리들의 복지관</div>
                <ul class="vision-content">
                    <li>지역복지 네트워크 형성을 통한 함께 성장하는 복지공동체 구현</li>
                    <li>세대통합을 실현할 수 있는 문화복지 구현</li>
                    <li>안정적인 노인일자리 제공으로 세대 소통 기회 확대</li>
                </ul>
            </div>

            <div class="vision-item">
                <div class="vision-title">행복한 세상을 여는 복지관</div>
                <ul class="vision-content">
                    <li>대상자 안성맞춤 복지프로그램 제공 및 당사자 통합 사례관리</li>
                    <li>안성맞춤 돌봄 생태계 구현을 통한 지역사회 안전망 구축</li>
                    <li>이용자와 종사자의 인권과 권익증진으로 윤리경영 실천</li>
                    <li>어르신들의 활기찬 신체 및 정신적 건강생활 지원</li>
                    <li>종사자의 역량 강화로 노인복지 인재 양성</li>
                </ul>
            </div>
        </div>

        <!-- 운영방침 -->
        <div class="section">
            <h2 class="section-title">운영방침</h2>
            <div class="policy-list">
                <div class="policy-item">복지환경 변화에 따른 안성맞춤 복지서비스 구현</div>
                <div class="policy-item">지역 특성을 고려한 안성맞춤 노인복지 서비스 제공</div>
                <div class="policy-item">노인의 사회적 역할 증대를 위한 주체적 지역사회 활동 지원</div>
                <div class="policy-item">지역사회 내 어르신 존중 및 선배시민 역할 증대를 통한 노인 공동체 리더 양성 지원</div>
                <div class="policy-item">지역사회 복지생태계 구축으로 관계 중심의 자비행원 공동체 지원</div>
            </div>
        </div>

        <!-- 인재상 -->
        <div class="section">
            <h2 class="section-title">인재(참사람)상</h2>
            <div class="talent-grid">
                <div class="talent-card">
                    <div class="talent-title">나눔</div>
                    <div class="talent-desc">나눔 활동으로<br>함께하는 참사람</div>
                </div>
                <div class="talent-card">
                    <div class="talent-title">소통</div>
                    <div class="talent-desc">공경하는 마음으로<br>경청하는 참사람</div>
                </div>
                <div class="talent-card">
                    <div class="talent-title">희망</div>
                    <div class="talent-desc">복지관 중심으로<br>생명존중을 실천하는 참사람</div>
                </div>
                <div class="talent-card">
                    <div class="talent-title">행복</div>
                    <div class="talent-desc">지역사회 맞춤돌봄을<br>구현하는 참사람</div>
                </div>
            </div>
        </div>
    </div>
</div>