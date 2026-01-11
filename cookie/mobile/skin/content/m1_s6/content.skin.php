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
        <a href="/bbs/content.php?co_id=m1_s3" class="main-tab">미션 및 비전</a>
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab active">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-info">
                <h2 class="title-with-icon">이용안내</h2>
                <p class="foundation-subtitle">안성시노인복지관 이용 방법 및 안내</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="usage-content">
            <!-- 이용대상 -->
            <div class="info-section">
                <h3 class="section-title-with-icon">이용대상</h3>
                <div class="info-box">
                    <p class="target-info">
                        <span class="highlight">만 60세 이상</span>의 이용 희망 어르신 및 이용자의 
                        <span class="highlight">만 60세 미만의 배우자</span>
                        <span class="sub-text">(이용자와 동시 이용 시)</span>
                    </p>
                </div>
            </div>

            <!-- 이용시간 -->
            <div class="info-section">
                <h3 class="section-title-with-icon">이용시간</h3>
                <div class="time-info-grid">
                    <div class="time-item">
                        <div class="time-label">평일 운영</div>
                        <div class="time-value">
                            <span class="days">월요일 ~ 금요일</span>
                            <span class="hours">09:00 ~ 18:00</span>
                        </div>
                    </div>
                    <div class="time-item closed">
                        <div class="time-label">휴관일</div>
                        <div class="time-value">
                            <span class="days">토요일, 일요일</span>
                            <span class="hours">국경일, 기타 법정 휴일</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 이용방법 -->
            <div class="info-section">
                <h3 class="section-title-with-icon">이용방법</h3>
                <div class="method-box">
                    <div class="required-items">
                        <h4>준비물</h4>
                        <div class="items-grid">
                            <div class="item">
                                <div class="item-icon">📄</div>
                                <span>신분증</span>
                            </div>
                            <div class="item">
                                <div class="item-icon">📷</div>
                                <span>사진 2매</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 준수사항 -->
            <div class="info-section">
                <h3 class="section-title-with-icon">준수사항</h3>
                <div class="rules-container">
                    <div class="rules-list">
                        <div class="rule-item">
                            <div class="rule-number">01</div>
                            <div class="rule-content">
                                복지관 이용증은 항상 지참해야 합니다.
                            </div>
                        </div>
                        <div class="rule-item">
                            <div class="rule-number">02</div>
                            <div class="rule-content">
                                본인의 부주의 또는 건강상 사유로 발생되는 모든 안전사고에 대해 본 복지관에 민‧형사상 문제를 제기하지 않습니다.
                            </div>
                        </div>
                        <div class="rule-item">
                            <div class="rule-number">03</div>
                            <div class="rule-content">
                                복지관 시설물은 항상 깨끗하게 사용합니다.
                            </div>
                        </div>
                        <div class="rule-item">
                            <div class="rule-number">04</div>
                            <div class="rule-content">
                                이용증 분실 시 재교부를 받아야 합니다.
                            </div>
                        </div>
                        <div class="rule-item">
                            <div class="rule-number">05</div>
                            <div class="rule-content">
                                본 복지관 이용수칙 위반 시 이용자격 상실 및 퇴관을 명할 수 있습니다.
                            </div>
                        </div>
                    </div>
                    <div class="warning-notice">
                        <div class="warning-icon">⚠️</div>
                        <p>위 사항을 위반할 경우 복지관 이용에 제약을 받을 수 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>