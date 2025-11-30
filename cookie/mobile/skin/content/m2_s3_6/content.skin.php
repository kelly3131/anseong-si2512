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
        <a href="/bbs/content.php?co_id=m2_s3_1" class="main-tab active">기획홍보팀</a>
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s3_1" class="sub-tab">홍보사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_2" class="sub-tab">일반자원봉사사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_3" class="sub-tab">노인권익증진사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_4" class="sub-tab">지역복지연계사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_5" class="sub-tab">지역사회자원개발사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_6" class="sub-tab active">복리후생사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">복리후생사업</h2>
        </div>
        <p>경제·정신 지원과 문화·소통 서비스를 통해 어르신의 안정되고 만족스러운 노후를 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>경제·정신 지원과 문화·소통 서비스를 통해 어르신의 안정되고 만족스러운 노후를 지원.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <h4>1. 이미용 서비스</h4>
                    <p><strong>서비스 내용 :</strong> 대상 어르신에게 이발, 염색, 파마 서비스 무료 제공</p>
                    <ul>
                        <li><strong>이용 대상 :</strong> 기초생활수급자, 차상위 계층, 국가유공자 본인, 만 90세 이상 고령 어르신</li>
                        <li><strong>이용 시간 :</strong> 월 ~ 금 / 09:30~15:00 (14:00까지 예약하신 어르신에 한해 이용 가능)</li>
                        <li><strong>이용 방법 :</strong> 1층 사무실에 전화(☎ 031-674-0794) 혹은 방문 예약 후 예약 시간에 이용</li>
                    </ul>
                    
                    <h4>2. 나소향 노래연습실</h4>
                    <p><strong>서비스 내용 :</strong> 사전 예약 후 노래연습실 이용(주 3회 이용 가능)</p>
                    <ul>
                        <li><strong>이용 대상 :</strong> 복지관 회원 누구나</li>
                        <li><strong>이용 시간 :</strong> 월 ~ 금 / 09:30~16:00</li>
                        <li><strong>장소 :</strong> 복지관 2층 노래연습실</li>
                        <li><strong>이용 방법 :</strong> 1층 사무실에 전화(☎ 031-674-0794) 혹은 방문 예약 후 예약 시간에 이용</li>
                    </ul>
                    
                    <h4>3. 나소향 카페</h4>
                    <p><strong>서비스 내용 :</strong> 커피와 차 등 음료 판매</p>
                    <ul>
                        <li><strong>이용 대상 :</strong> 복지관 이용자 누구나</li>
                        <li><strong>이용 시간 :</strong> 월 ~ 금 / 08:30~17:30</li>
                        <li><strong>장소 :</strong> 복지관 1층 나소향 카페</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_6_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_6_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s3_6_img3.png" alt="">
            </div>
        </div>
    </div>
</div>