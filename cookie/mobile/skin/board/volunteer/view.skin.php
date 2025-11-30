<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<?php // 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
    echo '<div class="bo_top_img">';
    // 모바일의 경우 설정을 따르지 않는다.
    echo html_purifier(stripslashes($board['bo_mobile_content_head']));
    echo '</div>';
}
?>

<!-- <div id="nav">
    <div class="nav_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; <?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']); ?> </div>
</div> -->
<div class="container clearfix">
    <div class="inner">
        <? include_once(G5_PATH . '/skin/nav/mysubmenu.php'); ?>
        <article id="bo_v">
            <header>
                <h2 id="bo_v_title" style="border-bottom: 1px solid #222">
                    <?php if ($category_name) { ?>
                        <span class="bo_v_cate"><?php echo $view['ca_name']; // 분류 출력 끝 
                                                ?></span>
                    <?php } ?>
                    <span class="bo_v_tit">
                        <?php
                        echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                        ?></span>
                </h2>

            </header>

            <section id="bo_v_info">
                <h2>페이지 정보</h2>
                <!--
                <span class="sound_only">작성자 </span><?php echo $view['name'] ?><span class="ip"><?php if ($is_ip_view) {
                                                                                                    echo "&nbsp;($ip)";
                                                                                                } ?></span>
                -->
                <span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
                <!--
                <span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
                <span class="sound_only">댓글</span><strong><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</strong>
                -->
            </section>

            <section id="bo_v_atc">
                <h2 id="bo_v_atc_title">본문</h2>

                <?php
                // 파일 출력
                $v_img_count = count($view['file']);
                if ($v_img_count) {
                    echo "<div id=\"bo_v_img\">\n";
                    for ($i = 0; $i <= count($view['file']); $i++) {
                        if ($view['file'][$i]['view']) {
                            //echo $view['file'][$i]['view'];
                            echo get_view_thumbnail($view['file'][$i]['view']);
                        }
                    }

                    echo "</div>\n";
                }
                ?>
                <!-- 신청 내용 -->
                <div class="step-body clearfix">
                    <div class="row">
                        <div class="col w25"><span>성명</span></div>
                        <div class="col w75">
                            <label for="wr_name" class="sound_only">성명<strong>필수</strong></label>
                            <input type="text" name="wr_name" value="<?php echo $view['wr_name'] ?>" id="wr_name" class="frm_input full_input" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>생년월일(사업자등록번호)</span></div>
                        <div class="col w75">
                            <input type="text" name="wr_1" id="wr_1"
                                class="frm_input full_input" value="<? echo $view['wr_1'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>이메일</span></div>
                        <div class="col w75">
                            <label for="wr_email" class="sound_only">이메일</label>
                            <input type="email" name="wr_email" value="<?php echo $view['wr_email'] ?>" id="wr_email"
                                class="frm_input full_input  email" maxlength="100" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>주소</span></div>
                        <div class="col w75">
                            <label for="place" class="sound_only">주소</label>
                            <input type="text" name="place" id="place" class="frm_input full_input"
                                maxlength="255" readonly>
                            <input type="text" name="etc" id="etc" class="frm_input full_input"
                                maxlength="255" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>자택전화</span></div>
                        <div class="col w75">
                            <label for="wr_link1" class="sound_only">자택전화</label>
                            <input type="text" name="wr_link1" id="wr_link1" value="<? echo $view['wr_link1'] ?>" class="frm_input full_input" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>휴대폰</span></div>
                        <div class="col w75">
                            <input type="text" name="wr_link2" id="wr_link2" value="<? echo $view['wr_link2'] ?>" class="frm_input full_input" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>최종학력</span></div>
                        <div class="col w75">
                            <label for="wr_2" class="sound_only">최종학력</label>
                            <input type="text" name="wr_2" value="<?php echo $view['wr_2'] ?>" id="wr_2" class="frm_input full_input" maxlength="50" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w25"><span>직업</span></div>
                        <div class="col w75">
                            <input type="text" name="wr_3" id="wr_3" value="<? echo $view['wr_3'] ?>" class="frm_input full_input" readonly>
                        </div>
                    </div>
                </div>
                <!--
                <?php if ($is_password) { ?>
                        <div class="row">
                    <div class="col w25"><span>비밀번호</span></div>
                    <div class="col w75">
                    <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
                    <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input full_input <?php echo $password_required ?>" maxlength="20" placeholder="비밀번호"> 
                    </div>
                </div>
                <?php } ?>
                -->


                <div class="row">
                    <div class="col w25"><span>참여동기</span></div>
                    <div class="col w75">
                        <label><input type="radio" name="wr_4" id="wr_40" value="<?php $view['wr_4'] ?>" class="frm_input" readonly>
                    </div>

                    <div class="row" style="padding: 10px 0;">
                        <div class="col w25"><span>희망분야</span></div>
                        <div class="col w75">
                            <div class="row" style="padding-bottom: 10px;">
                                <input type="text" id="wr_5" name="wr_5" value="<?php $view['wr_5'] ?>" readonly>
                                (<input type="text" id="wr_6" name="wr_6" value="<?php $view['wr_6'] ?>" style="width: 100px;" readonly>)
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col w25"><span>활동시간</span></div>
                        <div class="col w75">
                            <label for="wr_9" class="sound_only">활동시간<strong>필수</strong></label>
                            <input type="text" id="wr_7" name="wr_7" value="<?php $view['wr_7'] ?>" readonly>
                        </div>
                        <div class="col w75">
                            <label for="wr_8" class="sound_only">활동시간<strong>필수</strong></label>
                            <input type="text" id="wr_8" name="wr_8" value="<?php $view['wr_8'] ?>" readonly>
                        </div>
                        <div class="col w75">
                            <label for="wr_9" class="sound_only">봉사시간<strong>필수</strong></label>
                            <input type="text" name="wr_9" value="<?php echo $view['wr_9'] ?>" id="wr_9" class="frm_input full_input required" readonly>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col w25"><span>메모</span></div>
                        <div class="col w75">
                            <label for="wr_content" class="sound_only">메모<strong>필수</strong></label>
                            <? $w = explode('|', $view['content']);  ?>
                            <div id="bo_v_con" name="content"><textarea class="frm_input full_input" style="height:200px" readonly><? echo $w[0] ?></textarea></div>
                        </div>
                    </div>
                </div>
    </div> <!-- 신청서 끝 -->
    <!-- 신청내용 끝 -->

    <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>



    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i = 0; $i < count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
    ?>

    <?php if ($cnt) { ?>

        <section id="bo_v_file">
            <h2>첨부파일</h2>
            <ul>
                <?php
                // 가변 파일
                for ($i = 0; $i < count($view['file']); $i++) {
                    if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
                ?>
                        <li>
                            <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                <strong><?php echo $view['file'][$i]['source'] ?></strong>
                                <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                            </a>
                            <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span> |
                            <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
        </section>
    <?php } ?>

    <?php if (isset($view['link'][1]) && $view['link'][1]) { ?>
        <!-- 관련링크 시작 { -->
        <section id="bo_v_link">
            <h2>관련링크</h2>
            <ul>
                <?php
                // 링크
                $cnt = 0;
                for ($i = 1; $i <= count($view['link']); $i++) {
                    if ($view['link'][$i]) {
                        $cnt++;
                        $link = cut_str($view['link'][$i], 70);
                ?>
                        <li>
                            <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                                <i class="fa fa-link" aria-hidden="true"></i>
                                <strong><?php echo $link ?></strong>
                            </a>
                            <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
        </section>
        <!-- } 관련링크 끝 -->
    <?php } ?>

    <!--
                <div id="bo_v_share">
                    <?php
                    include_once(G5_SNS_PATH . "/view.sns.skin.php");
                    ?>
                    <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn_b01 btn_scrap" onclick="win_scrap(this.href); return false;">스크랩</a><?php } ?>
                </div>
                -->

    <?php if ($good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
                <span class="bo_v_act_gng">
                    <a href="<?php echo $good_href . '&amp;' . $qstr ?>" id="good_button" class="bo_v_good btn btn_b01"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                    <b id="bo_v_act_good">이 글을 추천하셨습니다</b>
                </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
                <span class="bo_v_act_gng">
                    <a href="<?php echo $nogood_href . '&amp;' . $qstr ?>" id="nogood_button" class="bo_v_nogood btn btn_b01"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                    <b id="bo_v_act_nogood"></b>
                </span>
            <?php } ?>
        </div>
        <?php } else {
        if ($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
            <div id="bo_v_act">
                <?php if ($board['bo_use_good']) { ?><span class="bo_v_good btn btn_b01"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
                <?php if ($board['bo_use_nogood']) { ?><span class="bo_v_nogood btn btn_b01"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sound_only">비추천</span> <strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
            </div>
    <?php
        }
    }
    ?>
    <div id="bo_v_top">
        <ul class="bo_v_left">
            <?php if ($is_admin) { ?>
                <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"> 삭제</a></li><?php } ?>
            <?php } ?>
            <!--
                        <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01 btn">수정</a></li><?php } ?>
                        <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"> 삭제</a></li><?php } ?>
                        <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_b01 btn" onclick="board_move(this.href); return false;"> 복사</a></li><?php } ?>
                        <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_b01 btn" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
                        <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01 btn">검색</a></li><?php } ?>
                        -->
        </ul>
        <div class="bo_v_right">
            <?php if ($is_admin) { ?>
                <a href="<?php echo $list_href ?>" class="btn_b01 btn">신청목록</a>
            <?php } ?>
            <!--
                        <?php if ($reply_href) { ?><a href="<?php echo $reply_href ?>" class="btn_b01 btn">답변</a><?php } ?>
                        -->
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02 btn">자원봉사안내</a><?php } ?>

        </div>
    </div>
    </section>
    <?php
    // 코멘트 입출력
    //include_once(G5_BBS_PATH.'/view_comment.php');
    ?>

    </article>
</div>
</div>
<script>
    $('input:radio[name=wr_7]:input[value="<? echo $view['wr_7'] ?>"]').attr("checked", true);
    $('input:radio[name=wr_8]:input[value="<? echo $view['wr_8'] ?>"]').attr("checked", true);
    $('input:radio[name=wr_11]:input[value="<? echo $w[1] ?>"]').attr("checked", true);

    <?php if ($board['bo_download_point'] < 0) { ?>
        $(function() {
            $("a.view_file_download").click(function() {
                if (!g5_is_member) {
                    alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
                    return false;
                }

                var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

                if (confirm(msg)) {
                    var href = $(this).attr("href") + "&js=on";
                    $(this).attr("href", href);

                    return true;
                } else {
                    return false;
                }
            });
        });
    <?php } ?>

    function board_move(href) {
        window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
    }
</script>

<!-- 게시글 보기 끝 -->

<script>
    $(function() {
        $("a.view_image").click(function() {
            window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
            return false;
        });

        // 추천, 비추천
        $("#good_button, #nogood_button").click(function() {
            var $tx;
            if (this.id == "good_button")
                $tx = $("#bo_v_act_good");
            else
                $tx = $("#bo_v_act_nogood");

            excute_good(this.href, $(this), $tx);
            return false;
        });

        // 이미지 리사이즈
        $("#bo_v_atc").viewimageresize();
    });

    function excute_good(href, $el, $tx) {
        $.post(
            href, {
                js: "on"
            },
            function(data) {
                if (data.error) {
                    alert(data.error);
                    return false;
                }

                if (data.count) {
                    $el.find("strong").text(number_format(String(data.count)));
                    if ($tx.attr("id").search("nogood") > -1) {
                        $tx.text("이 글을 비추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    } else {
                        $tx.text("이 글을 추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    }
                }
            }, "json"
        );
    }
</script>