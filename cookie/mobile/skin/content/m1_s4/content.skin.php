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
        <a href="/bbs/content.php?co_id=m1_s4" class="main-tab active">연혁</a>
        <a href="/bbs/content.php?co_id=m1_s5" class="main-tab">조직도</a>
        <a href="/bbs/content.php?co_id=m1_s6" class="main-tab">이용안내</a>
        <a href="/bbs/content.php?co_id=m1_s7" class="main-tab">시설안내</a>
        <a href="/bbs/content.php?co_id=m1_s8" class="main-tab">오시는길</a>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <div class="foundation-info">
                <h2 class="title-with-icon">연혁</h2>
                <p class="foundation-subtitle">안성시노인복지관의 발자취와 성과</p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="history-content">
            <!-- 연혁 탭 메뉴 -->
            <div class="history-tabs">
                <button class="history-tab active" data-tab="tab1">2024 ~ 2021</button>
                <button class="history-tab" data-tab="tab2">2020 ~ 2019</button>
                <button class="history-tab" data-tab="tab3">2018 ~ 2015</button>
                <button class="history-tab" data-tab="tab4">2014 ~ 2008</button>
            </div>

            <!-- 연혁 탭 내용 -->
            <div class="history-tab-content active" id="tab1">
                <div class="history-section">
                    <div class="h_year">2024</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.15</div>
                            <div class="h_con">서울특별시 백암정신병원 협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.01</div>
                            <div class="h_con">2024년 노인일자리 및 사회활동 지원사업 발대식 실시</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.05</div>
                            <div class="h_con">건강한 아침 천원식당 개시</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.16</div>
                            <div class="h_con">2024년 노인자원봉사 활성화 지원사업 수행기관 선정(3개 봉사단)</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.23</div>
                            <div class="h_con">안성시 소외계층 평생학습프로그램 공모사업 수행기관 선정(스마트폰 교육)</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.29</div>
                            <div class="h_con">물리치료실 개소식</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">03.05</div>
                            <div class="h_con">안성제일정형외과 업무협약 체결</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.06</div>
                            <div class="h_con">2024년 어르신 인생노트 사업 수행기관 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">04.23</div>
                            <div class="h_con">2024년 어르신 문화체육 이음터 공모사업 수행기관 선정</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">05.22</div>
                            <div class="h_con">2024년 ESG와 함께하는 나돌봄 공모사업 수행기관 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">08.26</div>
                            <div class="h_con">2024년 안성시 노인복지증진사업 "신(新)나는 도전" 수행기관 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">08.26</div>
                            <div class="h_con">2024년 안성시 노인복지증진사업 "힐링하모니" 수행기관 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">09.12</div>
                            <div class="h_con">2024년 응급안전안심서비스 도‧시군 합동점검 결과 A등급</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">09.24</div>
                            <div class="h_con">경기도 민관협력 치매사업 우수사례공모전 경기도지사 표창</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">09.27</div>
                            <div class="h_con">안성시정신건강복지센터(부설)자살예방센터 협약</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">10.18</div>
                            <div class="h_con">2024년 연명의료결정제도 유공 보건복지부장관 표창</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.06</div>
                            <div class="h_con">경기도의료원수원병원 협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.08</div>
                            <div class="h_con">(사)안성시새마을회 협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.19</div>
                            <div class="h_con">한국치매예방강사협회 협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.24</div>
                            <div class="h_con">경로식당 환경정비(의자, 식탁)</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">12.12</div>
                            <div class="h_con">국민건강보험공단 인천경기지역본부 「인경-가온누리」사업 우수협력기관</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2023</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.18</div>
                            <div class="h_con">칠장사와 함께하는 나소향 나눔밥상 무료급식 진행</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">01.19</div>
                            <div class="h_con">서울특별시 백암정신병원 업무협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">01.20</div>
                            <div class="h_con">안성성모병원 후원금 전달</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.01</div>
                            <div class="h_con">공도 나소향 나눔밥상 개소식</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.21</div>
                            <div class="h_con">사회보장급여 신청지원기관 지정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">02.24</div>
                            <div class="h_con">경기도의료원 안성병원 업무협약 체결</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.01</div>
                            <div class="h_con">2023년 노인자원봉사 활성화 지원사업(선배시민) 공모 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">04.01</div>
                            <div class="h_con">저소득층 노인 무료급식사업 '나소향 아침밥상' 진행</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">04.01</div>
                            <div class="h_con">2023년 문화예술교육지원사업(음악분야-난타) 공모 선정</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">04.04</div>
                            <div class="h_con">2023년 KB손해보험 지정기탁사업 공도지역 노인의 균형잡힌 점심식사를 위한 무료급식사업 '공도행복밥상' 진행</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">10.25</div>
                            <div class="h_con">응급안전안심서비스사업 경기도 우수모델 확산 기여 우수 수행기관 경기도사회서비스원 표창 수상</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">10.26</div>
                            <div class="h_con">안성시노인복지관 수탁2주년 기념식 '2처럼 행복한 이날' 진행</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.23</div>
                            <div class="h_con">노인일자리 및 사회활동지원사업 우수기관 경기도지사 표창 수상</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2022</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.03</div>
                            <div class="h_con">경기도여성단체협의회안성시지회 업무협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">01.20</div>
                            <div class="h_con">서울특별시 백암정신병원 업무협약 체결</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.10</div>
                            <div class="h_con">경기도 자원봉사 우수 수요처 현판식</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">04.07</div>
                            <div class="h_con">안성성모병원 업무협약 체결</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">12.20</div>
                            <div class="h_con">안성시노인복지관 '새단장 기념식' 진행</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2021</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.15</div>
                            <div class="h_con">지역상생 바자회 수익금 통한 독거노인 난방비 지원</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">09.01</div>
                            <div class="h_con">대한불교조계종 사회복지재단 위수탁 운영계약 체결(안성시)<br>김동선 관장 취임</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">10.01</div>
                            <div class="h_con">제25회 노인의날 기념 행사</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="history-tab-content" id="tab2">
                <div class="history-section">
                    <div class="h_year">2020</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.03</div>
                            <div class="h_con">평생교육지원사업 제10회 문화축제 '금빛물결'</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">01.21~23</div>
                            <div class="h_con">설날맞이 情(정)나눔 식료품 키트 전달</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">02.05</div>
                            <div class="h_con">무료급식어르신 식사지원(코로나19)</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">11.24</div>
                            <div class="h_con">경기복지재단 '불어라, 청춘바람' 경기도 노인일자리 사진 및 수기 공모전 수상</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">12.28</div>
                            <div class="h_con">종무식 및 후원자·자원봉사자 총회 '소중한 당신, 빛나는 우리'</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2019</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.04</div>
                            <div class="h_con">평생교육 문화축제'금빛물결'</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.28</div>
                            <div class="h_con">2019년 노인사회활동지원사업 발대식</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">09.10</div>
                            <div class="h_con">'다(多)가치 풍성한 추석'행사</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">12.10</div>
                            <div class="h_con">경기사회복지공동모금회 2019 기획 차량지원사업 선정</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="history-tab-content" id="tab3">
                <div class="history-section">
                    <div class="h_year">2018</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">01.12</div>
                            <div class="h_con">제 8회 문화축제 '금빛물결' 및 2017년 평생교육 하반기 종강식</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.14</div>
                            <div class="h_con">노인사회활동지원사업 통합발대식<br>2018 산림복지서비스 이용권 선정</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">09.20</div>
                            <div class="h_con">추석행사 다(多)가치 풍성한 추석'<br>홀로 사는 어르신을 위한 '한가위 플레저박스' 지원 사업</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2017</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">03.10</div>
                            <div class="h_con">노인사회활동지원사업 통합발대식</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">09.28</div>
                            <div class="h_con">2017 안성맞춤 남사당 바우덕이 축제 부스 설치(~10/2)<br>인천국제항공공사 '노인 이동편의를 위한 실버카' 지원사업</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2016</div>
                    <ul class="history-items">
                        <li class="history-item">
                            <div class="h_date">02.24</div>
                            <div class="h_con">제3대 정종국 관장 취임</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">03.23</div>
                            <div class="h_con">노인사회활동지원사업 통합발대식</div>
                        </li>
                        <li class="history-item">
                            <div class="h_date">05.04</div>
                            <div class="h_con">개관 10주년 '행복&감사 경로잔치'</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2015</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">03.27</div>
                            <div class="h_con">문화예술교육지원사업 사진반 선정</div>
                        </li>
                        <li class="history-item quarter_line">
                            <div class="h_date">06</div>
                            <div class="h_con">2015년 저소득층 에너지효율개선사업 선정</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="history-tab-content" id="tab4">
                <div class="history-section">
                    <div class="h_year">2014</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">05.30</div>
                            <div class="h_con">안성시 독거노인종합돌봄센터 협약식</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2013</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">03</div>
                            <div class="h_con">한국문화예술진흥원 미술·사진프로그램 지원 '문화예술교육 강사 지원'</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2011</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">03</div>
                            <div class="h_con">한국문화예술진흥원 지원 '문화예술교육 강사 지원' 연극 프로그램 선정<br>2011년 전문노인자원봉사단 리더양성교육 및 활동지원사업 선정</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2010</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">05</div>
                            <div class="h_con">2010년 안성맞춤 무용 페스티벌 시니어 대상 수상</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2009</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">02.26</div>
                            <div class="h_con">근로복지공단 지원 '산재근로자 사회적응 프로그램' 선정<br>제2대 오세민 관장 취임</div>
                        </li>
                    </ul>
                </div>

                <div class="history-section">
                    <div class="h_year">2008</div>
                    <ul class="history-items">
                        <li class="history-item quarter_line">
                            <div class="h_date">03</div>
                            <div class="h_con">근로복지재단 지원 '산재근로자 사회적응 프로그램' 선정</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const historyTabs = document.querySelectorAll('.history-tab');
    const historyContents = document.querySelectorAll('.history-tab-content');

    historyTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // 모든 탭과 내용 비활성화
            historyTabs.forEach(t => t.classList.remove('active'));
            historyContents.forEach(c => c.classList.remove('active'));

            // 클릭된 탭과 해당 내용 활성화
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});
</script>