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
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab active">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-logo">
                <!-- 로고 이미지 영역 -->
            </div>
            <div class="foundation-info">
                <h2 class="title-with-icon">오시는길</h2>
                <p class="foundation-subtitle">안성시노인복지관 찾아오시는 길</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <!-- <p style="padding:15px; text-align:right;">※ 지도가 안보일경우 <a href="http://get.adobe.com/flashplayer/" target="_blank"><b style="color:blue; font-size:1.5em;">여기</b></a>를 클릭하세요.</p> -->
                
                <div id="map_wrap">
                    <div id="mapWrapper">
                        <div id="map" style="width:100%; height:400px;">
                            <!-- 1. 지도 노드 -->
                            <div id="daumRoughmapContainer1763565310914" class="root_daum_roughmap root_daum_roughmap_landing"></div>   
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">오시는 길</h3>
                
                <div class="transport-section">
                    <h4 class="transport-title">🚗 자가용 이용</h4>
                    <ul class="directions-list">
                        <li><strong>경부고속도로:</strong> 안성 IC → 안성·공도방면 우회전 약 15㎞ → 안성시노인복지관</li>
                        <li><strong>중부고속도로:</strong> 일죽 IC → 안성방면 우회전 → 38국도 → 봉산로타리 끼고 좌회전 → 안성시노인복지관</li>
                    </ul>
                </div>

                <div class="transport-section">
                    <h4 class="transport-title">🚌 대중교통 이용</h4>
                    <div class="public-transport">
                        <div class="transport-route">
                            <strong>수도권 방면</strong> (서울, 수원, 성남, 안양, 인천시외버스 등)
                            <br>→ 신안성터미널 → 시내버스 → 봉남동 모두투어 또는 시민회관 하차 → 도보 5분 이내 → 안성시노인복지관
                        </div>
                        <div class="transport-route">
                            <strong>대전, 부산 방면</strong>
                            <br>→ 평택, 천안 → 신안성터미널 → 시내버스 → 봉남동 모두투어 또는 시민회관 → 도보 5분 이내 → 안성시노인복지관
                        </div>
                    </div>
                </div>

                <div class="transport-section">
                    <h4 class="transport-title">🚍 시내버스 노선</h4>
                    <div class="bus-routes">
                        <div class="bus-stop">
                            <strong>시민회관 정류장 (33180)</strong>
                            <div class="bus-numbers">1-1, 1-4, 2-3, 5, 5-2, 10-2, 10-7, 10-8, 20, 20-2, 60-1, 100-1, 100-3, 201</div>
                        </div>
                        <div class="bus-stop">
                            <strong>시민회관 정류장 (33182)</strong>
                            <div class="bus-numbers">5, 5-2, 10-2, 10-7, 15-3, 20, 20-2, 100, 100-1, 100-2, 100-3, 201</div>
                        </div>
                        <div class="bus-stop">
                            <strong>봉남동 모두투어 정류장 (33183)</strong>
                            <div class="bus-numbers">1, 1-1, 1-2, 1-3, 1-4, 1-5, 1-6, 2, 2-1, 2-2, 2-3, 2-5, 2-6, 2-8, 2-11, 7, 7-1, 7-2, 7-3, 7-4, 10-8, 15, 15-1, 15-2, 15-4, 22-1, 35, 37, 37-1, 38-1, 50, 50-1, 50-2, 50-3, 50-7, 50-9, 60, 60-1, 60-3, 70, 370, 380</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">연락처 정보</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <span class="contact-label">주소:</span>
                        <span class="contact-value">경기도 안성시 장기로 109 (낙원동 68-24)</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">전화:</span>
                        <span class="contact-value"><a href="tel:031-674-0794">031-674-0794~6</a></span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">팩스:</span>
                        <span class="contact-value">031-674-0797</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- * 카카오맵 - 지도퍼가기 -->


<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1763565310914",
		"key" : "cue2346kyjj",
		"mapWidth" : "100%",
		"mapHeight" : "360"
	}).render();
</script>
