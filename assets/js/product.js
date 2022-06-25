// console.log( 'product.js' );

/* awards.php */

$(function(){

/*	if( document.location.href.indexOf('product/awards') != -1 ){

		$(".timeline-slider .timeline-item-warp").draggable({
			axis: "x",
			scrollSensitivity: 100,
			scrollSpeed: 100,
			start: function() { 
				$(".timeline-head .awards-year a").removeClass('active');
			},
		});


		$(".timeline-head .awards-year a").on('click',function(){
			var year = $(this).attr('href').substr(1,999);
			$(".timeline-head .awards-year a").removeClass('active');
			$(this).addClass('active');

			var position = $(".timeline-slider .timeline-item-warp .year-"+ year ).position();

			$(".timeline-slider .timeline-item-warp").animate({
				left: position.left * -1
			},500);
		});


		$(".timeline-slider").on('mousewheel',function(e){

			var position = $(".timeline-slider .timeline-item-warp" ).position();
			var width    = $(".timeline-slider .timeline-item-warp" ).width();
			if( e.originalEvent.wheelDelta /120 > 0 ){  // UP 
				var next_left = position.left+100;
				if( next_left > 0 ) next_left = 0;
				$(".timeline-slider .timeline-item-warp").css({'left' : next_left+'px' });

			}else{ // DOWN 
				var next_left = position.left-100;
				if( next_left < (width)*-1 ) next_left = (width)*-1;
				$(".timeline-slider .timeline-item-warp").css({'left' : next_left+'px' });

			}
			return false;
		});
	}*/

	if( document.location.href.indexOf('product/magazine_test') != -1 ){

		$("#magazineTestFilter").on("change",function(){

		$(".magazine-test-list .test-item").hide();
		var product = $(this).val();
		$(".magazine-test-list .test-item.item-"+product).show();
		// item-all item-nblue_hd_plus

		});
	}
                                          
                                          
	if( document.location.hash.length != 0 )  $(".product-type-tab a[href='"+document.location.hash+"']").click();
});






/* 타이어 필터링 */
if( $(".product-type-tab").length != 0 ){

	$(".product-type-tab li a").on( 'click', product_list_filter );

}

function product_list_filter( ev ){

	$(".product-type-tab li").removeClass('active');
	$( ev.target ).parents('li').addClass('active');
	console.log( ev );
	var tag = $( ev.target ).attr('href').substr(1,9000);

	$(".product-item").hide();
	$(".product-item").filter('.filter-'+ tag ).show();

}