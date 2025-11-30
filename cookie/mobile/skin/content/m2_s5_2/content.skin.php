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
            <a href="/bbs/content.php?co_id=m2_s5_2" class="sub-tab active">노인맞춤돌봄 특화서비스</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s5_3" class="sub-tab">응급안전안심서비스</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">노인맞춤돌봄 특화서비스</h2>
        </div>
        <p>사회적 고립·우울 위험 취약노인에 대한 맞춤형 사례관리로 고독사·자살을 예방합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon">사업목적</h3>
                <p>사회적 고립·우울 위험 취약노인에 대한 맞춤형 사례관리로 고독사·자살 예방</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업개요</h3>
                <ul>
                    <li><strong>서비스 지역 :</strong> 안성시</li>
                    <li><strong>서비스 대상 :</strong><br>
                        • 가족, 이웃 등과의 접촉이 거의 없어 고독사 및 자살위험이 높은 만 65세 이상 노인<br>
                        • 고독사 및 자살위험이 크다고 판단되는 경우만 60세 이상 하향 조정 가능<br>
                        (단, 중앙노인돌봄지원기관(독거노인종합지원센터) 승인 필요)
                    </li>
                    <li><strong>서비스 기간 :</strong> 서비스 개시일로부터 1년<br>
                        (1년 도래전 '재사정'을 통해 서비스 제공여부를 다시 결정)
                    </li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">사업내용</h3>
                <div class="business-detail">
                    <table class="service-table">
                        <colgroup>
                            <col width="20%">
                            <col width="40%">
                            <col width="40%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>은둔형</th>
                                <th>우울형</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>서비스<br>제공 주기</th>
                                <td>최소 2주 1회 대면(비대면) 서비스</td>
                                <td>최소 2주 1회 대면(비대면) 서비스</td>
                            </tr>
                            <tr>
                                <th>필수<br>제공내용</th>
                                <td>
                                    <strong>1. 우울증 진단 및 투약 관리 지원</strong><br>
                                    <strong>2. 개별상담</strong><br>
                                    <strong>3. 집단활동</strong><br>
                                    &nbsp;&nbsp;- 집단 프로그램<br>
                                    &nbsp;&nbsp;- 집단치료·상담<br>
                                    &nbsp;&nbsp;- 자조모임, 주휴자조모임<br>
                                    &nbsp;&nbsp;- 외부활동<br>
                                    <strong>4. 중도탈락자 사후관리</strong><br>
                                    <strong>5. 지역사회 자원연계 서비스</strong>
                                </td>
                                <td>
                                    1. 개별상담<br>
                                    2. 외부활동(가능한 경우)<br>
                                    3. 자조모임(가능한 경우)<br>
                                    4. 중도탈락자 사후관리<br>
                                    5 지역사회 자원연계 서비스
                                </td>
                            </tr>
                            <tr>
                                <th>서비스<br>제공방법</th>
                                <td>1:1 사례관리</td>
                                <td>1:1 사례관리, 집단활동</td>
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
                            <strong>서비스 신청 및 의뢰</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>초기상담 및 적도검사</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 이용자 선정</strong>
                        </div>
                        <div class="procedure-break"></div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 제공 계획 수립</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 제공 안내</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 제공</strong>
                        </div>
                        <div class="procedure-break"></div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step">
                            <strong>서비스 재사정</strong>
                        </div>
                        <div class="procedure-arrow">→</div>
                        <div class="procedure-step procedure-final">
                            <strong>서비스 종결 및 사후관리</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_2_img1.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_2_img2.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_2_img3.png" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s5_2_img4.png" alt="">
            </div>
        </div>
    </div>
</div>