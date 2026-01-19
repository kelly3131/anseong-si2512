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
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab active">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-info">
                <h2 class="title-with-icon">시설안내</h2>
                <!-- <p class="foundation-subtitle">안성시노인복지관 층별 시설 안내</p> -->
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon2">시설현황</h3>
                <ul>
                    <li>- 대지 면적 : 2.513㎡</li>
                    <li>- 연  면  적 : 2,643,74㎡</li>
                    <li>- 건축 면적 : 816.34㎡</li>
                    <li>- 층별 현황</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">층별 현황</h3>
                <div class="floor-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col" width="15%">층 별</th>
                                <th scope="col">면 적</th>
                                <th scope="col">용 도</th>
                                <th scope="col">비 고</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>지하 1층</td>
                                <td>&nbsp;</td>
                                <td>기계공조실, 전기실</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>1층</td>
                                <td>746.91㎡</td>
                                <td>사무실①, 사무실②, 나소향카페, 본관 경로식당</td>
                                <td>외부 주차장 면적제외</td>
                            </tr>
                            <tr>
                                <td>2층</td>
                                <td>595.57㎡</td>
                                <td>관장실, 회의실, 세미나실, 서고ㆍ물품보관실, 다목적실, 이ㆍ미용실,<br> 휴게실, 즐김터①, 즐김터②, 나소향노래연습실,<br>즐김터③, 물리치료실</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>3층</td>
                                <td>595.57㎡</td>
                                <td>배움터①, 배움터②, 배움터③, 체력단련실, 정보화배움터,<br>바둑실, 당구실</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>4층</td>
                                <td>395.11㎡</td>
                                <td>대강당, 탁구장</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/map1.jpg" alt="로비1층">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/map2.jpg" alt="로비2층">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/map3.jpg" alt="로비3층">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m1/map4.jpg" alt="로비4층">
            </div>
        </div>
    </div>
</div>