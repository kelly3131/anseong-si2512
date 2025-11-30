$(document).ready(function(){
	// 기존 PC 메뉴 호버 기능 비활성화 (head.php에서 새로운 메뉴 시스템 사용)
	/*
	$(".sh_nav").mouseenter(function(){
		$("#shGnb.main").addClass("on");
	 	$(".sh_lnb_s").fadeIn(200);
		$(".sh_lnb_bg").fadeIn(200);	
	}).mouseleave(function(){
		$("#shGnb.main").removeClass("on");
		$('.sh_lnb_s').stop().fadeOut(200);
	  	$('.sh_lnb_bg').stop().fadeOut(200);
	});
	*/
	
	/* 반응형 [s] */
	$("#m_navBtn").click(function(){
		m++;
		if(m%2 == 1){
			$("#m_navBtn").addClass("on");
			$("#navWrap").fadeIn(300).addClass("on");
		}else{
			navClose(); 
		}; 
	});	
	$("#topmenuM .m_bmenu").click(function(){
		$('.m_smenu').not($(this).next()).slideUp(200);
		$('.m_bmenu').removeClass('on');
		$(this).addClass('on')
		$(this).next().slideDown(200);
	});	

	m = 0;  	
	function navClose() { 
		$("#m_navBtn").removeClass("on");
		$("#navWrap").fadeOut(300).removeClass("on");	
	}	
	/* 반응형 [e] */
});