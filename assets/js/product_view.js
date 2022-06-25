$(function(){

	$(".product-compare-wrap .compare-tag-wrap .list-btn").show();



 $('.performance .slide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots:false,
  speed: 0,
  arrows: false,
  fade: false
}).on('swipe', function(event, slick, direction){
	var now = $(this).slick('slickCurrentSlide');
	// console.log( now );
	$( "#slideBar" ).slider( "value", now );
});

    $( "#slideBar" ).slider({
      range: "max",
      min: 0,
      max: $(".content-wrap.performance .slide-item:not(.slick-cloned)").length -1 ,
      value: 0,
      slide: function( event, ui ) {
      	// $('.performance .slide')
      		$('.performance .slide').slick('slickGoTo', ui.value  );
			// $(".content-wrap.performance .slide-item").hide();
			// $(".content-wrap.performance .slide-item").eq( ui.value ).show();
      }
    });






});



function spec_read_more(){
	$("#specificationWrap .spec-table tr").show();
	$("#specificationWrap .read-more").hide();
}


// function goto_find_shop(){

// 	var gubun        = [];
// 	var addr1        = $("select[name=addr1]").val();

// 	var url = _base_uri +"/service/find_shop/";

// 	url += "?addr1="+urlencode(addr1);


// 	document.location.href = url;
// }
