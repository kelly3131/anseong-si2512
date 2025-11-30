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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab active">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s5_1" class="sub-tab">노인맞춤돌봄서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_2" class="sub-tab">노인맞춤돌봄 특화서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_3" class="sub-tab active">응급안전안심서비스</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">응급안전안심서비스</h2>
        </div>
        <p>IoT 장비를 활용한 실시간 안전관리로 취약계층의 응급상황에 신속하게 대응합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>게이트웨이·화재감지기·응급호출기 설치로 취약가구의 응급상황을 119와 관리요원에게 자동 연계하는 신속 대응체계 구축</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 관내</li>
                    <li><strong>서비스 대상 :</strong> 독거노인 · 장애인</li>
                    <li><strong>서비스 기간 :</strong> 설치 후 종결 시까지</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <p>취약가정에 IoT장비를 설치해 응급·화재·활동량 정보를 실시간 전송하고, 응급 시 소방서에 자동 신고하는 안전관리체계 구축</p>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="business-detail">
                    <div class="procedure-container">
                        <div class="procedure-step">
                            <strong>서비스 신청 및 접수</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>대상자 선정조사 및 상담</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>심의 및 승인</strong>
                        </div>
                        <div class="procedure-break"></div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>선정결과 안내</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>댁내장비 설치</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 제공</strong>
                        </div>
                        <div class="procedure-break"></div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step procedure-final">
                            <strong>서비스 종결 및 철거</strong>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_3_img4.png" alt="">
            </div>
        </div>
    </div>
</div>