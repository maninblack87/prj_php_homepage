// JavaScript Document


/*네비게이션*/
$(function(){
	
	$('#gnb>li').mouseover(function(){
		$(this).children('#lnb').slideDown();
	});
	$('#gnb>li').mouseleave(function(){
		$(this).children('#lnb').slideUp();
	});
	
});

/*슬라이더 이미지*/
setInterval(function(){
	
	$('#slider ul').delay(6000).animate({marginLeft:'-100%'});
	$('#slider ul').delay(6000).animate({marginLeft:'-200%'});
	$('#slider ul').delay(6000).animate({marginLeft:'-300%'});
	$('#slider ul').delay(6000).animate({marginLeft:'0px'});
	
});

/*갤러리*/
$(function(){
	
	$('#gallery li').mouseover(function(){
		$(this).children('p').fadeIn();
	});
	$('#gallery li').mouseleave(function(){
		$(this).children('p').fadeOut();
	});
	
});