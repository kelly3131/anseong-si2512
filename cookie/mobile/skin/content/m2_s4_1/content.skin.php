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
        <a href="/bbs/content.php?co_id=m2_s4_1" class="main-tab active">정책지원팀</a>
        <a href="/bbs/content.php?co_id=m2_s5_1" class="main-tab">맞춤돌봄팀</a>
        <a href="/bbs/content.php?co_id=m2_s6_2" class="main-tab">사회참여팀</a>
    </div>
</div>

<div class="sub-tabs-wrapper">
    <div class="sub-tabs-container">
        <div class="sub-tabs">
            <a href="/bbs/content.php?co_id=m2_s4_1" class="sub-tab active">사례관리사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_2" class="sub-tab">재가복지사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_3" class="sub-tab">경로식당 무료급식사업</a>
            <span class="chevron">|</span>
            <a href="/bbs/content.php?co_id=m2_s4_4" class="sub-tab">식사배달지원사업</a>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-title">
        <div class="title-bar">
            <h2 class="title-with-icon">사례관리사업</h2>
        </div>
        <p>복합적·만성적 어려움을 가진 당사자가 사례관리자와 함께 자원 활용 및 목표 수립을 통해 자립적 생활을 유지하도록 지원합니다.</p>
    </div>

    <div class="content-card">
        <div class="business-content">
            <div class="info-section">
                <h2 class="title-with-icon">사례관리사업</h2>
                <p>복합적이고 만성적인 어려움으로 일상 유지가 힘든 어르신을 위해, 사례관리자가 삶의 파트너가 되어 드립니다. 어르신 및 지역사회와 함께 촘촘한 안전망을 만들어갑니다.</p>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업 목적</h3>
                <p>단순한 서비스 전달을 넘어, 어르신이 지역사회 내에서 스스로의 힘으로 건강하고 존엄한 삶을 유지(자립)할 수 있도록 통합적인 지원 체계를 구축합니다.</p>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업 개요</h3>
                <ul>
                    <li><strong>1. 대상</strong><br>
                        ∘복합적인 문제를 가진 안성시에 거주하는 만 60세 이상 어르신<br>
                        ∘기초생활수급자 및 차상위계층 등 저소득 어르신<br>
                        ∘스스로 일상생활을 영위하는데 어려움을 가진 독거 어르신<br>
                        ∘부양의무자로부터 적절한 돌봄을 받지 못하는 어르신<br>
                        ∘기타 사례회의를 통해 개입이 필요하다고 판단된 어르신
                    </li>
                    <li><strong>2. 서비스 내용</strong><br>
                        ∘지역사회 인적·물적 자원 연계 및 다양한 지원을 통해 어르신과 문제를 해결하고 더 나은 삶을 지원
                    </li>
                    <li><strong>3. 서비스 기간 :</strong> 연중</li>
                </ul>
            </div>
            <div class="info-section">
                <h3 class="section-title-with-icon2">사업 내용</h3>
                <ol>
                    <li><strong>심층 상담 및 정서 지원</strong><br>
                        - 정기적인 방문과 상담을 통해 어르신의 고립감을 해소하고 정서적 안정을 돕습니다.
                    </li>
                    <li><strong>맞춤형 자원 연계 및 발굴</strong><br>
                        - 경제적 지원(후원금·품), 의료 서비스, 주거 환경 개선 등 어르신께 꼭 필요한 맞춤형 자원을 찾아 연결합니다.
                    </li>
                    <li><strong>위기가정 긴급 개입</strong><br>
                        - 갑작스러운 질병이나 경제적 위기 상황 발생 시, 신속하게 개입하여 일상 회복을 돕습니다.
                    </li>
                    <li><strong>지역사회 네트워크 구축</strong><br>
                        - 민·관 협력을 통해 사각지대에 놓인 어르신을 선제적으로 발굴하고 지역사회가 함께 돌보는 환경을 만듭니다.
                    </li>
                </ol>
            </div>
            <div class="info-section procedure">
                <h3 class="section-title-with-icon2">사업절차</h3>
                <table class="service-table">
                    <colgroup>
                        <col width="20%">
                        <col width="">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>진행 과정</th>
                            <th>내용</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01. 사례발굴 및 접수</td>
                            <td>∘본인 직접 방문 및 전화, 지역사회 이웃 및 유관기관 추천<br/>∘도움이 필요한 상황에 대한 기초 정보를 확인하고 첫 만남을 준비합니다.</td>
                        </tr>
                        <tr>
                            <td>02. 가정방문 상담(인테이크)</td>
                            <td>∘사례관리자가 직접 어르신 댁을 방문하여 현재 겪고 계신 어려움과 일상의 변화를 위해 바라는 점을 깊이 있게 경청합니다.</td>
                        </tr>
                        <tr>
                            <td>03. 사례회의 (대상자 선정)</td>
                            <td>∘상담내용을 바탕으로 전문가들이 모여 어르신께 가장 시급하고 필요한 지원이 무엇인지 논의하고, 사례관리 서비스 제공 여부를 결정합니다.</td>
                        </tr>
                        <tr>
                            <td>04. 맞춤형 사정(Assessment) 및 목표 수립</td>
                            <td>∘선정된 어르신과 담당자가 함께 머리를 맞대어 "어떤 변화를 만들 것인가"에 대한 구체적인 목표를 세우고 우선순위를 정합니다.</td>
                        </tr>
                        <tr>
                            <td>05. 사례관리 계약</td>
                            <td>∘변화의 주인공인 어르신과 조력자인 복지관이 서로의 역할과 책임을 확인하고, 신뢰를 바탕으로 함께 노력할 것을 약속합니다.</td>
                        </tr>
                        <tr>
                            <td>06. 서비스 실행 및 자원 연계</td>
                            <td>∘사례관리자가 어르신의 필요에 맞는 다양한 자원을 연계하고, 서비스가 원활하게 제공될 수 있도록 지원합니다.∘수립된 계획에 따라 맞춤형 복지 서비스를 제공하며, 지역사회 내 다양한 자원(의료, 경제, 주거 등)을 촘촘하게 연결합니다.</td>
                        </tr>
                        <tr>
                            <td>07. 점검 및 평가</td>
                            <td>∘서비스가 계획대로 잘 진행되고 있는지, 어르신의 삶에 실질적인 도움이 되고 있는지 함께 돌아보며 향후 방향을 점검합니다.</td>
                        </tr>
                        <tr>
                            <td>08. 종결 및 사후관리</td>
                            <td>∘주요 문제가 해결되거나 스스로 생활하실 수 있는 지지체계가 마련되면 서비스를 종결합니다. 이후에도 안정적인 생활을 하실 수 있도록 지속적인 관심을 이어갑니다.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="image-grid">
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_1_img1.jpg" alt="">
            </div>
            <div class="image-item">
                <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/sub/m2/m2_s4_1_img2.jpg" alt="">
            </div>
        </div>
    </div>
</div>