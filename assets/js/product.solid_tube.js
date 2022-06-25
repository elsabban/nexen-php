

$(function(){



	$(".accordion-list .trigger").on('click',function(){

		var item = $(this).parents(".accordion-item");

		if( item.is('.active') ){
			item.removeClass('active');
			$("i",this).addClass('fa-plus').removeClass('fa-minus');
			$("span",this).text('View Details');
		}else{
			$(".accordion-item").removeClass('active');
			item.addClass('active');
			$("i",this).removeClass('fa-plus').addClass('fa-minus');
			$("span",this).text('Close');
		}
	});


	$(".innner-tab .btn").on('click',function(){

		var tab_area = $(this).parents(".innner-tab-area");
		var tab = $(this);
		var target = $( $(this).attr('href') );

		if( tab.is('.active') == false ){

			$(".innner-tab .btn",tab_area).removeClass('active');
			tab.addClass('active');
			
			$(".inner-tab-item",tab_area).removeClass('active');
			target.addClass('active');

		}
		return false;
	});





});