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
        <a href="/bbs/content.php?co_id=m1_s9" class="main-tab active">CI소개</a>
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">

    <div>
        <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/ci_logo.png" alt="">
    </div>

   <div class="info-section">
        <p>경제적·신체적·심리적 제약이 있는 저소득 어르신을 대상으로 다양한 지원 및 프로그램 운영으로 실질적인 생활 지원 서비스를 제공합니다. 일상의 불편함을 해소하고 정서적 유대감을 강화함으로써, 어르신이 소외되지 않고 건강한 노후를 누릴 수 있도록 돕는 통합 돌봄 서비스입니다.</p>
    </div>
</div>
