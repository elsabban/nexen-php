/*4.0*/
var gallery_readmore_seq = 0;
var gallery_readmore_ppc = 10;
var gallery_use_filter = true;
var gallery_filter_tag = 'all';
function gallery_read_more(){

	gallery_readmore_seq += gallery_readmore_ppc;
	console.log( gallery_readmore_seq );
	// $(".gallery-wrap .gallery-item").hide();
	$(".gallery-wrap .gallery-item:gt("+(gallery_readmore_seq-1)+")").hide();
	// $(".gallery-wrap .gallery-item:lt("+gallery_readmore_seq+")").show();

	if( gallery_use_filter == true ){
		gallery_filter( gallery_filter_tag );
		
	}

	if( $(".gallery-wrap .gallery-item").filter(".filter-"+gallery_filter_tag  ).filter(":hidden").length <= 0 ){
		$(".gallery-wrap .read-more").hide();
	}else{

		$(".gallery-wrap .read-more").show();
	}

}

function gallery_filter( tag ){

	$(".gallery-wrap .gallery-item").hide();
	$(".gallery-wrap .gallery-item").filter(".filter-"+tag  ).show();
	$(".gallery-wrap .gallery-item").filter(".filter-"+tag  ).filter(":gt("+(gallery_readmore_seq-1)+")").hide();
	// $(".gallery-wrap .gallery-item:lt("+gallery_readmore_seq+")").hide();
	
	if( gallery_filter_tag != tag ) gallery_readmore_seq = gallery_readmore_ppc;

	$(".gallery-wrap .gallery-item").filter(".filter-"+tag  ).filter(":gt("+(gallery_readmore_seq-1)+")").hide();
	// $(".gallery-wrap .gallery-item:visible:gt("+(gallery_readmore_seq-1)+")").hide();

	if( $(".gallery-wrap .gallery-item").filter(".filter-"+gallery_filter_tag  ).filter(":hidden").length <= 0 ){
		$(".gallery-wrap .read-more").hide();
	}else{

		$(".gallery-wrap .read-more").show();
	}

	if( $(".content-ad-menu a").length != 0 ){
		$(".content-ad-menu a").removeClass('active');
		$(".content-ad-menu a").filter("[href*='"+tag+"']").addClass('active');
	}

	gallery_filter_tag = tag;
}


/* AD &amp; Exhibition &gt; CF */


if( document.location.href.indexOf('communication/ad/cf') != -1 || document.location.href.indexOf('communication/ad/video') != -1 ){

	gallery_readmore_ppc = 12;
	gallery_use_filter = true;

	$(function(){
		$(".content-ad-menu a").on("click",function(){
			gallery_filter( $(this).attr("href").substr(1,999) );
			return false;
		});

		gallery_read_more();

		$('.gallery-wrap .gallery-items').imagelistexpander({
			prefix: "gallery-",
			show:function( target ){
				var item = $(target).parents('li.gallery-item');
				$('.gallery-expander iframe',item).attr('src', $(item).data('url') );
			},
			hide:function( target ){
				var item = $(target).parents('li.gallery-item');
				// console.log(item);
				$('.gallery-expander iframe',item).attr('src','' );
			}
		});

	});
}

/* AD &amp; Exhibition &gt; 인쇄광고 */
if( document.location.href.indexOf('communication/ad/print') != -1 ){

	$(function(){
		$(".content-ad-menu a").on("click",function(){
			gallery_filter( $(this).attr("href").substr(1,999) );
			return false;
		});

		gallery_readmore_ppc = 15;
		gallery_use_filter = true;
		gallery_read_more();

		$('.gallery-wrap .gallery-items').imagelistexpander({
			prefix: "gallery-"
		});
	});
}


/* AD &amp; Exhibition &gt; 인쇄광고 */
if( document.location.href.indexOf('communication/ad/exhibition') != -1 ){

	$(function(){

		$(".exhibition-menu .select-box .selected").click(function () {
			$(".exhibition-menu .select-box ul").slideToggle(200);
		});

		gallery_readmore_ppc = 12;
		gallery_use_filter = false;
		gallery_read_more();


		$('.gallery-wrap .gallery-items').imagelistexpander({
			prefix: "gallery-"
		});

		
	});


}


/* Sports Marketing */
if( document.location.href.indexOf('communication/sport_marketing') != -1 ){

	gallery_read_more = function(){

		gallery_readmore_seq += gallery_readmore_ppc;

		$(".gallery-wrap .gallery-item:gt("+(gallery_readmore_seq-1)+")").hide();
		$(".gallery-wrap .gallery-item:lt("+gallery_readmore_seq+")").show();

		if( $(".gallery-wrap .gallery-item").length <= gallery_readmore_seq ){
			$(".gallery-wrap .read-more").hide();
		}
		if( gallery_use_filter == true ){
			gallery_filter( 'all' );
		}
	};


	gallery_readmore_ppc = 9;
	gallery_use_filter = false;
	gallery_read_more();

	// $('.gallery-items').imagelistexpander({
	// 	prefix: "gallery-"
	// });

	$('.gallery-wrap .gallery-items').imagelistexpander({
		prefix: "gallery-",
		show:function( target ){
			var item = $(target).parents('li.gallery-item');
			var video = $(item).data('youtube');
			
			if( typeof( video ) != 'undefined' )
				$('iframe',item).attr('src', $(item).data('youtube') );

		},
		hide:function( target ){
			var item = $(target).parents('li.gallery-item');
			$('iframe',item).attr('src','about:blank;' );
		}
	});

}

