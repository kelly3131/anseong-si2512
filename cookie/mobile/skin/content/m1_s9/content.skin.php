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
        <p>안성시노인복지관은 대한불교조계종사회복지재단에서 수탁 운영하는 복지관으로 대한불교 조계종의 문장(紋章)인 삼보륜(三寶輪)을 기관명에 삽입하여 불교의 지혜와 자비가 어우러진 불교 노인복지 전문 기관임을 표현했다. 또한, 안성시 위탁 복지관으로 안성시를 상징하는 푸른색과 주황색의 조합으로 세대통합과 안성맞춤 돌봄과 지역사회 자원 순환을 통한 지속 가능한 함께하는 노인복지 비전을 기관 CI로 디자인하였다.</p>
        <p>주황색은 따뜻함과 정성을, 푸른색은 활력과 희망을 나타낸다. 두 색이 조화를 이루어 따뜻하고 정성 가득한 마음으로 어르신을 모시고 활력과 희망이 넘치는 종사자들은 나눔으로 함께하며 소통하는 우리가 되어 향기로운 세상을 빚어가는 이미지를 강조하였다. </p>
        <p>동그라미 안의 화살표는 어르신들의 서비스 욕구에 안성맞춤 복지서비스로 나아가며 복지환경 변화에 유연하게 적응하는 복지관의 내일을 상징한다. 이는 단순히 전통을 이어가는 것에 그치지 않고, 현재를 기반으로 미래복지를 준비하는 기관의 비전과도 연결된다. </p>      
    </div>
</div>
