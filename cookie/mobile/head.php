<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

// 배경 이미지 처리
$menu_group = '';

// 1. 콘텐츠 페이지인 경우
if(isset($_GET['co_id']) && !empty($_GET['co_id'])) {
    $co_id = clean_xss_tags($_GET['co_id']);
    $menu_parts = explode('_', $co_id);
    if(count($menu_parts) > 0) {
        $menu_group = $menu_parts[0]; // m1, m2, m3 등
    }
}
// 2. 게시판 페이지인 경우
else if(isset($_GET['bo_table']) && !empty($_GET['bo_table'])) {
    $bo_table = clean_xss_tags($_GET['bo_table']);
    
    // 게시판별 메뉴 그룹 매핑
    $board_to_menu = array(
        // 알림마당 (m5)
        'notice' => 'm5',
        'recruit' => 'm5', 
        'schedule' => 'm5',
        'calendar' => 'm5',
        'calendar2' => 'm5',
        'calendar3' => 'm5',
        'pds' => 'm5',
        'news' => 'm5',
        'bodo' => 'm5',
        'review' => 'm5',
        
        // 복지관이야기 (m6)
        'photo' => 'm6',
        
        // 후원 관련 (m3)
        'sponsor' => 'm3',
        'sponsor2' => 'm3',
        'spon_news' => 'm3',
        
        // 봉사안내 (m4)
        'volunteer' => 'm4'
    );
    
    if(isset($board_to_menu[$bo_table])) {
        $menu_group = $board_to_menu[$bo_table];
    }
}

// 배경 이미지 적용
if(!empty($menu_group)) {
    $bg_image_path = G5_THEME_IMG_URL . '/mobile/sub/' . $menu_group . '.png';
    
    add_stylesheet('<style>
    #container_title {
        background-image: url("'.$bg_image_path.'") !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }
    </style>', 999);
}

?>

 <!-- sh_hd [s] -->
    <header id="sh_hd">
    	<div id="sh_hd_wrapper">
            
            <nav id="shGnb">
                <!-- 로고 -->
                <div class="sh_logo">
                    <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/logo.png" alt=""></a>
                </div>
                <!-- 상단메뉴 -->
                <ul class="sh_nav">
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1">복지관소개</a>
                        <ul class="sh_lnb_s">
                            <!-- <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1">회사소개</a> </li> -->
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1">법인소개</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s2">인사말</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s3">미션 및 비전</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s4">연혁</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s5">조직도</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s6">이용안내</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s7">시설안내</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s8">오시는길</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1">사업안내</a>
                        <ul class="sh_lnb_s">
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1">운영지원팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1">인재육성사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_2">운영사업(사무, 자산관리)</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_3">운영사업(회계)</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_4">시설안전관리</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_1">문화건강팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_1">평생교육사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_2">동아리사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_3">상담사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_4">건강생활지원사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_5">기능회복지원사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_6">노인상담사업</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_1">기획홍보팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_1">홍보사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_2">일반자원봉사사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_3">노인권익증진사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_4">지역복지연계사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_5">지역사회자원개발사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_6">복리후생사업</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_1">사례관리팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_1">사례관리</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_2">재가복지사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_3">경로식당 무료급식사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_4">식사배달지원사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_5">이동세탁서비스사업</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_1">맞춤돌봄팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_1">노인맞춤돌봄서비스사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_2">노인맞춤돌봄특화사업</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_3">응급안전안심서비스사업</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1">사회참여팀</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1">자원봉사</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_2">노인일자리</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_3">사회활동지원</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m3_s1">후원안내</a>
                        <ul class="sh_lnb_s">
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m3_s1">후원안내</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=sponsor">후원신청</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=spon_news">후원소식</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m4_s1">봉사안내</a>
                        <ul class="sh_lnb_s">
                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m4_s1">자원봉사안내</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=volunteer">자원봉사신청</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">알림마당</a>
                        <ul class="sh_lnb_s">
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=recruit">채용안내</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=schedule">이달의행사</a> </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar">이달의식단</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar3">본관</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar2">분관</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar">아침 천원식당</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">자유게시판</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=photo">복지관이야기</a>
                        <ul class="sh_lnb_s">
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=photo">복지관 이야기</a> </li>
                            <li class="has-submenu"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">복지관소식</a>
                                <ul class="sh_lnb_3d">
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">운영위원회공개</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=sponsor2">후원공개</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=financial">예산공개</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=pds">자료실</a> </li>
                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=bodo">언론보도</a> </li>
                        </ul>
                        
                    </li>
                </ul>
               
            </nav>	

            <!-- 반응형메뉴 [s] -->
            <div id="topmenuM">
                <h1 id="m_logo"><a href="index.html"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/common/logo.png" alt="Sample" /></a></h1>
                <!-- 메뉴 버튼 -->
                <div id="m_navBtn"><span></span></div>
                <!-- 오픈 메뉴 -->
                <div id="navWrap">
                    <div class="inner">
                        <ul class="m_lnb">
                            <li>
                                <button class="m_bmenu" type="button">복지관소개</button>
                                <ul class="m_smenu">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1">회사소개</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s2">법인소개</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s3">인사말</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s4">미션 및 비전</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s5">연혁</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s6">조직도</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s7">이용안내</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s8">시설안내</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s9">오시는길</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">사업안내</button>
                                <ul class="m_smenu">
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1">운영지원팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_1">건강한아침천원식당사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s1_2">인재육성사업</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_1">문화건강팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_1">평생교육사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_2">동아리사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_3">상담사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_4">건강생활지원사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_5">기능회복지원사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s2_6">노인상담사업</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_1">기획홍보팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_1">홍보사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_2">일반자원봉사사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_3">노인권익증진사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_4">지역복지연계사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_5">지역사회자원개발사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s3_6">복리후생사업</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_1">사례관리팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_1">사례관리</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_2">재가복지사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_3">경로식당 무료급식사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_4">식사배달지원사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s4_5">이동세탁서비스사업</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_1">맞춤돌봄팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_1">노인맞춤돌봄서비스사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_2">노인맞춤돌봄특화사업</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s5_3">응급안전안심서비스사업</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1">사회참여팀</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_1">자원봉사</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_2">노인일자리</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m2_s6_3">사회활동지원</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">후원안내</button>
                                <ul class="m_smenu">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m3_s1">후원안내</a> </li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=sponsor">후원신청</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=spon_news">후원소식</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">봉사안내</button>
                                <ul class="m_smenu">
                                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m4_s1">자원봉사안내</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=volunteer">자원봉사신청</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">알림마당</button>
                                <ul class="m_smenu">
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=recruit">채용안내</a></li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=schedule">이달의행사</a></li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar">이달의식단</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar3">본관</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar2">분관</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=calendar">아침 천원식당</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=review">자유게시판</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="m_bmenu" type="button">복지관이야기</button>
                                <ul class="m_smenu">
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=photo">복지관 이야기</a></li>
                                    <li class="has-mobile-submenu"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news">복지관소식</a>
                                        <ul class="m_3dmenu">
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news&sca=운영위원회">운영위원회공개</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news&sca=후원공개">후원공개</a></li>
                                            <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=news&sca=예산공개">예산공개</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=pds">자료실</a></li>
                                    
                                    <li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=bodo">언론보도</a></li>
                                </ul>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
            <!-- 반응형메뉴 [e] -->
        </div>           
    </header>
    <!-- sh_hd [e] -->

<script>
$(document).ready(function(){
    // 모바일 메뉴 3depth 토글 기능 추가
    $(".m_smenu > li > a").click(function(e){
        var $subMenu = $(this).siblings('.m_3dmenu');
        if($subMenu.length > 0) {
            e.preventDefault();
            $subMenu.slideToggle(300);
            $(this).toggleClass('active');
        }
    });
    
    // PC 메뉴 hover 기능 - 간단하고 안정적인 방식
    $(".sh_nav > li").each(function(){
        var $this = $(this);
        var $subMenu = $this.find('.sh_lnb_s');
        var hoverTimer;
        
        $this.hover(
            function(){
                clearTimeout(hoverTimer);
                // 다른 모든 메뉴의 서브메뉴 숨김
                $('.sh_nav > li').not(this).find('.sh_lnb_s, .sh_lnb_3d').hide();
                // 현재 메뉴의 서브메뉴만 표시
                $subMenu.stop(true, true).fadeIn(200);
            },
            function(){
                // 딜레이 후 서브메뉴 숨김
                hoverTimer = setTimeout(function(){
                    $subMenu.stop(true, true).fadeOut(150);
                    $this.find('.sh_lnb_3d').hide();
                }, 150);
            }
        );
        
        // 서브메뉴 자체에 hover 이벤트
        $subMenu.hover(
            function(){
                clearTimeout(hoverTimer);
            },
            function(){
                hoverTimer = setTimeout(function(){
                    $subMenu.stop(true, true).fadeOut(150);
                    $this.find('.sh_lnb_3d').hide();
                }, 150);
            }
        );
    });
    
    // 전체 네비게이션 영역을 벗어나면 모든 메뉴 숨김
    $('#shGnb').mouseleave(function(){
        setTimeout(function(){
            $('.sh_lnb_s, .sh_lnb_3d').stop(true, true).fadeOut(150);
        }, 200);
    });
    
    // PC 메뉴 3depth 호버 기능
    $(".sh_lnb_s > li").each(function(){
        var $this = $(this);
        var $subMenu3d = $this.find('.sh_lnb_3d');
        var hoverTimer3d;
        
        if($subMenu3d.length > 0) {
            $this.hover(
                function(){
                    clearTimeout(hoverTimer3d);
                    // 같은 레벨의 다른 3depth 메뉴 숨김
                    $this.siblings().find('.sh_lnb_3d').hide();
                    $subMenu3d.stop(true, true).fadeIn(200);
                },
                function(){
                    hoverTimer3d = setTimeout(function(){
                        $subMenu3d.stop(true, true).fadeOut(150);
                    }, 150);
                }
            );
            
            // 3depth 메뉴에 마우스가 올라갔을 때 타이머 취소
            $subMenu3d.hover(
                function(){
                    clearTimeout(hoverTimer3d);
                },
                function(){
                    hoverTimer3d = setTimeout(function(){
                        $subMenu3d.stop(true, true).fadeOut(150);
                    }, 150);
                }
            );
        }
    });
});
</script>

<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?><h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>
