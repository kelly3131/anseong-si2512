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
                        
                        <!-- 1단계: 관장 (운영총괄) -->
                        <div class="org-row">
                            <div class="org-col">
                                <div class="org-box org-ceo" onclick="showOrgInfo('ceo')">
                                    <div class="org-name">운영총괄</div>
                                    <div class="org-sub">관장 김도윤(가섭)</div>
                                </div>
                            </div>
                        </div>

                        <!-- 2단계: 인사위원회, 운영위원회 (양쪽) + 실무총괄 (중앙 아래) -->
                        <div class="org-level2-wrapper">
                            <!-- 위원회 행 (인사위원회 - 운영위원회) -->
                            <div class="org-committee-row">
                                <div class="org-col">
                                    <div class="org-box org-committee" onclick="showOrgInfo('personnel')">
                                        <div class="org-name">인사위원회</div>
                                    </div>
                                </div>
                                <div class="org-col">
                                    <div class="org-box org-committee" onclick="showOrgInfo('operation')">
                                        <div class="org-name">운영위원회</div>
                                    </div>
                                </div>
                            </div>
                            <!-- 실무총괄 행 (중앙 아래) -->
                            <div class="org-director-row">
                                <div class="org-col">
                                    <div class="org-box org-director" onclick="showOrgInfo('director')">
                                        <div class="org-name">실무총괄</div>
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
        title: "실무총괄",
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
                                <td>부장</td>
                                <td>-</td>
                                <td>-</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>과장</td>
                                <td>-</td>
                                <td>-</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>과장</td>
                                <td>-</td>
                                <td>-</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>운영 지원 및 관리</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>정책 지원 및 기획</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>기획 및 홍보</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>문화 건강 프로그램 운영</td>
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
                                <th>직위</th>
                                <th>성명</th>
                                <th>전화</th>
                                <th>담당업무</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>사회 참여 활동 운영</td>
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
                                <td>팀장</td>
                                <td>-</td>
                                <td>-</td>
                                <td>맞춤형 돌봄 서비스 운영</td>
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
