$(function(){

	$('#bg_carousel .item-wrap').on('init',function(){
		$('#bg_carousel .item-wrap .item').show();
	}).slick({
		infinite: true,
		dots: true,
		autoplay: true,
		autoplaySpeed: 8000,
		speed: 1000,
		cssEase: 'ease-in-out'
	});


	$('#newsEvent').on('init',function(){
		$('#newsEvent .item').show();
	}).slick({
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: false
	});

	$('#newsList').on('init',function(){
		$('#newsList .item').show();
	}).slick({
		infinite: true,
		dots: false,
		arrows: false,
		autoplay: true,
		speed: 1000,
		slidesToShow: 4,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		]
	});

	get_car_brand();

	$("#carMakerBox").on('change',function(){
		choice_car_maker( $(this).val() );
	});

	// facebook_list_more();
	social_list_more();
// visibility: hidden
// visibility: visible


});


jQuery(document).ready(function($){

	var offset = 0.8;

	var blocks = $(" .section-item, .fb-item, .blog-item");

	//hide timeline blocks which are outside the viewport
	hideBlocks( blocks, offset );


	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(blocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(blocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).addClass("ani-hidden" );
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset ) && $(this).addClass("ani-visible" );
		});
	}
});




function get_car_brand(){

	$.post(_base_uri+"/utils/get_car_attr.php",{ target:'maker' }, function(data){
		
		$("#carMakerBox").empty();
		$("#carMakerBox").append('<option value=""> Select </li>');
		$("#carBrandBox").empty();
		$("#carBrandBox").append('<option value=""> Select </li>');
		for( seq in data ){
			$("#carMakerBox").append('<option value="'+data[ seq ].id+'"> '+data[ seq ].name+' </li>');
		}

	}, 'json');
}

function choice_car_maker( maker_id , obj ){

	$("input[name=maker_id]").val(maker_id);
	$("input[name=brand_id]").val('');

	$.post(_base_uri+"/utils/get_car_attr.php",{ target:'brand', maker_id:maker_id }, function(data){
		
		$("#carBrandBox").empty();
		$("#carBrandBox").append('<option value=""> Select </li>');

		for( seq in data ){
			$("#carBrandBox").append('<option value="'+data[ seq ].id+'"> '+data[ seq ].name+' </li>');
		}

	}, 'json');
}

function search_by_car(){
	var mid = $("#carMakerBox").val();
	var bid = $("#carBrandBox").val();
	var str = $("#productName").val();

	if( mid != '' ){
		if( mid.length == 0 ){ alert('Please select a make.'); return; }
		if( bid.length == 0 ){ alert('Please select a model.'); return; }
	}else{
		if( str == 0 ){ alert('Please enter your product name or select a model.'); return; }
	}


	document.location.href=_base_uri+"/service/find_tire/?maker_id="+mid+"&brand_id="+bid+"&str="+urlencode(str);

	// $.post(_base_uri+"/utils/tire_search_by_car.php",{ maker_id:mid, brand_id:bid }, function( response ){
		// $("#searchResult").html( response );
	// },'html');
}



/* 매장찾기 */
// $(function(){

// 	$.post(_base_uri+"/utils/get_shop_attr.php",{target:'addr1'  }, function(data){
// 			// console.log(data);

			
// 			var addr1 = $("#shopAddr01");
			
// 			addr1.empty();
// 			addr1.append( $("<option>").val('').text(' Select') );
// 			for( i in data ){
// 				var item = data[ i ];
				
// 				addr1.append( $("<option>").val( item ).text( item ) );
// 			}

// 		}, 'json');



// 	$("#shopAddr01").on('change',function(){

// 		$.post(_base_uri+"/utils/get_shop_attr.php",{target:'addr2',addr1:$(this).val() }, function(data){
			
// 			var addr2 = $("#shopAddr02");
			
// 			addr2.empty();
// 			addr2.append( $("<option>").val('').text('구/시/군 선택') );
// 			for( i in data ){
// 				var item = data[ i ];
				
// 				addr2.append( $("<option>").val( item ).text( item ) );
// 			}

// 		}, 'json');
// 	});
// });

function goto_find_shop(){
	var addr1 = $("#shopAddr01").val();

	if( addr1.length == 0 ){ alert("지역을 선택해주세요."); return; }

	document.location.href = _base_uri+"/service/find_shop/?addr1="+addr1;

}


var _social_page = 0;

function social_list_more(){

	_social_page += 1;

	var _fbpage = 8;
	if( $('body').width() < 1169 ) _fbpage += 4;

	var _bpage = 2;
	

	$("#facebookContentList .col:gt("+(_social_page*_fbpage - 1)+")").hide();
	$("#facebookContentList .col:lt("+(_social_page*_fbpage)+")").show();

	// $("#blogContentList .col:gt("+(_social_page*_bpage-1)+")").hide();
	// $("#blogContentList .col:lt("+(_social_page*_bpage)+")").show();

	if( $("#facebookContentList .col").length <=   _social_page*_fbpage  && $("#blogContentList .col").length <=   _social_page*_bpage )
		
		$(".sns-section .read-more").hide();
}
