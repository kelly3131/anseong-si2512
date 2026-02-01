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
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab active">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-info">
                <h2 class="title-with-icon">조직도</h2>
                <!-- <p class="foundation-subtitle">안성시노인복지관 조직 구성</p> -->
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <!-- <h3 class="section-title-with-icon2">조직도</h3> -->
                
                <!-- 반응형 조직도 -->
                <div class="organ-chart-wrapper">
                    <div class="org-chart">
                        
                        <!-- 1단계: 관장-->
                        <div class="org-row">
                            <div class="org-col">
                                <div class="org-box org-ceo" onclick="showOrgInfo('ceo')">
                                    <div class="org-name">관장</div>
                                    <!-- <div class="org-sub">관장 김도윤(가섭)</div> -->
                                </div>
                            </div>
                        </div>

                        <!-- 2단계: 인사위원회, 운영위원회 (양쪽) + 총괄부장 (중앙 아래) -->
                        <div class="org-level2-wrapper">
                            <!-- 위원회 행 (인사위원회 - 운영위원회) -->
                            <div class="org-committee-row">
                                <div class="org-col">
                                    <!-- <div class="org-box org-committee" onclick="showOrgInfo('personnel')"> -->
                                    <div class="org-box org-committee2">
                                        <div class="org-name">인사위원회</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <!-- <div class="org-box org-committee" onclick="showOrgInfo('operation')"> -->
                                    <div class="org-box org-committee2">
                                        <div class="org-name">운영위원회</div>
                                    </div>
                                </div>
                            </div>
                            <!-- 총괄부장 행 (중앙 아래) -->
                            <div class="org-director-row">
                                <div class="org-col">
                                    <div class="org-box org-director" onclick="showOrgInfo('director')">
                                        <div class="org-name">총괄부장</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3단계 + 4단계: 과장과 팀들 (복합 구조) -->
                        <div class="org-level34-wrapper">
                            <!-- 과장 행 (양쪽 끝에 배치) -->
                            <div class="org-manager-row">
                                <div class="org-col org-manager-left">
                                    <div class="org-box org-dept-head" onclick="showOrgInfo('general-manager')">
                                        <div class="org-name">총무과장</div>
                                    </div>
                                </div>
                                <div class="org-col org-manager-right">
                                    <div class="org-box org-dept-head" onclick="showOrgInfo('welfare-manager')">
                                        <div class="org-name">복지과장</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 팀 행 (6개 팀 일렬) -->
                            <div class="org-team-row">
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('operations-team')">
                                        <div class="org-name">운영지원팀</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('policy-team')">
                                        <div class="org-name">정책지원팀</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('planning-team')">
                                        <div class="org-name">기획홍보팀</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('culture-team')">
                                        <div class="org-name">문화건강팀</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('participation-team')">
                                        <div class="org-name">사회참여팀</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-team" onclick="showOrgInfo('care-team')">
                                        <div class="org-name">맞춤돌봄팀</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- 부서 정보 테이블 표시 영역 -->
                <div id="org-detail-section" class="org-detail-section" style="display:none; margin-top:40px;">
                    <div id="org-detail-content"></div>
                </div>
            </div>

        </div>
    </div>

    <h3 class="section-title-with-icon2">종사자 현황</h3>
    <div class="staff-statistics">
        <div class="table-scroll-wrapper">
            <table class="organ_table1">
                <tbody>
                    <tr>
                        <th>구분</th>
                        <th>관장</th>
                        <th>부장</th>
                        <th>과장</th>
                        <th>팀장</th>
                        <th>사회복지사</th>
                        <th>간호사</th>
                        <th>물리치료사</th>
                        <th>수입<br>사무원</th>
                        <th>지출<br>사무원</th>
                        <th>시설관리</th>
                        <th>노인 상담<br>센터 상담사</th>
                    </tr>
                    <tr>
                        <td>인원(명)</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>구분</th>
                        <th>본관<br>영양사</th>
                        <th>본관<br>조리사</th>
                        <th>본관<br>조리원</th>
                        <th>아침 경로식당<br>전담·조리원</th>
                        <th>공도 경로식당<br>영양사</th>
                        <th>공도 경로식당<br>조리원</th>
                        <th>노인맞춤돌봄<br>전담<br>사회복지사</th>
                        <th>응급관리요원</th>
                        <th>노인 일자리<br>담당자</th>
                        <th>생활<br>지원사</th>
                        <th>전체</th>
                    </tr>
                    <tr>
                        <td>인원(명)</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                        <td>3</td>
                        <td>1</td>
                        <td>2</td>
                        <td>5</td>
                        <td>3</td>
                        <td>4</td>
                        <td>50</td>
                        <td class="total">94</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 조직도 상세 정보 팝업 (모바일 대응) -->
<div class="organ_pop_wrap">
    <div class="orgac_bg"></div>
    <div class="organ_pop_con">
        <div class="organ_pop_top">
            <p class="orgac_tit"></p>
            <p class="orgac_close">×</p>
        </div>
        <div class="organ_pop_txt"></div>
    </div>
</div>

<script>
// 각 부서별 직원 정보 데이터
const orgData = {
    'ceo': {
        title: "관장",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>관장</td>
                                <td>김도윤</td>
                                <td>031-674-0791</td>
                                <td>복지관 운영 및 사업 총괄</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'personnel': {
        title: "인사위원회",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>위원장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>인사 정책 결정 및 심의</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'operation': {
        title: "운영위원회",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>위원장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>운영 방침 결정 및 심의</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'director': {
        title: "총괄부장",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>권순호</td>
                                <td>총괄부장</td>
                                <td>070-4352-8167</td>
                                <td>사업 실무 총괄</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'general-manager': {
        title: "총무과장",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>김은주</td>
                                <td>총무과장</td>
                                <td>070-5143-0086</td>
                                <td>총무과 운영 및 관리</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'welfare-manager': {
        title: "복지과장",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>이단비</td>
                                <td>복지과장</td>
                                <td>070-5143-0177</td>
                                <td>복지과 운영 및 관리</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'operations-team': {
        title: "총무과 - 운영지원팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>임원석</td>
                                <td>실장</td>
                                <td>070-5143-0696</td>
                                <td>시설&차량관리</td>
                            </tr>
                            <tr>
                                <td>박지현</td>
                                <td>대리</td>
                                <td>070-5143-3865</td>
                                <td>지출 사무원</td>
                            </tr>
                            <tr>
                                <td>이은정</td>
                                <td>지출사무원</td>
                                <td>070-5143-0171</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>김희은</td>
                                <td>수입 사무원</td>
                                <td>070-4352-8190</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'policy-team': {
        title: "총무과 - 정책지원팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>김사랑</td>
                                <td>팀장</td>
                                <td>070-5143-0175</td>
                                <td>노인복지정책개발, 사례관리</td>
                            </tr>
                            <tr>
                                <td>남윤택</td>
                                <td>사회복지사</td>
                                <td>070-5143-3313</td>
                                <td>재가복지, 본관 경로식당, 식사배달</td>
                            </tr>
                            <tr>
                                <td>손수빈</td>
                                <td>사회복지사</td>
                                <td>070-5143-0162</td>
                                <td>사례관리, 공도 경로식당, 식사배달</td>
                            </tr>
                            <tr>
                                <td>김경희</td>
                                <td>실장/영양사</td>
                                <td>070-5143-0166</td>
                                <td>경로식당 총괄</td>
                            </tr>
                            <tr>
                                <td>김순옥</td>
                                <td>조리사</td>
                                <td>-</td>
                                <td>본관 경로식당 </td>
                            </tr>
                            <tr>
                                <td>양연미</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>본관 경로식당 </td>
                            </tr>
                            <tr>
                                <td>정정옥</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>본관 경로식당 </td>
                            </tr>
                            <tr>
                                <td>권오선</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>본관 경로식당 </td>
                            </tr>
                            <tr>
                                <td>최성애</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>본관 경로식당</td>
                            </tr>
                            <tr>
                                <td>이경옥</td>
                                <td>아침전담</td>
                                <td>070-5143-2498</td>
                                <td>아침 경로식당 </td>
                            </tr>
                            <tr>
                                <td>안해숙</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>아침 경로식당</td>
                            </tr>
                            <tr>
                                <td>변다영</td>
                                <td>조리원</td>
                                <td>-</td>
                                <td>아침 경로식당</td>
                            </tr>
                            <tr>
                                <td>장영숙</td>
                                <td>영양사</td>
                                <td>031-658-5731</td>
                                <td>공도 경로식당</td>
                            </tr>
                            <tr>
                                <td>구경란</td>
                                <td>조리원</td>
                                <td>031-658-5731</td>
                                <td>공도 경로식당</td>
                            </tr>
                            <tr>
                                <td>안미향</td>
                                <td>조리원</td>
                                <td>031-658-5731</td>
                                <td>공도 경로식당</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'planning-team': {
        title: "총무과 - 기획홍보팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>한아름</td>
                                <td>팀장</td>
                                <td>070-5143-0161</td>
                                <td>홍보, 후원사업, 유관기관 사회공헌 개발</td>
                            </tr>
                            <tr>
                                <td>이건우</td>
                                <td>사회복지사</td>
                                <td>070-5143-0172</td>
                                <td>자원봉사센터 운영, 노인자원봉사, 선배시민</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'culture-team': {
        title: "복지과 - 문화건강팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>박효진</td>
                                <td>팀장</td>
                                <td></td>
                                <td>평생교육, 동아리</td>
                            </tr>
                            <tr>
                                <td>김경자</td>
                                <td>실장/간호사</td>
                                <td></td>
                                <td>건강증진지원</td>
                            </tr>
                            <tr>
                                <td>김규림</td>
                                <td>대리</td>
                                <td></td>
                                <td>회원관리, 평생교육, 일반상담, 노인권익증진</td>
                            </tr>
                            <tr>
                                <td>안수진</td>
                                <td>물리치료사</td>
                                <td></td>
                                <td>기능회복증진</td>
                            </tr>
                            <tr>
                                <td>박도영</td>
                                <td>상담사</td>
                                <td></td>
                                <td>노인전문상담센터 전문상담</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'participation-team': {
        title: "복지과 - 사회참여팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper">
                    <table class="staff-detail-table">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>고진아</td>
                                <td>팀장</td>
                                <td>070-4352-8221</td>
                                <td>노인일자리 공동체사업 나소향카페, 복리후생사업</td>
                            </tr>
                            <tr>
                                <td>김은향</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0176</td>
                                <td>노인일자리 안성맞춤 상담서포터즈, 안성맞춤 모니터링단, 노노케어</td>
                            </tr>
                            <tr>
                                <td>조수진</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0697</td>
                                <td>노인일자리 안성맞춤 회계코디, 안성맞춤 복지시설관리, 공공시설봉사</td>
                            </tr>
                            <tr>
                                <td>정유정</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0175</td>
                                <td>노인일자리 노노케어</td>
                            </tr>
                            <tr>
                                <td>공석</td>
                                <td>-</td>
                                <td>070-5143-0173</td>
                                <td>노인일자리 학교도우미, 아동교통안전지원</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    },
    'care-team': {
        title: "복지과 - 맞춤돌봄팀",
        content: `
            <div class="staff-info-section">
                <div class="staff-table-wrapper" style="max-height: 400px; overflow-y: auto;">
                    <table class="staff-detail-table">
                        <colgroup>
                            <col style="width: 50%;">
                            <col style="width: 15%;">
                            <col style="width: 15%;">
                            <col style="width: 20%;">
                        <thead>
                            <tr>
                                <th>성명</th>
                                <th>직위</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>최주현</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-2039</td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                            <tr>
                                <td>유정우</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0168</td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                            <tr>
                                <td>박근순</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0170</td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                            <tr>
                                <td>오미경</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0164</td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                            <tr>
                                <td>이은옥</td>
                                <td>전담사회복지사</td>
                                <td>070-5143-0165</td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                            <tr>
                                <td>박경수</td>
                                <td>실장</td>
                                <td>070-5143-0698</td>
                                <td>응급안전안심서비스 총괄 이동세탁서비스</td>
                            </tr>
                            <tr>
                                <td>조미숙</td>
                                <td>응급 전담사회복지사</td>
                                <td>070-5143-0169</td>
                                <td>응급안전안심서비스</td>
                            </tr>
                            <tr>
                                <td>여영애</td>
                                <td>응급 전담사회복지사</td>
                                <td>070-5143-0163</td>
                                <td>응급안전안심서비스</td>
                            </tr>
                            <tr>
                                <td>송남주</td>
                                <td>응급 전담사회복지사</td>
                                <td>070-5143-2038</td>
                                <td>응급안전안심서비스</td>
                            </tr>
                            <tr>
                                <td>생활지원사 50명<br>(강경순, 강미숙, 강임선, 강현경, 김경란, 김금숙, 김금순, 김미화, 김미화, 김병선, 김선희, 김양순, 김영주, 김은자, 김향분, 김호연, 박미규, 박영숙, 백은수, 백은영, 손명순, 송하윤, 안승희, 안진옥, 양순희, 양예진, 오세정, 오영애, 오현근, 윤경애, 윤경희, 윤귀자, 윤다연, 윤치옥, 이경희, 이종숙, 이해경, 임미라, 임미화, 장삼순, 전지현, 정경애, 정인혜, 정인호, 조연실, 조정민, 주예식, 지선영, 최윤희, 허윤만)</td>
                                <td>-</td>
                                <td></td>
                                <td>맞춤돌봄서비스</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `
    }
};

// 조직도 부서 클릭 시 상세 정보 표시
function showOrgInfo(orgId) {
    const data = orgData[orgId];
    if (!data) {
        console.error('데이터를 찾을 수 없습니다:', orgId);
        return;
    }

    const detailSection = document.getElementById('org-detail-section');
    const detailContent = document.getElementById('org-detail-content');

    // 테이블 HTML 생성
    let tableHTML = `
        <div class="org-info-header">
            <h4>${data.title}</h4>
        </div>
        <div class="org-info-table-wrapper">
            ${data.content}
        </div>
    `;

    detailContent.innerHTML = tableHTML;
    detailSection.style.display = 'block';

    // 부드럽게 스크롤
    setTimeout(() => {
        detailSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

// 팝업 닫기
document.addEventListener('DOMContentLoaded', function() {
    const popupWrap = document.querySelector('.organ_pop_wrap');
    const closeBtn = document.querySelector('.orgac_close');
    const bgClose = document.querySelector('.orgac_bg');

    function closePopup() {
        if (popupWrap) {
            popupWrap.style.display = 'none';
            document.documentElement.classList.remove('popup-open');
            document.body.classList.remove('popup-open');
        }
    }

    if (closeBtn) closeBtn.addEventListener('click', closePopup);
    if (bgClose) bgClose.addEventListener('click', closePopup);

    // ESC 키로 팝업 닫기
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && popupWrap && popupWrap.style.display === 'flex') {
            closePopup();
        }
    });
});
</script>
