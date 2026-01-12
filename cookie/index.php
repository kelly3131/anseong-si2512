<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

   <div id="sh_wrapper">
        <!-- sh_container [s] -->
        <main id="sh_container">
            <!-- sh_container_wrapper [s] -->
            <div id="sh_container_wrapper">

                <!-- sh_section [s] -->
                <section id="sh_section">
                    <!-- <div>
                        <img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/main01.jpg" alt="">
                        <div class="main_txt">
                            <p>함께하며 희망의 빛이 되는 복지관<br>안성시노인복지관</p>
                            안성시노인복지관 홈페이지에 방문해 주신 여러분을 진심으로 환영합니다.
                        </div>
                    </div> -->
                    <!-- main_banner [s] -->
                <section id="mainbanner">
                    <div id="mainVisual">
                        <div class="swiper main_slide">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <div class="bg bg01"></div>
                                    <!-- <div class="main_txt">
                                        <p>함께하며 희망의 빛이 되는 복지관<br>안성시노인복지관</p>
                                        안성시노인복지관 홈페이지에 방문해 주신 여러분을 진심으로 환영합니다.
                                    </div> -->
                                </li>
                                <li class="swiper-slide">
                                    <div class="bg bg02"></div>
                                    <!-- <div class="main_txt">
                                        <p>세상을 마주하며<br>사랑으로 함께 가는 공동체</p>
                                        방문해주신 모든분들에게 희망의 빛이 되는 복지관을 소개합니다.
                                    </div> -->
                                </li>
                                <li class="swiper-slide">
                                    <div class="bg bg03"></div>
                                    <!-- <div class="main_txt">
                                        <p>함께 만드는 행복한 세상,<br>안성시노인복지관</p>
                                        특별한 나눔을 함께 만들어 갈 여러분들을 기다립니다.
                                    </div> -->
                                </li>
                                <li class="swiper-slide">
                                    <div class="bg bg04"></div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="bg bg05"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="main_control">
                            <div class="main_arrow">
                                <span class="main_prev"><i class="fa fa-solid fa-angle-left" aria-hidden="true"></i></span>
                                <span class="main_next"><i class="fa fa-solid fa-angle-right" aria-hidden="true"></i></span>
                            </div>
                            <div class="main_pager"></div>
                        </div>
                    </div>
                    <script>
                        var mainSwiper = new Swiper(".main_slide", {
                            loop:true,
                            effect:'fade',
                            speed:1400,
                            slideActiveClass: 'on',
                            autoplay: {
                            delay: 3200,
                            disableOnInteraction: false,
                            },
                            pagination: {
                                el: '#mainVisual .main_pager',
                                type: "fraction",
                            },
                            navigation: {
                            nextEl: '.main_control .main_next',
                            prevEl: '.main_control .main_prev',
                            },
                        });
                    </script>
                </section>
                <!-- main_banner [e] -->


                
                    <!-- inc01 [s] -->
                    <section id="section01">
                        <article id="inc01">
                            <div class="top_box">
                                <div class="box_inner">
                                    <div class="left pl"><p class="text32 text_bold color_black">안성시노인복지관은,</p>
                                        <p class="text16 text_normal">안성시노인복지관은 대한불교조계종사회복지재단의 설립이념과 사회복지 철학을 바탕으로 지역사회를 위한 자비실천을 하고 있습니다.</p>
                                        <p class="text16 text_normal">안성시노인복지관은 어르신 중심의 사회복지서비스를 제공하고, 지역사회의 자원연계를 통해 어르신들이 건강하고 행복한 노년 생활을 지원하며, 더불어 사는 풍요로운 안성시민을 위한 안성맞춤 노인복지서비스 실천에 정성을 다하겠습니다.</p>
                                        <p class="text16 text_normal">안성시노인복지관은 언제나 활기차고 즐거운 어르신이 주인공이 되는 따뜻한 지역공동체를 만들어가기 위해 세대통합 및 어르신 맞춤돌봄서비스는 물론 복지생태계 구축으로 안성맞춤 노인복지를 구현하겠습니다.</p>
                                        <div class="more"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1">복지관 소개 <i data-feather="chevron-right"></i></a></div>
                                    </div>
                                    <div class="right">
                                        <div class="ko_tit">    
                                            <!-- <p class="p"><span>민원 해결</span>을 도와드립니다.</p> -->
                                            <p class="p">무엇을 도와드릴까요?</p>
                                            여러분의 민원업무를 친절하게 해결 해 드리겠습니다.
                                        </div>
                                        <div class="call_num">
                                            <div class="call_left">
                                                <p>대표전화</p>
                                                <div class="icon"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/icon01.png" alt="아이콘"></div>
                                            </div>
                                            <div class="call_right">
                                                <p>031)674-0794~6 </p>    
                                            </div>
                                        </div>
                                        <div class="call_txt">
                                            <ul>
                                                <li>
                                                    <div class="day">월-금</div>
                                                    AM 09:00 - PM 18:00 
                                                </li>
                                                <li>
                                                    <div class="day">주말 및 공휴일</div>
                                                    휴무 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bot_box">
                                <ul>
                                    <li>
                                        <div class="img_box"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s6""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon01.png" alt="아이콘01"></a></div>
                                        <p>이용안내</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon02.png" alt="아이콘02"></a></div>
                                        <p>공지사항</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=sponsor""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon03.png" alt="아이콘03"></a></div>
                                        <p>후원신청</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=schedule""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon04.png" alt="아이콘04"></a></div>
                                        <p>이달의 행사</p>
                                    </li>
                                    <li>
                                        <div class="img_box"><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m1_s1""><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc01/bt_icon05.png" alt="아이콘05"></a></div>
                                        <p>복지관 소개</p>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </section>
                    <!-- inc01 [e] -->
                    <!-- inc02 [s] -->
                    <section id="section02">
                        <article id="inc02">
                            <div class="inner">
                                <div class="l_box">
                                    <div class="latest">
                                        <div class="tit">
                                            <p>복지관 소식</p>
                                            <ul class="late_tabs">
                                                <li class="on" rel="tab1">공지사항</li>
                                                <li rel="tab2">자료실</li>
                                                <li rel="tab3">소식지</li>
                                                <li rel="tab4">언론보도</li>
                                            </ul>
                                            <a href="" class="more"><span class="sound_only">복지관 소식</span><i data-feather="plus"></i></a>
                                        </div>
                                    </div>
                                    <div id="tabs">
                                        <div class="late_box">
                                            <?php
                                            // 최신글 출력 함수
                                            function get_latest_posts($table, $category, $limit = 6) {
                                                global $g5;
                                                $sql = "SELECT wr_id, wr_subject, wr_datetime FROM {$g5['write_prefix']}{$table} WHERE wr_is_comment = 0 ORDER BY wr_num LIMIT {$limit}";
                                                $result = sql_query($sql);
                                                
                                                if(sql_num_rows($result) > 0) {
                                                    echo '<ul class="n_lt">';
                                                    $i = 0;
                                                    while($row = sql_fetch_array($result)) {
                                                        $class = ($i == 0) ? 'first' : '';
                                                        $date = date('Y.m.d', strtotime($row['wr_datetime']));
                                                        $subject = get_text($row['wr_subject']);
                                                        
                                                        echo '<li class="'.$class.'">';
                                                        echo '<a href="'.G5_BBS_URL.'/board.php?bo_table='.$table.'&wr_id='.$row['wr_id'].'">';
                                                        if($i == 0) {
                                                            echo '<div class="lt_cont_f">';
                                                            echo '<p class="cate">'.$category.'</p>';
                                                            echo '<p class="subj">'.$subject.'</p>';
                                                            echo '<p class="pc subt">'.$subject.'</p>';
                                                            echo '<p class="semi_pc subt">'.$subject.'</p>';
                                                            echo '<span class="date">'.$date.'</span>';
                                                            echo '</div>';
                                                        } else {
                                                            echo '<div class="lt_cont">';
                                                            echo '<p class="subj">'.$subject.'</p>';
                                                            echo '<span class="date">'.$date.'</span>';
                                                            echo '</div>';
                                                        }
                                                        echo '</a>';
                                                        echo '</li>';
                                                        $i++;
                                                    }
                                                    echo '</ul>';
                                                } else {
                                                    echo '<p>등록된 '.$category.'가 없습니다.</p>';
                                                }
                                            }
                                            ?>
                                            <div id="tab1" class="late_cont">
                                                <div class="late">
                                                    <?php get_latest_posts('notice', '공지사항'); ?>
                                                </div>
                                            </div>
                                            <div id="tab2" class="late_cont">
                                                <div class="late">
                                                    <?php get_latest_posts('pds', '자료실'); ?>
                                                </div>
                                            </div>
                                            <div id="tab3" class="late_cont">
                                                <div class="late">
                                                    <?php get_latest_posts('news', '소식지'); ?>
                                                </div>
                                            </div>
                                            <div id="tab4" class="late_cont">
                                                <div class="late">
                                                    <?php get_latest_posts('bodo', '언론보도'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="r_box">
                                    <div class="tit">
                                        <p>웹진</p>  
                                        <a href="" class="more"><span class="sound_only">웹진</span><i data-feather="plus"></i></a>
                                    </div>
                                    <div class="pop_up">
                                        <div class="arrow_box">
                                            <div class="arrow_btn">
                                                <span class="prev"><i data-feather="chevron-left"></i></span>
                                                <span class="next"><i data-feather="chevron-right"></i></span>
                                            </div>
                                        </div>
                                        <div class="swiper-container pop_silder">
                                            <ul class="swiper-wrapper">
                                                <li class="swiper-slide item">
                                                    <a href="">
                                                        <div class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc02/img01.png" alt="웹진"></div>
                                                    </a>
                                                </li>
                                                <li class="swiper-slide item">
                                                    <a href="">
                                                        <div class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc02/img02.png" alt="웹진"></div>
                                                    </a>
                                                </li>
                                                <li class="swiper-slide item">
                                                    <a href="">
                                                        <div class="img"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/main/inc02/img03.png" alt="웹진"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script>
                            $(function() { 
                                $(".late_cont").hide(); $(".late_cont:first").show();
                                $(".late_tabs li").click(function() {$(".late_tabs li").removeClass("on");
                                $(this).addClass("on"); $(".late_cont").hide() 
                                var activeTab = $(this).attr("rel"); $("#"+activeTab).show()
                            }); });
                            
                            var incSwiper = new Swiper("#inc02 .pop_silder", {
                                loop: true,
                                speed:1000,
                                slidesPerView: "1.5",
                                spaceBetween : 15,
                                slideActiveClass: 'on',
                                centeredSlides: true,
                                autoplay: {
                                    delay: 3500,
                                    disableOnInteraction:false,
                                },
                                navigation: {
                                    nextEl: '#inc02 .next',
                                    prevEl: '#inc02 .prev',
                                },
                                breakpoints:{
                                    1025:{
                                        slidesPerView: "1",
                                        spaceBetween : 0,
                                        centeredSlides: true,
                                    },
                                    769:{
                                        slidesPerView: "3",
                                        spaceBetween : 20,
                                        centeredSlides: true,
                                    },
                                    481:{
                                        slidesPerView: "2",
                                        spaceBetween : 15,
                                        centeredSlides: false,
                                    }
                                }
                            });
                        </script>
                    </section>
                    <!-- inc02 [e] -->
                    <!-- inc04 [s] -->
                    <section id="section04">
                        <article id="inc04">
                            <div class="inner">
                                <div class="tit">
                                    <p>함께 하는 더 좋은 세상</p>
                                    여러분의 작은 손길이 모여 만들어지는 큰 힘, 더 나은 미래를 함께 만들어주세요.
                                </div>
                                <div class="cont_box">
                                    <div class="left box">
                                        <p>자원봉사</p>
                                        함께하면 행복한 세상을 만들 수 있습니다.<br>
                                        
                                        <div class="more">
                                            <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m4_s1">바로가기 <i data-feather="chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="right box">
                                        <p>후원안내</p>
                                        나누는 기쁨 작은 실천으로 시작됩니다.<br>
                                        
                                        <div class="more">
                                            <a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m3_s1">바로가기 <i data-feather="chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script>
                            var logoSwiper = new Swiper(".logo_slide", {
                                effect: "horizontal",
                                loop: true,
                                speed: 1000,
                                slidesPerView: 2,
                                spaceBetween: 10,
                                centeredSlides: true,
                                autoplay: {
                                    delay: 3500,
                                    disableOnInteraction: false,
                                },
                                navigation: {
                                    nextEl: '.logo_control .next',
                                    prevEl: '.logo_control .prev',
                                    },
                                pagination: {
                                    el: '.logo_control .pager',
                                    type: 'fraction',
                                    renderFraction: function (currentClass, totalClass) {
                                        return '<span>0</span>' + '<span class="' + currentClass + '"></span>' + ' <span class="slash">/</span> ' + '<span>0</span>' + '<span class="' + totalClass + '"></span>';
                                    },
                                },
                                breakpoints:{
                                    769:{
                                        slidesPerView: 5,
                                        spaceBetween: 20,
                                        centeredSlides: true,
                                    },
                                    481:{
                                        slidesPerView: 3,
                                        spaceBetween: 15,
                                        centeredSlides: true,
                                    }
                                }
                            });
                        </script>
                    </section>
                    <!-- inc04 [e] -->
                </section> 
                <!-- sh_section [e] -->
            </div>
            <!-- sh_container_wrapper [e] --> 
        </main>
        <!-- sh_container [e] -->


    </div>


<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>