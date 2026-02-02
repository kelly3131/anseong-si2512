<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<?php // 게시판 관리의 상단 내용
if ($board['bo_content_head'] || $board['bo_mobile_content_head']) {
    echo '<div class="bo_top_img">';
    // 반응형: PC와 모바일 모두 지원
    if (G5_IS_MOBILE && $board['bo_mobile_content_head']) {
        echo html_purifier(stripslashes($board['bo_mobile_content_head']));
    } else if ($board['bo_content_head']) {
        echo html_purifier(stripslashes($board['bo_content_head']));
    }
    echo '</div>';
}
?>

<!-- <nav id="nav">
    <div class="nav_wr">
        <a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; 
        <?php echo $board['bo_subject']; ?>
    </div>
</nav> -->

<div class="inner container">
  <article id="bo_v" class="bo_v_<?php echo $bo_table; ?>">
    <header>
        <h1><?php echo $board['bo_subject']; ?></h1>
        <h2 id="bo_v_title">
            <?php if ($category_name) { ?>
            <span class="bo_v_cate"><?php echo $view['ca_name']; ?></span> 
            <?php } ?>
            <span class="bo_v_tit">후원 신청</span>
        </h2>
    </header>

     <section id="bo_v_info">
        <h2>페이지 정보</h2>
        <span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
        <!--
        <span class="sound_only">작성자 </span><?php echo $view['name'] ?><span class="ip"><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></span>
        <span class="sound_only">작성일</span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?>
        <span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?>회</strong>
        <span class="sound_only">댓글</span><strong><i class="fa fa-commenting-o" aria-hidden="true"></i> <?php echo number_format($view['wr_comment']) ?>건</strong>
        -->
    </section>   

    <section id="bo_v_atc">
      <h2 id="bo_v_atc_title">본문</h2>
      <div id="bo_v_con">
        <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

        <?php if ($is_category) { ?>
        <div class="bo_w_select write_div">
          <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
          <select id="ca_name" name="ca_name" required>
            <option value="">선택하세요</option>
            <?php echo $category_option ?>
          </select>
        </div>
        <?php } ?>
        <h3 class="content-title ">후원자 정보</h3>
        <div class="step-body clearfix">
          <?php // if ($is_name) { ?>
          <div class="row">
            <div class="col w25"><span>성명</span></div>
            <div class="col w75">
              <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
              <input type="text" name="wr_name" value="<?php echo $view['wr_name'] ?>" id="wr_name" required
                class="frm_input full_input required" maxlength="20" placeholder="이름" readonly>
            </div>
          </div>
          <?php //} ?>

          <div class="row">
            <div class="col w25"><span>생년월일</span></div>
            <div class="col w75">
              <input type="text" name="wr_1" id="wr_1" required
                class="frm_input full_input required" maxlength="14" value="<? echo $view['wr_1'] ?>" readonly>
            </div>
          </div>
          <!--div class="row">
            <div class="col w25"><span>이메일</span></div>
            <div class="col w75">
              <label for="wr_email" class="sound_only">이메일</label>
              <input type="email" name="wr_email" value="<?php echo $view['wr_email'] ?>" id="wr_email"
                class="frm_input full_input  email" maxlength="100" placeholder="이메일" readonly>
            </div>
          </div-->
          <div class="row">
            <div class="col w25"><span>주소</span></div>
            <div class="col w75">
              <label for="place" class="sound_only">주소</label>
              <input type="text" name="place"  id="place" class="frm_input full_input"
                maxlength="255"  readonly>
              <input type="text" name="etc"  id="etc" class="frm_input full_input"
                maxlength="255"  readonly>
            </div>
          </div>  
          <!--div class="row">
            <div class="col w25"><span>자택전화</span></div>
            <div class="col w75">
              <label for="wr_link1" class="sound_only">자택전화</label>    
              <input type="text" name="wr_link1"  id="wr_link1" value="<? echo $view['wr_link1'] ?>" class="frm_input full_input  required" maxlength="14" readonly>
            </div>
          </div-->
          <div class="row">
            <div class="col w25"><span>휴대폰</span></div>
            <div class="col w75">    
              <input type="text" name="wr_link2"  id="wr_link2" value="<? echo $view['wr_link2'] ?>" class="frm_input full_input  required" maxlength="14" readonly>
            </div>
          </div>
          <!--div class="row">
            <div class="col w25"><span>직업</span></div>
            <div class="col w75">    
              <input type="text" name="wr_2"  id="wr_2" value="<? echo $view['wr_2'] ?>" class="frm_input full_input  required" maxlength="14" readonly>
            </div>
          </div>
        </div-->
        <h3 class="content-title ">후원 정보</h3>
        <div class="step-body clearfix">
          <!-- 후원형태 -->
          <div class="row" style="padding: 10px 0;">
            <div class="col w25"><span>후원형태</span></div>
            <div class="bo_w_select col w75">
              <label><input type="text" name="wr_3" id="wr_3" class="frm_input " value="<? echo $view['wr_3'] ?>" readonly></label>
            </div>
          </div>
          <!-- 희망기간 -->
          <!--div class="row" style="padding: 10px 0;">
            <div class="col w25"><span>희망기간</span></div>
            <div class="bo_w_select col w75">
              <label><input type="text" name="wr_4" id="wr_4" class="frm_input " value="<? echo $view['wr_4'] ?>" readonly></label>
            </div>
          </div-->
          <!-- 후원분류 -->
          <div class="row" style="padding: 10px 0;">
            <div class="col w25"><span>후원분류</span></div>
            <div class="bo_w_select col w75">
              <label><input type="text" name="wr_5" id="wr_5" class="frm_input " value="<? echo $view['wr_5'] ?>" readonly></label>
            </div>
          </div>
          <div class="row" style="padding: 10px 0;">
            <div class="col w25"><span>후원금액</span></div>
            <?php if($view['wr_6'] == '기타') { ?>
              <label><input type="text" name="wr_7" id="wr_7" class="frm_input " value="<? echo number_format($view['wr_7']) ?>" readonly>원</label>
            <?php } else { ?>
              <label><input type="text" name="wr_5" id="wr_6" class="frm_input " value="<? echo $view['wr_6'] ?>" readonly></label>
            <?php } ?>
          </div>
          <div class="row" style="padding: 10px 0;">
            <div class="col w25"><span>납부방법</span></div>
            <div class="bo_w_select col w75">
              <label><input type="text" name="wr_8" id="wr_8" class="frm_input " value="<? echo $view['wr_8'] ?>" readonly></label>
            </div>
          </div>
          </div>
          <?php if($view['wr_8'] == '자동이체') { ?>
            <div class="check-spon">
              <div class="row">
                <div class="col w25"><span>납부은행</span></div>
                <div class="col w75">
                  <input type="text" id="wr_9" name="wr_9" placeholder="은행명" value="<? echo $view['wr_9'] ?>">
                </div>
                </div>
                <div class="row">
                  <div class="col w25"><span>계좌번호</span></div>
                  <div class="col w75"><input type="text" id="wr_10" name="wr_10" placeholder="계좌번호" value="<? echo $view['wr_10'] ?>">
                </div>
              </div>
            </div>
          <?php } ?>
          <!--div class="row">
            <div class="col w25"><span>메모</span></div>
            <div class="col w75">
              <?php echo get_view_thumbnail($view['content']); ?>
            </div>
          </div-->

          <div class="bo_w_tit write_div" style="display:none">
            <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
            <input type="text" name="wr_subject" value="후원신청" id="wr_subject" required class="frm_input full_input required"
              placeholder="제목">
          </div>

     
        <div class="step-body clearfix">
          
          <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
          <div class="bo_w_flie write_div" style="display:none">
            <div class="file_wr write_div">
              <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span
                  class="sound_only">파일 #<?php echo $i+1 ?></span></label>
              <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>"
                title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
            </div>
            <?php if ($is_file_content) { ?>
            <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>"
              title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
            <?php } ?>

            <?php if($w == 'u' && $file[$i]['file']) { ?>
            <span class="file_del">
              <input type="radio" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label
                for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일
                삭제</label>
            </span>
            <?php } ?>

        
          <?php } ?>

        <!--  신청서 작성 내용 끝 -->
        <?php
        if ($view['file']['count']) {
            $cnt = 0;
            for ($i=0; $i<count($view['file']); $i++) {
                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                    $cnt++;
            }
        }
         ?>

        <?php if($cnt) { ?>
          <section id="bo_v_file">
              <h2>첨부파일</h2>
              <ul>
              <?php
              // 가변 파일
              for ($i=0; $i<count($view['file']); $i++) {
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

        
        <?php if ( $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button"  class="bo_v_good btn btn_b01"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good">이 글을 추천하셨습니다</b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood btn btn_b01"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span class="bo_v_good btn btn_b01"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood btn btn_b01"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span class="sound_only">비추천</span> <strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <div id="bo_v_top">
          <ul class="bo_v_left">
              <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01 btn" onclick="del(this.href); return false;"> 삭제</a></li><?php } ?>
          </ul>
          <div class="bo_v_right"> 
              <? if($is_admin) { ?>
              <a href="<?php echo $list_href ?>" class="btn_b01 btn">후원신청목록</a>
              <? } ?>
              <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02 btn">후원신청안내</a><?php } ?>
    
          </div>
        </div>
      </section>
  </article>
</div>

<script>
var ad_info = "<? echo $view['place'] ?>".split('|');
if (ad_info.length === 4) {
  document.getElementById('place').value = ad_info[0] + " " + ad_info[1] + " " + ad_info[2];
  document.getElementById('etc').value = ad_info[3];
}

$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});

function board_move(href)
{
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
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
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