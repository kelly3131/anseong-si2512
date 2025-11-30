<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/jquery.fancylist.js"></script>

<?php // 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
    echo '<div class="bo_top_img">';
    // 모바일의 경우 설정을 따르지 않는다.
    echo html_purifier(stripslashes($board['bo_mobile_content_head']));
     echo '</div>';

} 
function get_custom_list_thumbnail_src($bo_table, $wr_id, $original_filename)
{
    global $g5;

    if (!$original_filename || !$bo_table || !$wr_id) {
        return '';
    }

    // 1. 파일 경로 및 이름 설정
    $data_path = G5_DATA_PATH . '/file/' . $bo_table; // 썸네일이 저장된 디렉토리 (DATA_PATH/file/bo_table)
    $data_url = G5_DATA_URL . '/file/' . $bo_table;  // 웹 접근 URL 경로
    
    // 확장자를 제외한 파일명
    $thumb_filename_base = preg_replace("/\.[^\.]+$/i", "", $original_filename); 
    // 원본 파일의 확장자
    $file_ext = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

    if (!$file_ext) {
        return '';
    }

    // 2. 검색할 썸네일 파일 목록 정의 (파일이 없으면 생성하지 않고, 존재하는 파일만 찾음)
    // 이 로직은 thumb2_를 thumb_보다 우선하여 찾습니다.
    $possible_thumb_files = array(
        // thumb2_ 형식 (원본 파일명 기반)
        "thumb2_{$thumb_filename_base}.{$file_ext}",
        // thumb_ 형식 (원본 파일명 기반)
        "thumb_{$thumb_filename_base}.{$file_ext}",
    );

    $found_tname = ''; // 찾은 썸네일 파일명

    foreach ($possible_thumb_files as $tname_full) {
        $thumb_file_path = "{$data_path}/{$tname_full}";
        
        if (is_file($thumb_file_path)) {
            $found_tname = $tname_full;
            break;
        }
    }

    // 3. 결과 반환
    if ($found_tname) {
        // 찾은 파일명의 URL 경로를 반환
        return "{$data_url}/{$found_tname}";
    }
    
    // 파일이 없으면 빈 문자열 반환
    return '';
}
function get_attached_file_name($bo_table, $wr_id)
{
    global $g5; // 그누보드 전역 변수 접근

    // 1. 게시판 정보 가져오기
    // get_board_info 함수가 없거나 전역 변수를 쓰지 않는 경우 필요에 따라 $board = get_board_info($bo_table); 로 대체 가능
    $board_table = $g5['write_prefix'] . $bo_table;

    // 2. 게시글 정보 가져오기 (게시글 제목, 내용 등을 포함)
    // 이 함수는 'wr_id'가 있는지 확인하는 역할도 겸합니다.
    $write = get_write($board_table, $wr_id);

    if (empty($write['wr_id'])) {
        // 게시글이 존재하지 않으면 빈 값 반환
        return '';
    }

    // 3. 첨부 파일 정보 확인
    // 첨부 파일은 g5_board_file 테이블에 저장되므로 해당 테이블에서 조회합니다.
    // 첫 번째 첨부 파일 (bf_no=0)만 가져옵니다.

    $sql = " SELECT bf_file
             FROM {$g5['board_file_table']}
             WHERE bo_table = '{$bo_table}'
               AND wr_id = '{$wr_id}'
               AND bf_no = 0
             ORDER BY bf_no
             LIMIT 1 ";

    $row = sql_fetch($sql);

    if (isset($row['bf_file']) && $row['bf_file']) {
        // 첨부 파일명이 존재하면 반환
        return $row['bf_file'];
    }

    // 첨부 파일이 없으면 빈 값 반환
    return '';
}
?>

<div id="bo_list_total" class="pc_view">
    <span>전체 <?php echo number_format($total_count) ?>건</span>
    <?php echo $page ?> 페이지
</div>

<div id="nav">
    <div class="nav_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> HOME</a> &gt; <?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']); ?> </div>
</div>

<?php if ($is_category) { ?>
<nav id="bo_cate">
    <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
    <ul id="bo_cate_ul">
        <?php echo $category_option ?>
    </ul>
</nav>
<?php } ?>

<div id="bo_gallery">
    
    <fieldset id="bo_sch">
        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <label for="sfl" class="sound_only">검색대상</label>
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
            <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
            <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
            <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
        </select>
        <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="sch_input" size="15" maxlength="20">
        <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i> <span class="sound_only">검색</span></button>
        </form>
    </fieldset>


    <form name="fboardlist"  id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <h2 class="sound_only">이미지 목록</h2>

    <?php if ($is_checkbox) { ?>
    <div class="all_chk">
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
        <label for="chkall"><span class="chk_img"></span> 전체선택</label>
    </div>
    <?php } ?>

    <ul id="gall_ul">
        <?php for ($i=0; $i<count($list); $i++) {
        ?>
        <li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>">
            <!-- 왼쪽 이미지 영역 -->
            <a href="<?php echo $list[$i]['href'] ?>" class="gall_img">
            <?php
            if ($list[$i]['is_notice']) { // 공지사항 ?>
                <strong>공지</strong>
            <?php
            } else {
                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], 300, 200);

                if (empty($thumb['src'])) {
                    // 1. 첨부파일 원본명을 가져옴
                    $original_file = get_attached_file_name($board['bo_table'], $list[$i]['wr_id']);
                    
                    // 2. 커스텀 함수로 썸네일 경로를 다시 확인
                    $custom_src = get_custom_list_thumbnail_src($board['bo_table'], $list[$i]['wr_id'], $original_file);
                    
                    if ($custom_src) {
                        $thumb['src'] = $custom_src;
                        $thumb['alt'] = $original_file;
                    }
                }
                if($thumb['src']) {
                    $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'">';
                } else {
                    $img_content = '<img src="'.G5_THEME_IMG_URL.'/noimage.png" alt="이미지 없음">';
                }

                echo $img_content;
            }
            ?>
            </a>
            
            <!-- 오른쪽 콘텐츠 영역 -->
            <div class="gall_txt">
                <!-- 카테고리 -->
                <?php if ($is_category && $list[$i]['ca_name']) { ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                
                <!-- 체크박스 -->
                <?php if ($is_checkbox) { ?>
                <span class="sel bo_chk li_chk">
                    <label for="chk_wr_id_<?php echo $i ?>"><span class="chk_img"></span> <span class="sound_only"><?php echo $list[$i]['subject'] ?></span></label>
                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
                </span>
                <?php } ?>

                <!-- 제목 -->
                <h3 class="gall_li_tit">
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret']; ?>
                        <?php echo $list[$i]['subject'] ?>
                        <?php if ($list[$i]['comment_cnt']) { ?><span class="comment_cnt">[<?php echo $list[$i]['comment_cnt']; ?>]</span><?php } ?>
                    </a>
                </h3>
                
                <!-- 게시글 내용 미리보기 -->
                <?php 
                //$content_preview = strip_tags($list[$i]['wr_content']);
                //$content_preview = mb_substr($content_preview, 0, 100, 'utf-8');

                $content = $list[$i]['wr_content'];

                // <p>...</p> 단위로 분리 (태그 포함)
                preg_match_all('/<p[^>]*>(.*?)<\/p>/is', $content, $matches);

                // 앞에서 4개까지만 사용
                $paragraphs = array_slice($matches[1], 0, 4);

                // 줄바꿈 <br> 붙이기
                $content_preview = '';
                foreach ($paragraphs as $p) {
                    // 앞뒤 공백 제거 후 <br> 추가
                    $content_preview .= trim($p) . "<br>";
                }

                ?>
                <?php if ($content_preview) { ?>
                <div class="gall_content_preview">
                    <?php echo $content_preview; ?>
                </div>
                <?php } ?>
                
                <!-- 아이콘들 -->
                <div class="gall_icons">
                    <?php
                    if (isset($list[$i]['icon_new'])) echo '<span class="new_icon">N</span>';
                    if (isset($list[$i]['icon_hot'])) echo '<span class="hot_icon">H</span>';
                    if (isset($list[$i]['icon_file'])) echo '<i class="fa fa-download"></i>';
                    if (isset($list[$i]['icon_link'])) echo '<i class="fa fa-link"></i>';
                    ?>
                </div>
                
                <!-- 게시글 정보 -->
                <div class="gall_info">
                    <div class="user_info">
                        <span class="sv_member"><?php echo $list[$i]['name'] ?></span>
                    </div>
                    <div class="meta_info">
                        <span class="date"><i class="fa fa-clock-o"></i> <?php echo $list[$i]['datetime2'] ?></span>
                        <span class="hit"><i class="fa fa-eye"></i> <?php echo number_format($list[$i]['wr_hit']) ?></span>
                        <?php if ($is_good && $list[$i]['wr_good']) { ?>
                        <span class="good"><i class="fa fa-thumbs-o-up"></i> <?php echo number_format($list[$i]['wr_good']) ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <div class="btn_bo_adm">
            <?php if ($list_href) { ?>
            <a href="<?php echo $list_href ?>" class="btn btn_b01"><i class="fa fa-list"></i> 목록</a>
            <?php } ?>
            <?php if ($is_checkbox) { ?>
            <button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_b01"><i class="fa fa-trash"></i> 선택삭제</button>
            <button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn_b01"><i class="fa fa-copy"></i> 선택복사</button>
            <button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn_b01"><i class="fa fa-arrows"></i> 선택이동</button>
            <?php } ?>
        </div>
        <?php if ($rss_href || $write_href || $admin_href) { ?>
        <div class="btn_wr">
            <?php if ($rss_href) { ?><a href="<?php echo $rss_href ?>" class="btn btn_b01"><i class="fa fa-rss"></i> RSS</a><?php } ?>
            <?php if ($admin_href) { ?><a href="<?php echo $admin_href ?>" class="btn btn_admin" target="_blank"><i class="fa fa-cog"></i> 관리</a><?php } ?>
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn btn_b02"><i class="fa fa-pencil"></i> 글쓰기</a><?php } ?>
        </div>
        <?php } ?>
    </div>
    <?php } ?>

    </form>
</div>


<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지네이션 -->
<div class="pagination_wrap">
    <?php echo $write_pages; ?>
</div>


<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->

<script>
// 갤러리 향상된 기능
$(document).ready(function() {
    // 이미지 로딩 에러 처리
    $('#gall_ul img').on('error', function() {
        $(this).attr('src', '<?php echo G5_THEME_IMG_URL ?>/noimage.png');
        $(this).addClass('no-image');
    });
    
    // 이미지 레이지 로딩
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.remove('loading');
                    observer.unobserve(img);
                }
            });
        });
        
        $('#gall_ul img').each(function() {
            imageObserver.observe(this);
        });
    }
    
    // 부드러운 스크롤 효과
    $('a[href*="#"]').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 500);
        }
    });
    
    // 검색 입력 개선
    $('#stx').on('focus', function() {
        $(this).parent().addClass('focused');
    }).on('blur', function() {
        $(this).parent().removeClass('focused');
    });
    
    // 전체선택 개선
    $('#chkall').on('change', function() {
        const isChecked = $(this).prop('checked');
        $('input[name="chk_wr_id[]"]').prop('checked', isChecked);
        updateSelectedCount();
    });
    
    $('input[name="chk_wr_id[]"]').on('change', function() {
        updateSelectedCount();
        updateSelectAllState();
    });
    
    function updateSelectedCount() {
        const selectedCount = $('input[name="chk_wr_id[]"]:checked').length;
        const totalCount = $('input[name="chk_wr_id[]"]').length;
        
        if (selectedCount > 0) {
            $('.all_chk label').html(`<span class="chk_img"></span> ${selectedCount}개 선택됨`);
        } else {
            $('.all_chk label').html('<span class="chk_img"></span> 전체선택');
        }
    }
    
    function updateSelectAllState() {
        const totalCheckboxes = $('input[name="chk_wr_id[]"]').length;
        const checkedCheckboxes = $('input[name="chk_wr_id[]"]:checked').length;
        
        $('#chkall').prop('indeterminate', checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes);
        $('#chkall').prop('checked', checkedCheckboxes === totalCheckboxes && totalCheckboxes > 0);
    }
    
    // 키보드 네비게이션
    $(document).on('keydown', function(e) {
        if (e.ctrlKey || e.metaKey) {
            switch(e.keyCode) {
                case 65: // Ctrl+A
                    if ($('#chkall').length) {
                        e.preventDefault();
                        $('#chkall').prop('checked', true).trigger('change');
                    }
                    break;
                case 70: // Ctrl+F
                    e.preventDefault();
                    $('#stx').focus();
                    break;
            }
        }
    });
    
    // 반응형 테이블 개선
    function handleResize() {
        const width = $(window).width();
        if (width <= 639) {
            $('body').addClass('mobile-view');
        } else {
            $('body').removeClass('mobile-view');
        }
    }
    
    $(window).on('resize', handleResize);
    handleResize();
});

// 선택 삭제 확인 개선
function confirmDelete() {
    const selectedCount = $('input[name="chk_wr_id[]"]:checked').length;
    if (selectedCount === 0) {
        alert('삭제할 게시글을 선택해주세요.');
        return false;
    }
    
    return confirm(`선택한 ${selectedCount}개의 게시글을 정말 삭제하시겠습니까?\n\n※ 한번 삭제한 자료는 복구할 수 없습니다.`);
}

// 토스트 메시지 함수
function showToast(message, type = 'info') {
    const toast = $(`
        <div class="toast toast-${type}">
            <div class="toast-content">
                <i class="fa fa-${type === 'success' ? 'check' : type === 'error' ? 'exclamation' : 'info'}"></i>
                <span>${message}</span>
            </div>
        </div>
    `);
    
    $('body').append(toast);
    
    setTimeout(() => {
        toast.addClass('show');
    }, 100);
    
    setTimeout(() => {
        toast.removeClass('show');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}
</script>

<!-- 토스트 메시지 CSS -->
<style>
.toast {
    position: fixed;
    top: 20px;
    right: 20px;
    background: var(--white);
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
    padding: 15px 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    z-index: 9999;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    max-width: 300px;
}

.toast.show {
    transform: translateX(0);
}

.toast-content {
    display: flex;
    align-items: center;
    gap: 10px;
}

.toast-success {
    border-left: 4px solid #28a745;
}

.toast-error {
    border-left: 4px solid #dc3545;
}

.toast-info {
    border-left: 4px solid #17a2b8;
}

.toast i {
    font-size: 16px;
}

.toast-success i { color: #28a745; }
.toast-error i { color: #dc3545; }
.toast-info i { color: #17a2b8; }

@media (max-width: 639px) {
    .toast {
        right: 10px;
        left: 10px;
        max-width: none;
        transform: translateY(-100px);
    }
    
    .toast.show {
        transform: translateY(0);
    }
}
</style>
