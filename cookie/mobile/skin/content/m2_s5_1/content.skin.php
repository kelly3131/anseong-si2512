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
            <a href="/bbs/content.php?co_id=m2_s5_1" class="sub-tab active">노인맞춤돌봄서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_2" class="sub-tab">노인맞춤돌봄 특화서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_3" class="sub-tab">응급안전안심서비스</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">노인맞춤돌봄서비스</h2>
        </div>
        <p>일상생활 영위가 어려운 취약노인에게 적절한 돌봄서비스를 제공합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>일상생활 영위가 어려운 취약노인에게 적절한 돌봄서비스를 제공</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시 서부지역 (총 7곳 : 공도읍, 대덕면, 미양면, 안성2,3동, 양성면, 원곡면)</li>
                    <li><strong>서비스 대상 :</strong><br>
                        65세 이상 ①국민기초생활수급자, ②차상위계층, ③기초연금수급자로서 유사중복사업 자격에 해당되지 않는 자<br>
                        (다만, 시장･군수･구청장이 서비스가 필요하다고 인정하는 경우 예외적으로 제공 가능)
                    </li>
                    <li><strong>서비스 기간 :</strong> 시·군·구의 서비스 이용 자격 승인 익일로부터 1년<br>
                        (1년 도래전 '재사정'을 통해 서비스 제공여부를 다시 결정)
                    </li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <table class="service-table">
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>서비스</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="5">노인맞춤돌봄<br>서비스</td>
                                <td>
                                    <strong>안전지원서비스</strong><br>
                                    이용자의 가장 기본적인 삶의 전반적인 안전여부를 방문, 전화를 통해 확인하는 서비스(안전안부확인, 생활안전점검, 정보제공, 말벗)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>사회참여서비스</strong><br>
                                    관계망과 역할의 축소로 인한 사회적 분리감을 집단 프로그램을 통해 사회적 관계성 및 참여의 기회를 지원(사회관계향상 프로그램)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>생활교육서비스</strong><br>
                                    생활교육영역의 다양한 프로그램으로 신체적, 정신적 기능 유지 및 강화(신체건강보아, 정신건강보아)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>일상생활지원서비스</strong><br>
                                    이동 동행, 식사준비, 청소 등의 일상생활지원 필요 정도를 점검하여 서비스제공(이동활동지원, 가사지원)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>연계서비스</strong><br>
                                    민간의 다양한 자원을 후원이나 자원봉사 등을 통해 이용자에게 서비스를 연계하여 제공(생활지원연계, 주거개선연계, 건강지원연계, 기타서비스)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon">사업절차</h3>
                <div class="business-detail">
                    <div class="procedure-container">
                        <div class="procedure-step">
                            <strong>서비스 신청접수</strong><br>
                            <span class="step-organization">《읍면동》</span>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>대상자 선정조사 및 서비스상담</strong><br>
                            <span class="step-organization">《수행기관》</span>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스제공계획 수립 및 승인요청</strong><br>
                            <span class="step-organization">《수행기관》</span>
                        </div>
                        <div class="procedure-break"></div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>심의 및 결정</strong><br>
                            <span class="step-organization">《시군구》</span>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스제공</strong><br>
                            <span class="step-organization">《수행기관》</span>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>재사정</strong><br>
                            <span class="step-organization">《수행기관》</span>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>종결 및 사후관리</strong><br>
                            <span class="step-organization">《수행기관》</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_1_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_1_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_1_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_1_img4.png" alt="">
            </div>
        </div>
    </div>
</div>