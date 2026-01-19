<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<footer>
        <div class="ft_inner">
            <div class="ft_logo pd_x40"><a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/mobile/logo.png" alt=""></a></div>
            <div class="link_select_wrap">    
                <ul class="ft_policy">
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m0_s1">개인정보보호정책</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m0_s2">개인정보취급방침</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/content.php?co_id=m0_s3">이메일추출방지정책</a></li>
                </ul>
                <select class="ft_select" onchange="if(this.value) window.open(this.value);">
                    <option value="">관련사이트</option>
                    <option value="http://www.jabinanum.or.kr/jabinanum">대한불교조계종사회복지재단</option>
                    <option value="https://ggwf.gg.go.kr/">경기복지재단</option>
                    <option value="https://www.anseong.go.kr/intro.jsp">안성시청</option>
                </select>
            </div>
            <div class="ft_adress">
                주소 : 경기도 안성시 장기로 109 (낙원동 68-24) | 대표 : 김도윤(가섭) <br/>
                사업자등록번호 : 246-82-00349 <br/>
                대표번호 : (031)674-0794~6 | 팩스 : (031) 674-0797 <br/>
                이메일 : hlog_a02453@naver.com
            </div>
            <div class="ft_support">
                <ul>
                    
                    <li>
                        <div class="txt">후원계좌번호</div>
                        <div class="num text20">농협 301-0298-5888-01 (예금주 : 안성시노인복지관)</div>
                    </li>
                </ul>
            </div>
        </div>
</footer>


<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
 
        if ($('#top_btn').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#top_btn').addClass('show');
                    } else {
                        $('#top_btn').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#top_btn').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>