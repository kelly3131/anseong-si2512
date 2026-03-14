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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_1" class="main-tab active">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <!-- <a href="/bbs/content.php?co_id=m2_s6_1" class="sub-tab">노인자원봉사사업</a>
            <span class="chevron">|</span> -->
            <a href="/bbs/content.php?co_id=m2_s6_2" class="sub-tab active">노인 일자리 및 사회활동 지원사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s3_6" class="sub-tab">복리후생사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">노인 일자리 및 사회활동 지원사업</h2>
        </div>
        <p>어르신이 활기차고 건강한 노후생활을 영위할 수 있도록 다양한 일자리와 사회활동을 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업목적</h3>
                <p>어르신이 활기차고 건강한 노후생활을 영위할 수 있도록 다양한 일자리･사회활동을 지원하여 노인복지 향상에 기여</p>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업개요</h3>
                <ul>
                    <li><strong>사업 지역 :</strong> 안성시 지역사회</li>
                    <li><strong>사업 대상 및 기간 :</strong></li>
                </ul>
                <table class="service-table">
                    
                    <thead>
                        <tr>
                            <th>사업유형</th>
                            <th>사업대상</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center;">노인공익활동사업</td>
                            <td>만 65세 이상 기초연금수급자<br/>
직역연금수급자(배우자 포함, 일정소득 기준 이하일 경우)</td>
                        </tr>
                        <tr>
                            <td style="text-align:center;">노인역량활용사업</td>
                            <td>만 65세 이상 ※일부사업 만 60세 이상 가능</td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li>참여 기간 : 2026년 1월~12월 ※사업마다 진행 시기 상이<br>
                    (노인공익활동사업 11개월, 노인역량활용사업 10개월)</li>
                </ul>

                <p>※ 신청 제외자 :</p>
                <ul>
                    <li>국민기초생활보장법에 의한 생계급여 수급자(의료급여, 교육급여, 주거급여 수급자는 신청 가능)</li>
                    <li>국민건강보험 직장가입자</li>
                    <li>장기요양보험 등급 판정자(1~5등급, 인지지원등급)</li>
                    <li>정부부처 및 지자체에서 추진하는 일자리사업에 2개 이상 참여하고 있는 자(노인 일자리 및 사회활동 지원사업 내 중복참여 불가)</li>
                    <li>국내 거주자 중 외국민인 자</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon2">사업내용</h3>
                <ul>
                    <li>노인공익활동사업 : 월 30시간 29만원 지급</li>
                    <li>노인역량활용사업 : 월 60시간 761,040원 지급 ※세전/주휴수당 포함</li>
                </ul>
                <table class="service-table">
                    
                    <thead>
                        <tr>
                            <th colspan="2">사업명</th>
                            <th>활동내용</th>
                            <th>인원</th>
                            <th>기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="4">노인공익활동사업</th>
                            <td>노노케어</td>
                            <td>- 수요자(독거노인, 조손가정 등) 안전 및 안부확인<br>
                        - 말벗활동, 생활상태 점검 및 복지, 의료서비스 정보 제공
                            </td>
                            <td>250명</td>
                            <td>1-11월</td>
                        </tr>
                        <tr>
                            <td>공공시설봉사</td>
                            <td>- 공공시설에서 시설 내 다양한 업무보조 지원(환경정화 등)</td>
                            <td>50명</td>
                            <td>2-12월</td>
                        </tr>
                        <tr>
                            <td>학교도우미</td>
                            <td>- 학교에서 요청하는 다양한 업무보조(환경정화, 급식실 등)</td>
                            <td>80명</td>
                            <td>2-12월</td>
                        </tr>
                        <tr>
                            <td>아동교통안전지원</td>
                            <td>- 교내 등‧하교 교통 안전지원 및 학교에서 요청하는 업무 지원</td>
                            <td>50명</td>
                            <td>2-12월</td>
                        </tr>
                        <tr>
                            <th rowspan="4">노인역량<br/>활용사업</th>
                            <td>안성맞춤회계코디</td>
                            <td>-안성시 내 15개 읍, 면, 동 주민센터에 배치되어 경로당회계 프로그램 운영 관리 및 지원</td>
                            <td>29명</td>
                            <td>1-11월</td>
                        </tr>
                        <tr>
                            <td>안성맞춤모니터링단</td>
                            <td>-공익형 및 사회서비스형 사업의 원활한 사업 진행을 위한주기적인모니터링 실시</td>
                            <td>25명</td>
                            <td>2-11월</td>
                        </tr>
                        <tr>
                            <td>안성맞춤상담서포터즈</td>
                            <td>-사전연명의료의향서 상담, 등록, 찾아가는 상담소</td>
                            <td>20명</td>
                            <td>2-11월</td>
                        </tr>
                        <tr>
                            <td>안성맞춤 복지시설관리</td>
                            <td>- 복지시설(복지관)에서 시설 내 다양한 업무보조 지원</td>
                            <td>38명</td>
                            <td>2-11월</td>
                        </tr>
                        <tr>
                            <th>공동체사업</th>
                            <td>나소향 카페</td>
                            <td>- 커피 및 음료 제조 판매, 소모품 관리 등 매장관리</td>
                            <td>10명</td>
                            <td>2-12월</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="info-section procedure">
                <h3 class="section-title-with-icon2">사업절차</h3>
                <div class="business-detail">
                    <div class="procedure-container column">
                        <div class="procedure-step">
                            <strong>모집확인</strong><br>
                            <span class="step-organization">홈페이지, 언론, 현수막 등을 통해 모집공고 확인</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>구비서류 준비</strong><br>
                            <span class="step-organization">신분증, 주민등록등본(3개월 이내 발급), 기초연금수급확인서(해당자만), 직역연금 관련 서류(해당자만)</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>신청서 제출</strong><br>
                            <span class="step-organization">구비서류 지참하여 수행기관 방문</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>상담/면접</strong><br>
                            <span class="step-organization">신청자 희망활동, 사업 적합성, 활동역량 등 확인</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>참여자 선발/확정</strong><br>
                            <span class="step-organization">신청자의 사업참여 적격성 확인 후 선발점수 부여 선발기준표 점수에 따라 고득점 순으로 선발</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>수요처 연계</strong><br>
                            <span class="step-organization">희망 활동지역, 세부 분야 등을 고려하여 수요처 결정/연계</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>협약서/근로계약서 작성</strong><br>
                            <span class="step-organization">활동내용 및 조건 등을 기재한 협약서 또는 근로계약서 작성</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>참여자 교육</strong><br>
                            <span class="step-organization">참여자 대상 필수교육 진행</span>
                        </div>
                        <div class="procedure-arrow">↓</div>
                        <div class="procedure-step">
                            <strong>참여자 활동</strong><br>
                            <span class="step-organization">노인 일자리 및 사회활동 지원사업 참여</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_2_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_2_img2.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_2_img3.jpg" alt="">
            </div>
            <!-- <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s6_2_img4.png" alt="">
            </div> -->
        </div>
    </div>
</div>