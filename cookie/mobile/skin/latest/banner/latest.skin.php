<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
global $is_admin; 
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);

$thumb_width = 300;
$thumb_height = 200;
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->



<script>
$('.lt_bn ul').show().bxSlider({

    pagerCustom: '#bx_pager',
    controls:false,
    auto:true,
    pause: 8000,
    speed: 800,

     onSliderLoad: function () {
        $('.lt_bn .bn_txt').eq(1).addClass('active-slide');
        $(".bn_txt.active-slide").addClass("test");
    },
    onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
        //console.log(currentSlideHtmlObject);
        $('.active-slide').removeClass('active-slide');
        $('.lt_bn .bn_txt').eq(currentSlideHtmlObject + 1).addClass('active-slide');
        $(".bn_txt.active-slide").addClass("test");

    },
    onSlideBefore: function () {
        $(".bn_txt.active-slide").removeClass("test");
        $(".one.bn_txt.active-slide").removeAttr('style');

    }
});

 function parallax(){
    var scrolled = $(window).scrollTop();
    $('.lt_bn ul li').css('background-position',"0 "+  (scrolled * 1 ) + 'px');
}
$(window).scroll(function(){
    parallax();
});


jQuery(document).ready(function($) {
    $(".btn_bottom").on("click", function() {           
        var position=$('#index').offset(); // 위치값
        $('html,body').animate({scrollTop:position.top},400); // 이동
    });
});
</script>

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->