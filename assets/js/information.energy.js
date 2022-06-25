
$(function(){

		get_product_by_category( );

});

function get_product_by_category(  ) {
	var cate = $("select[name='category']").val();

	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'product', category :  cate },
		datatype:'json',
		success: function(resp) {

			if( resp.result == 200 ){

				var box = $("#productBox");
				box.empty();
				box.append($("<option>").val('').text('- Select') );
				for( i in resp.data ){
					var item = resp.data[ i ];
					box.append($("<option>").val( item.pidx ).text( item.name ) );
				}
			}


		}
	});
}


function get_width(  ) {

	var pidx         = $("select[name='product']").val();
	// var width        = $("select[name='width']").val();
	// var flat         = $("select[name='flat']").val();
	// var wheel        = $("select[name='wheel']").val();
	// var speed_rating = $("select[name='speed_rating']").val();

	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'width', 'pidx':pidx  },
		datatype:'json',
		success: function(resp) {

			if( resp.result == 200 ){
				var box = $("select[name='width']");
				box.empty();
				box.append($("<option>").val('').text('- Select') );
				for( i in resp.data ){
					var item = resp.data[ i ];
					box.append($("<option>").val( item.width ).text( item.width ) );
				}
			}


		}
	});
}

function get_wheel(  ) {
	var pidx         = $("select[name='product']").val();
	var width        = $("select[name='width']").val();
	var flat         = $("select[name='flat']").val();
	// var wheel        = $("select[name='wheel']").val();
	// var speed_rating = $("select[name='speed_rating']").val();

	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'wheel', 'pidx':pidx, 'width':width, 'flat':flat  },
		datatype:'json',
		success: function(resp) {

			if( resp.result == 200 ){
				var box = $("select[name='wheel']");
				box.empty();
				box.append($("<option>").val('').text('- Select') );
				for( i in resp.data ){
					var item = resp.data[ i ];
					box.append($("<option>").val( item.wheel ).text( item.wheel ) );
				}
			}


		}
	});
}
function get_speed_rating(  ) {
	var pidx         = $("select[name='product']").val();
	var width        = $("select[name='width']").val();
	var flat         = $("select[name='flat']").val();
	var wheel        = $("select[name='wheel']").val();
	// var speed_rating = $("select[name='speed_rating']").val();

	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'speed_rating', 'pidx':pidx, 'width':width, 'flat':flat, 'wheel':wheel  },
		datatype:'json',
		success: function(resp) {

			if( resp.result == 200 ){
				var box = $("select[name='speed_rating']");
				box.empty();
				box.append($("<option>").val('').text('- Select') );
				for( i in resp.data ){
					var item = resp.data[ i ];
					box.append($("<option>").val( item.speed_rating ).text( item.speed_rating ) );
				}
			}


		}
	});
}
function get_flat(  ) {

	var pidx         = $("select[name='product']").val();
	var width        = $("select[name='width']").val();
	// var flat         = $("select[name='flat']").val();
	// var wheel        = $("select[name='wheel']").val();
	// var speed_rating = $("select[name='speed_rating']").val();

	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'flat', 'pidx':pidx, 'width':width  },
		datatype:'json',
		success: function(resp) {

			if( resp.result == 200 ){
				var box = $("select[name='flat']");
				box.empty();
				box.append($("<option>").val('').text('- Select') );
				for( i in resp.data ){
					var item = resp.data[ i ];
					box.append($("<option>").val( item.flat ).text( item.flat ) );
				}
			}


		}
	});
}

function get_list(  ) {

	var pidx         = $("select[name='product']").val();
	var width        = $("select[name='width']").val();
	var flat         = $("select[name='flat']").val();
	var wheel        = $("select[name='wheel']").val();
	var speed_rating = $("select[name='speed_rating']").val();


	$.ajax({
		url: _base_uri+ '/utils/product_label_search.php',
		type: 'POST',
		data: { mode:'list', 'pidx':pidx, 'width':width, 'flat':flat, 'wheel':wheel, 'speed_rating':speed_rating   },
		datatype:'json',
		success: function(resp) {
			// console.log(resp.data);	
			if( resp.result == 200 ){
				$("#resultListBox").html('');
				$("#resultListBox").html( resp.data ) ;
			}
		}
	});
}


function from_refresh(){
	document.location.href = (  _base_uri + "/information/energy/search.php#"  );
}


function view_on( label_no , rr , wet,noise, noise_db ) {

	if( !rr ) rr = 0;
	if( !wet ) wet = 0;

	$("#img_box .fuel-img img").attr('src', _base_uri + "/assets/images/information/energy/fuel_"+rr+".gif");
	$("#img_box .wet-img img").attr('src', _base_uri + "/assets/images/information/energy/wet_"+wet+".gif");
	$("#img_box .noise-img img").attr('src', _base_uri + "/assets/images/information/energy/noise_"+noise+".gif");
	$("#img_box .noise-img .noise-value").text(noise_db);

	$('#resultListBox .result_list').css("color", "#888");
	$('#resultListBox .item-'+label_no).css("color", "#801494");
}

function list_on(zz) {
	// if ($("#zz").val() != zz) {
	// 	$("#view" + $("#zz").val()).css("color", "#888");
	// }
	// $("#view" + zz).css("color", "#801494");
	// return;
}

function list_off(zz) {
	// $("#view" + zz).css("color", "#888");
	// if ($("#zz").val() != zz) {
	// 	$("#view" + $("#zz").val()).css("color", "#801494");
	// }
	// if ($("#zz").val() == zz) {
	// 	$("#view" + $("#zz").val()).css("color", "#801494");
	// }
	// return;
}