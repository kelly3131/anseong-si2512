<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 공통 서브페이지 CSS 사용
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/sh_sub.css">', 0);
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 1);

?>

<div class="main-tabs-wrapper">
    <div class="main-tabs">
        <a href="/bbs/content.php?co_id=m4_s1" class="main-tab active">자원봉사안내</a>
        <a href="/bbs/write.php?bo_table=volunteer" class="main-tab">자원봉사신청</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">자원봉사안내</h2>
        </div>
        <p>여러분의 소중한 참여의 모습이 아름다운 세상을 만들어 갑니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <!-- <div class="info-section">
                <div class="volunteer-image">
                    <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m4/support2.jpg" alt="여러분의 소중한 참여의 모습이 아름다운 세상을 만들어 갑니다.">
                </div>
            </div> -->

            <div class="info-section">
                <h3 class="section-title-with-icon">자원봉사 활동의 목적</h3>
                <ul>
                    <li>지역사회의 유용한 인력을 활용함으로써 지역사회교류 및 일체감을 조성합니다.</li>
                    <li>지속적인 활동으로 심신의 건강을 유지합니다.</li>
                    <li>자원봉사를 통해 잠재력을 발휘할 기회를 제공함으로써, 자아실현의 기회를 부여합니다.</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">대상</h3>
                <ul>
                    <li><strong>일반 자원봉사 :</strong> 학생, 주부, 직장인 등 개인 및 단체 누구나 가능</li>
                    <li><strong>어르신 자원봉사 :</strong> 어르신 개인 및 단체 누구나 가능</li>
                </ul>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">신청절차</h3>
                <ol>
                    <li>홈페이지를 통하여 봉사활동 참여 신청을 한 후 전화로 방문일시를 합의합니다.</li>
                    <li>약속된 시간에 본 회관을 방문, 복지관 소개 및 라운딩을 한 후에 활동분야에 대한 적합성 판정을 거친 후 해당분야 담당자와 구체적 봉사활동을 협의합니다.</li>
                    <li>지정된 일시에 자원봉사활동을 합니다.(사정상 자원봉사 활동이 불가능할 경우 자원봉사 담당자에게 사전연락을 하여 진행에 차질이 없도록 해야합니다.)</li>
                </ol>
            </div>

            <div class="info-section">
                <h3 class="section-title-with-icon">참여분야</h3>
                <div class="table-scroll-wrapper">
                    <table class="basic_table">
                        <thead>
                            <tr>
                                <th>구분</th>
                                <th>활동분야</th>
                                <th>활동시간</th>
                                <th>비고</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3">재가복지</td>
                                <td>밑반찬배달</td>
                                <td>매주 화<br>(주1회)</td>
                                <td>안성전지역<br>(장소협의)</td>
                            </tr>
                            <tr>
                                <td>이미용</td>
                                <td>월 1회</td>
                                <td>관련자격증 소지자</td>
                            </tr>
                            <tr>
                                <td>주거환경개선</td>
                                <td>수 시</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>평생교육</td>
                                <td>교육진행 및 보조</td>
                                <td>시간협의</td>
                                <td>관련자격증 소지자 및<br>노인전문상담 유경험자</td>
                            </tr>
                            <tr>
                                <td>경로식당</td>
                                <td>조리, 배식, 청소</td>
                                <td>평 일<br>(09:00-13:00)</td>
                                <td>개인 및 단체 가능<br>요일 추후협의</td>
                            </tr>
                            <tr>
                                <td>전문상담</td>
                                <td>법률·세무상담</td>
                                <td>월 1회</td>
                                <td>관련자격증 소지자 및<br>노인전문상담 유경험자</td>
                            </tr>
                            <tr>
                                <td>업무지원</td>
                                <td>행정업무보조 및<br>각종 행사 업무지원</td>
                                <td>수 시</td>
                                <td>가능요일 추후협의</td>
                            </tr>
                            <tr>
                                <td>기 타</td>
                                <td>관내환경정리</td>
                                <td>수 시</td>
                                <td>시간·요일 추후협의</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="volunteer-button-wrapper">
            <a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=volunteer" class="volunteer-apply-btn">
                자원봉사 신청하기
            </a>
        </div>
    </div>
</div>