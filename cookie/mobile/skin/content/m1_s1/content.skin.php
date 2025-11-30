<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m1_s1" class="main-tab active">법인소개</a>
        <a href="/bbs/content.php?co_id=m1_s2" class="main-tab">인사말</a>
        <a href="/bbs/content.php?co_id=m1_s3" class="main-tab">미션 및 비전</a>
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="foundation-logo">
        <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/logo1.png" alt="로고 대한불교조계종사회복지재단" />
    </div>

    <div class="content-card">
        <div class="business-content m1_s1">
            <div class="intro-section">
                <p>노인자원봉사 활동은 노인의 여가를 유용하게 활용함으로써 사회문제를 해결하고 노인의 사회 참여를 통해서 사회 통합적인 노후 생활을 영위하게 하여 스스로 건강증진과 소외, 고독문제를 극복부처님의 자비를 행하는 대한불교조계종사회복지재단 우리 재단은 1,700여년의 유구한 역사를 자랑하는 대한불교조계종에서 전문적 사회복지사업 수행을 통해 더 많은 이들을 구휼하고, 소외된 이들에게 등불이 되고자 1995년 2월 25일에 설립되었습니다.</p>
                
                <p>본 재단은 부처님의 자비와 구제중생의 원력으로 불교계의 인적·물적 복지자원을 개발·활용함으로써 국민복지 지원과 진흥에 이바지하며 복지분야에 관한 제반조사·연구·교육·홍보를 통하여 문화복지사회를 건설하는 것을 목적으로 현재 약 180 여개의 다양한 사회복지시설 운영과 자비나눔 사업을 수행하고 있습니다.해 나가며 노인의 지역사회 봉사활동 기회를 넓히는 사업입니다.</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">이사장 인사말</h3>
                <div class="president-section">
                    <div class="president-photo">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/picture.png" alt="이사장 사진" />
                    </div>
                    <div class="president-content">
                        <div class="president-quote">
                            <p><strong>"무량한 자비심으로 소외된 약자들을 보듬어</strong></p>
                            <p><strong>우리사회의 어둠을 밝히는 불교사회복지 구현에 앞장서겠습니다."</strong></p>
                        </div>
                        <div class="president-message">
                            <p>대한불교조계종사회복지재단은 대한불교조계종에서 전문적 사회복지사업을 통해 더 많은 이들을 구휼하고, 소외된 이들에게 등불이 되고자 1995년 설립되어 건강한 사회에 기여하며 불교사회복지의 새로운 지평을 열고 있습니다.</p>
                            <p>우리 사회는 급격한 경제성장과 함께 첨단 문명의 편리를 이루었으나 반면에 빈부 격차 등 사회적 양극화로 갈등은 깊어지고 소외계층의 고통은 커지고 있습니다.</p>
                            <p>본 재단은 이러한 지역 간, 계층 간, 세대 간의 갈등이 깊어진 사회를 향하여 하심下心、하는 자세로 자비 나눔과 봉사를 통해 불교의 동체대비同體大悲 정신을 현대적으로 구현하며 따스한 나눔의 손길을 전하고 있습니다.</p>
                            <p>이제 불교복지시설과 사찰들의 복지·봉사활동은 국내뿐만 아니라 지구촌 방방곡곡 미치지 않는 곳이 없습니다. 여러 방면에서 부처님 가르침의 참뜻을 몸소 실천하고 있는 분들이 더욱 많아지고 있기에 사회의 그늘진 곳이 자비 광명으로 점점 밝혀지고 있습니다.</p>
                            <p>자비와 중생구제의 원력으로 행복한 사회를 만들기 위해 앞장서 온 본 재단은 앞으로도 사회 변화에 유연하게 대처하며, 소외된 이들에게 지혜의 등불이 되기 위해 더욱더 매진하겠습니다.</p>
                            <p>세상의 빠른 변화에 소외되고 있는 우리의 이웃의 어려움을 낮은 자세로 살펴 보고, 열린 마음으로 소통하며, 책임있고 신뢰받는 행동으로 여러분의 곁에 함께 하겠습니다. 사회복지현장에서 함께 정진하고 계신 소중한 분들에게 든든한 의지처가 되겠습니다.</p>
                            <p>사회와 이웃을 위한 자비행의 길은 향기로운 세상을 향한 길입니다. 불교사회복지가 활짝 꽃피워 이 땅 위의 모든 분들에게 법향이 전해지기를 진심으로 기대 합니다.</p>
                            <p>불교사회복지재단의 도약에 적극적인 동참과 참여를 당부드립니다. 감사합니다.</p>
                            
                            <p><strong>대한불교조계종사회복지재단 이사장 진 우</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">설립목적</h3>
                <div class="mission-grid">
                    <div class="mission-item">
                        <div class="mission-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/m1_s1_img1.png" alt="" />
                        </div>
                        <h4>부처님의 자비와 구제중생의원력으로<br>불교계 인적/물적 복지자원 개발/활용</h4>
                    </div>
                    <div class="mission-item">
                        <div class="mission-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/m1_s1_img2.png" alt="" />
                        </div>
                        <h4>국민복지 지원/진흥에 이바지</h4>
                    </div>
                    <div class="mission-item">
                        <div class="mission-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/m1_s1_img3.png" alt="" />
                        </div>
                        <h4>복지분야의 제반조사/연구/홍보</h4>
                    </div>
                    <div class="mission-item">
                        <div class="mission-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/m1_s1_img4.png" alt="" />
                        </div>
                        <h4>불국정도 구현을 지향한<br>문화복지 사회건설</h4>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">설립이념</h3>
                <div class="business-grid">
                    <div class="business-item">
                        <div class="business-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/icon1.svg" alt="" />
                        </div>
                        <h4>사회복지구현</h4>
                        <ul>
                            <li>불교에서 궁극적인 자기완성은 타자와의 행복실현을 통해 완성</li>
                            <li>불교사회복지 활동은 전인류가 행복할 수 있는 불국정토 건설 목표</li>
                        </ul>
                    </div>
                    <div class="business-item">
                        <div class="business-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/icon2.svg" alt="" />
                        </div>
                        <h4>사회적평등</h4>
                        <ul>
                            <li>불성을 가진 모든 인간은 평등한 존재</li>
                            <li>불교사회복지 활동은 불성의 평등을 통해 개인과 개인, 개인과 공동체간 상호존중요청</li>
                        </ul>
                    </div>
                    <div class="business-item">
                        <div class="business-icon">
                            <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/icon3.svg" alt="" />
                        </div>
                        <h4>행복추구</h4>
                        <ul>
                            <li>불교는 개인의 참다운 깨달음 지향</li>
                            <li>자비와 인간존중을 기초로 사회구성원 전체의 행복추구</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>