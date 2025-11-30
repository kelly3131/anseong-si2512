<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1" class="main-tab">운영지원팀</a>
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_1" class="main-tab">문화건강팀</a>
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_1" class="main-tab">기획홍보팀</a>
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_1" class="main-tab">사례관리팀</a>
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1" class="main-tab active">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1" class="sub-tab active">노인자원봉사사업</a>
            <span class="chevron">|</span>
            <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_2" class="sub-tab">노인 일자리 및 사회활동 지원사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">노인자원봉사사업</h2>
        </div>
        <p>노인의 경륜을 사회에 재투자하여 적극적인 사회참여를 도모합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>노인의 경륜을 사회에 재투자할 수 있도록 노인자원봉사를 활성화하여 노인의 적극적 사회참여를 도모하여 행복한 노년의 삶을 영위할 수 있도록 함</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>사업명 :</strong> 노인자원봉사사업 「노인자원봉사단」</li>
                    <li><strong>사업대상 :</strong> 안성시에 거주, 사회참여를 희망하는 60세 이상 어르신</li>
                    <li><strong>사업기간 :</strong> 2025년 1월 ~ 12월 <span style="font-weight: bold; text-decoration: underline;">※봉사단별 활동기간 상이</span></li>
                </ul>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <table class="service-table">
                        <thead>
                            <tr>
                                <th>봉사유형</th>
                                <th>봉사단명</th>
                                <th>활동내용</th>
                                <th>활동장소</th>
                                <th>봉사시기</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">시설봉사</td>
                                <td>백합</td>
                                <td>복지관 경로식당 업무보조 봉사<br>(접지리, 배식 등)</td>
                                <td>경로식당</td>
                                <td>연중</td>
                            </tr>
                            <tr>
                                <td>작은자리</td>
                                <td>복지관 경로식당 식사 줄 관리 봉사</td>
                                <td>1층 로비</td>
                                <td>연중</td>
                            </tr>
                            <tr>
                                <td rowspan="3">재능봉사</td>
                                <td>뜨담</td>
                                <td>뜨개질 재능 물품 제작 및 나눔</td>
                                <td>관내<br>프로그램실</td>
                                <td>3월~11월</td>
                            </tr>
                            <tr>
                                <td>은빛소리</td>
                                <td>노인주간보호센터, 요양원 등 복지시설 방문을 통한 재능공연 봉사<br>(레크리에이션, 하모니카, 민요, 무용 등)</td>
                                <td>지역복지시설<br>(노인주간보호센터, 요양원 등)</td>
                                <td>3월~11월</td>
                            </tr>
                            <tr>
                                <td>슬기로운<br>원예환경</td>
                                <td>지역사회 환경보호 봉사, 텃밭 가꾸기 원예봉사를 통한 물품 제작 및 전달</td>
                                <td>지역사회 일대<br>관내 프로그램실</td>
                                <td>3월~11월</td>
                            </tr>
                            <tr>
                                <td rowspan="2">전문봉사</td>
                                <td>기억지킴이<br>안성맘충</td>
                                <td>치매안심마을 참여자 대상<br>치매예방교육, 봉사활동 진행</td>
                                <td>치매안심센터 지정<br>치매안심구역</td>
                                <td>2월~11월</td>
                            </tr>
                            <tr>
                                <td>풍선아트</td>
                                <td>지역사회 일대 풍선아트 재능봉사</td>
                                <td>지역사회 일대</td>
                                <td>3월~11월</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_1_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_1_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_1_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_1_img4.png" alt="">
            </div>
        </div>
    </div>
</div>