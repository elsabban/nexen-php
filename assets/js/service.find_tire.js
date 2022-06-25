$(function(){

	get_car_brand();

	if( __maker_id == '' && __keyword !== '' ){
		search_by_name();
	}

});


function product_list_filter( ev ){

	$(".product-type-tab li").removeClass('active');
	$( ev.target ).parents('li').addClass('active');
	console.log( ev );
	var tag = $( ev.target ).attr('href').substr(1,9000);

	$(".product-item").hide();
	$(".product-item").filter('.filter-'+ tag ).show();

}



var __preset = true;

function get_car_brand(){

	$("input[name=maker_id]").val('');
	$("input[name=brand_id]").val('');
	if( __maker_id !== '' )	$("input[name=maker_id]").val( __maker_id );
	if( __brand_id !== '' )	$("input[name=brand_id]").val( __brand_id );

	$.post(_base_uri+"/utils/get_car_attr.php",{ target:'maker' }, function(data){

		$("#carMakerBox").empty();
		for( seq in data ){
			$("#carMakerBox").append('<li class="list-group-item maker-'+data[ seq ].id+'" onclick="choice_car_maker( '+data[ seq ].id+' )"> '+data[ seq ].name+' </li>');
		}

		if( __maker_id !== '' ){
			$("#carMakerBox .maker-"+__maker_id ).click();
		}


	}, 'json');
}

function choice_car_maker( maker_id , obj ){

		$("input[name=maker_id]").val(maker_id);
		$("input[name=brand_id]").val('');

		$.post(_base_uri+"/utils/get_car_attr.php",{ target:'brand', maker_id:maker_id }, function(data){
		
			$("#carBrandBox").empty();
			for( seq in data ){
				$("#carBrandBox").append('<li class="list-group-item brand-'+data[ seq ].id+'" onclick="choice_car_brand( '+data[ seq ].id+' )"> '+data[ seq ].name+' </li>');
			}

			if( __maker_id !== '' && __preset == true ){
				__preset = false;
				$("#carBrandBox .brand-"+__brand_id ).click();
				search_by_car();
			}

		}, 'json');


		$("#carMakerBox li").removeClass('active');
		$("#carMakerBox li.maker-"+maker_id ).addClass('active');
}

function choice_car_brand( bradn_id  ){

	$("input[name=brand_id]").val(bradn_id);

	$("#carBrandBox li").removeClass('active');
	$("#carBrandBox li.brand-"+bradn_id ).addClass('active');
}


function search_by_car(){
	var mid = $("input[name=maker_id]").val();
	var bid = $("input[name=brand_id]").val();

	if( mid.length == 0 ){ alert('Please select a make'); return; }
	if( bid.length == 0 ){ alert('Please select a model.'); return; }

	$.post(_base_uri+"/utils/tire_search_by_car.php",{ maker_id:mid, brand_id:bid }, function( response ){
		// console.log(response);
		$("#searchResult").html( response );

	if( $(" #searchResult .product-type-tab").length != 0 )
		$(" #searchResult .product-type-tab li a").on( 'click', product_list_filter );

		document.location.href="#result";
	},'html');


}
function search_by_name(){
	var pname = $("input[name=product_name]").val();

	if( pname.length == 0 ){ alert('Please enter your product name.'); return; }

	$.post(_base_uri+"/utils/tire_search_by_name.php",{ name:pname }, function( response ){
		// console.log(response);
		$("#searchResult").html( response );

	if( $(" #searchResult .product-type-tab").length != 0 )
		$(" #searchResult .product-type-tab li a").on( 'click', product_list_filter );

		document.location.href="#result";
	},'html');


}
function search_by_specification(){
	var width = $("#specWidth").val();
	var flat  = $("#specFlat").val();
	var wheel = $("#specWheel").val();

	if( width.length == 0 ){ alert('Please select a make Tire Width.'); return; }
	if( flat.length  == 0 ){ alert('Please select a make Tire Ratio.'); return; }
	if( wheel.length == 0 ){ alert('Please select a make Rim Size.'); return; }

	$.post(_base_uri+"/utils/tire_search_by_specification.php",{ 'width':width,'flat':flat,'wheel':wheel }, function( response ){
		$("#searchResult").html( response );

	if( $(" #searchResult .product-type-tab").length != 0 )
		$(" #searchResult .product-type-tab li a").on( 'click', product_list_filter );
		
		document.location.href="#result";
	},'html');


}
