<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m3_s1" class="main-tab active">후원안내</a>
        <a href="/bbs/write.php?bo_table=sponsor" class="main-tab">후원신청</a>
        <a href="/bbs/board.php?bo_table=spon_news" class="main-tab">후원소식</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">후원안내</h2>
        </div>
        <p>어르신들의 행복한 노후생활을 위해 여러분의 따뜻한 후원이 필요합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">기금후원(정기, 일시)</h3>
                <div class="business-detail">
                    <ul>
                        <li><strong>CMS후원 :</strong> 매월 일정금액을 통장에서 출금</li>
                        <li><strong>자동이체 후원</strong></li>
                        <li><strong>무통장 입금</strong></li>
                        <li><strong>지로후원</strong></li>
                        <li><strong>홈페이지를 통한 소액결재</strong></li>
                        <li><strong>휴대폰 요금 소액결재</strong></li>
                    </ul>
                    <div class="account-info">
                        <p><strong>후원계좌 :</strong> 농협 301-0298-5901-31</p>
                        <p><strong>예금주 :</strong> 안성시노인복지관</p>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">물품후원(정기, 일시)</h3>
                <p>어르신과 복지관에 필요한 물품을 후원 할 수 있습니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">지정후원</h3>
                <p>대상이나 사용처를 지정하여 후원할 수 있습니다.</p>
                <div class="account-info">
                    <p><strong>후원계좌 :</strong> 농협 301-0298-5888-01</p>
                    <p><strong>예금주 :</strong> 안성시노인복지관</p>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">모금통</h3>
                <p>회사나 상점 등에 안성시노인복지관의 모금통을 비치하여 자유로운 모금을 통해 후원 할 수 있습니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">후원혜택</h3>
                <ul>
                    <li>법인세법 제 24조와 소득세법 제 34조에 의한 연말정산시 소득공제 혜택</li>
                    <li>복지관 소식지 발송</li>
                    <li>복지관 관련 행사 초청 등</li>
                </ul>
                <div class="contact-info">
                    <p><strong>문의 :</strong> 031) 674-0794</p>
                    <p><strong>담당자 :</strong> 이건우 사회복지사</p>
                </div>
            </div>
        </div>
        
        <div class="sponsor-button-wrapper">
            <a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=sponsor" class="sponsor-apply-btn">
                후원신청하기
            </a>
        </div>
    </div>
</div>