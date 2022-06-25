$(function(){

	var sideslider = $('[data-toggle=collapse-side]');
	var sel = sideslider.attr('data-target');
	var sel2 = sideslider.attr('data-target-2');
	
	sideslider.click(function(event){
		$(sel).toggleClass('in');
		$(sel2).toggleClass('out');
	});

	var gnb_ani_timer = null;

	$(".gnb-menu .navbar-gnb, .navbar-sub-shadow").on('mouseover mouseout',function(ev){

		if( $(".navbar-toggle").is(':visible') == false ){
			
			// if( $(".navbar-sub").is(':animated') ) return;
			$(".navbar-sub").stop();
			$(".navbar-sub-shadow").stop();

			if( ev.type =="mouseover"){
				try{
					clearTimeout( gnb_ani_timer );
				}catch(e){}

				$(".navbar-sub").fadeIn();
				$(".navbar-sub-shadow").slideDown();


			}else{

				gnb_ani_timer = setTimeout(function(){
					$(".navbar-sub").fadeOut('',function(){
						$(this).removeAttr('style');
					});
					$(".navbar-sub-shadow").slideUp('',function(){
						$(this).removeAttr('style');
					});
				},50);
			}
		}else{
			$(".navbar-sub").hide();
		}
	});

	if( $(".navbar-nexen").is('.locked') == false ){

		$(document).on('scroll',function( ev ){
			var navbar_p = $("body > .top-banner:visible").height();
			if( navbar_p == null ) navbar_p = 0;

			if( $(document).scrollTop() > navbar_p  ){
				$(".navbar-nexen").addClass("follow");
				$(".navbar-sub").addClass("follow");
			}else{
				$(".navbar-nexen").removeClass("follow");
				$(".navbar-sub").removeClass("follow");
			}
		});
		
	}

	$(".navbar-gnb > li > a").on('click',function(){
		if( $(document).width() < 1170 ){
			
			if( !$(this).parents('li').is('.on') ){
				$(".navbar-gnb > li ").removeClass('on');
				var snb = $(this).parents('li').addClass('on');
			}else{
				$(".navbar-gnb > li ").removeClass('on');
				// var snb = $(this).parents('li').toggleClass('on');
			}
				// console.log(snb);

			// snb.show();
			return false;
		}else{
			return true;
		}
	});


	$("a.share-fb, a.share-tw,  a.share-gg,  a.share-print",$(".sns-button") ).on('click', function(){
		
		var obj =  $(this);
		// console.log( obj.is('share-fb') );

		if( obj.is('.share-fb') ) share_sns('F');
		if( obj.is('.share-tw') ) share_sns('T');
		if( obj.is('.share-gg') ) share_sns('G');
		if( obj.is('.share-print') ) print_page();

		return false;
	});

	if( $(".top-banner").is(":visible") == true ){
		$('.top-banner .banner-items').on('init',function(){
			$('.top-banner .banner-item').show();
		}).slick({
			infinite: true,
			arrows:true,
			dots: true,
			// fade: true,
			autoplay: true,
			autoplaySpeed: 8000,
			speed: 1000,
			cssEase: 'ease-in-out'
		});

	$(".top-banner .close a").on('click', close_banner ) ;

	}


	$.ajaxSetup({
		error:function(e){
			console.log( e );
			console.log( e.responseText );
			// alert("처리중 오류가 발생하였습니다.\n잠시 후 다시 시도해주세요.\n\n"+strip_tags( e.responseText ) );
		}
	});


	$("input[format=number]").on('keyup change focusout',function(){
		console.log(  $(this).val() );
		$(this).val( number_format( $(this).val() ));
	});


	$("a,button").focus(function(){ $(this).blur() } );

});

function close_banner(){
	
	if( $('.top-banner input').is(":checked") == true )  $.cookie('hide_top_banner', 'Y' ,{ expires: 1 , path: '/' } );

	$(".top-banner").hide();
	$('.top-banner .banner-items').slick('unslick');
	// var cookie_str = $.cookie('top_banner_display')?$.cookie('top_banner_display'):"";
}

function _popup( url, w,h, scroll ){
	w += 15;
	if( !scroll ) scroll = 'yes';
	window.open( url , '' , 'width='+w+', height='+h+', top=100, left=100, fullscreen=no, menubar=no, status=no, toolbar=no, titlebar=yes, location=no, scrollbar='+scroll);
}

function share_sns(ch){

	switch( ch ){
		case "F" : // 페이스북
		_popup( "https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent( document.location.href) ,600,350);
		break;

		case "T": //트위터
		_popup( "https://twitter.com/intent/tweet?url="+encodeURIComponent( document.location.href)+ "&text="+encodeURIComponent( document.title )  ,600,350);
		break;

		case "K" : // 카카오스토리
		_popup( "https://story.kakao.com/share?url="+encodeURIComponent( document.location.href),600,450);
		break;

		case "G" : // 구글 플러스
		_popup( "https://plus.google.com/share?url=" + encodeURIComponent( document.location.href ) + "&t=" + encodeURIComponent( document.title ) ,600,450);
		break;
	}
}


function print_page(){
	window.print();
}



/* Prototype*/

if (!Array.indexOf) {
	Array.prototype.indexOf = function (obj, start) {
		for (var i = (start || 0); i < this.length; i++) {
			if (this[i] == obj) {
				return i;
			}
		}
		return -1;
	}
}





/* 통합검색 */
var global_search_autocomplete_focus = 1;
$(function(){

	$(".global-search .search-box .placeholder").on('click', function(){
		$(".global-search .search-box input").focus();
		$(".global-search .search-box .placeholder").hide();
	});
	$(".global-search .search-box input").on('focus',function(){
		$(".global-search .search-box .placeholder").hide();
	});
	$(".global-search .search-box input").on('blur',function(){
		if( $(this).val() == '' ){
			$(".global-search .search-box .placeholder").show();
		}
	});

	$(".global-search .search-box input").on("keydown",function( ev ){

		// console.log( ev.keyCode , global_search_autocomplete_focus );

		var max = $(".global-search .search-box .autocomplete li a").length -1;

		if( ev.keyCode == 38 ){ //UP
			if( global_search_autocomplete_focus < 2 ) global_search_autocomplete_focus = 2;
			global_search_autocomplete_focus --;
			if( global_search_autocomplete_focus >= 5 )
				$(".autocomplete").scrollTop( (global_search_autocomplete_focus - 3) * 50 );


		}else if( ev.keyCode == 40 ){ // Down
			if( global_search_autocomplete_focus > max ) global_search_autocomplete_focus = max;
			global_search_autocomplete_focus ++;
			if( global_search_autocomplete_focus >= 5 )
				$(".autocomplete").scrollTop( (global_search_autocomplete_focus - 3) * 50 );

		}else if( ev.keyCode == 13 ){ // Enter
			$(".global-search .search-box .autocomplete li a.focus").click();
		}

		$(".autocomplete li a").removeClass('focus');
		$(".autocomplete li a").eq( global_search_autocomplete_focus -1  ).addClass('focus');


	});

	$(".global-search .search-box input").on('keyup',global_search_autocomplete);

});


function global_search_open(){

	$(".global-search").show();
	$(".top-banner").hide();
	$(".top-banner .banner-items").slick('destroy');

	if( $(".navbar-nexen").is('.locked') == false && $(document).width() > 1080 ){
		
		$(".navbar-nexen").addClass("follow");
		$(".navbar-sub").addClass("follow");
	}
}
function global_search_reset(){
	$(".global-search .search-box input").val('');
	$(".global-search .search-box .placeholder").show();
	$(".global-search .search-box .autocomplete").empty();
	$(".global-search .search-box").show();
	$(".global-search .result-shop").hide();
	$(".global-search #resultShop").empty();

	$(".global-search .search-box .desc").show();

	$(".global-search .result-product").hide();
	$(".global-search #resultCar").empty();

	$(".global-search .result-size").hide();
	$(".global-search #resultSize").empty();


}function global_search_close(){

	global_search_reset();
	
	$(".global-search").hide();
	$(".top-banner:not(.hide)").show('fast',function(){
$('.top-banner .banner-items').on('init',function(){
			$('.top-banner .banner-item').show();
		}).slick({
			infinite: true,
			arrows:true,
			dots: true,
			// fade: true,
			autoplay: true,
			autoplaySpeed: 8000,
			speed: 1000,
			cssEase: 'ease-in-out'
		});

	});
	if( $(".navbar-nexen").is('.locked') == false ){
		$(".navbar-nexen").removeClass("follow");
		$(".navbar-sub").removeClass("follow");
	}

}

var prev_key = '';
function global_search_autocomplete(){
	if( $(this).val() == prev_key ) return;
	prev_key = $(this).val();

	global_search_autocomplete_focus = 1

	$.ajax({
		type: "POST",
		url: _base_uri+"/utils/global_search_autocomplete.php" ,
		dataType: 'html',
		data: {keyword:$(this).val() },
		success: function(resp){

			if(  trim( resp ).length != 0  ){
				$(".global-search .search-box .desc").hide();
				$(".global-search .search-box .autocomplete").show();
				$(".global-search .search-box .autocomplete").html( resp );
				$(".global-search .search-box .autocomplete li a").eq(0).addClass('focus');

				$(".global-search .search-box .autocomplete li a").on('mouesover',function(){
					$(".global-search .search-box .autocomplete li a").removeClass('focus');
				});
			}else{
				$(".global-search .search-box .desc").show();
				$(".global-search .search-box .autocomplete").hide();
			}
		}
	});
}
function global_search_addres(a1,a2){
	$(".global-search .search-box").hide();
	$(".global-search .result-shop").show();
	$(".global-search .result-shop .summery span").text( a1 +' '+ a2 );
	
	$.ajax({
		type: "POST",
		url: _base_uri+"/utils/global_search_shop.php" ,
		dataType: 'html',
		data: {addr1:a1,addr2:a2 },
		success: function(resp){
			$(".global-search #resultShop").html( resp );
		}
	});
}

function global_search_car( cbidx, car_name ){
	$(".global-search .search-box").hide();
	$(".global-search .result-product").show();
	$(".global-search .result-product .summery span").text( car_name );
	
	$.ajax({
		type: "POST",
		url: _base_uri+"/utils/global_search_tire_by_car.php" ,
		dataType: 'html',
		data: {cbidx:cbidx },
		success: function(resp){
			$(".global-search #resultCar").html( resp );

			try{
				$(".global-search #resultCar").slick('destroy');
			}catch(e){}

			$(".global-search #resultCar").slick({
				infinite: true,
				dots: false,
				autoplay: false,
				slidesToShow: 3,
				slidesToScroll: 3,
				speed: 1000,
				cssEase: 'ease-in-out'
			});
		}
	});
}
function global_search_size( spidx, size_label ){
	$(".global-search .search-box").hide();
	$(".global-search .result-size").show();
	$(".global-search .result-size .summery span").text( size_label );
	
	$.ajax({
		type: "POST",
		url: _base_uri+"/utils/global_search_tire_by_size.php" ,
		dataType: 'html',
		data: {spidx:spidx },
		success: function(resp){

			$(".global-search #resultSize").html( resp );

			try{
				$(".global-search #resultSize").slick('destroy');
			}catch(e){}
			
			$(".global-search #resultSize").slick({
				infinite: true,
				dots: false,
				autoplay: false,
				slidesToShow: 3,
				slidesToScroll: 3,
				speed: 1000,
				cssEase: 'ease-in-out'
			});
		}
	});
}

function global_link( url ){
	
	if( url == '') return;

	var form = $("#LinkTarget");
	form.attr("action",url );
	form.submit();
}