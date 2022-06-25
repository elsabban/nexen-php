
/* 타이어 비교 */

$(function(){
	$("#compareClose").on('click',function(){

		if( $("#compareContentsWrap").is(":animated") ) return;
		if( $("#compareContentsWrap").is(':visible') ){
			product_compare( 'close' );
		}else{
			product_compare( 'open' );
		}
		return false;
	});
	product_compare( 'close' );

	load_compare();
});

function product_compare( show ){
	// $("#compareContentsWrap").stop();
	if( show == 'close' ){
		$("#compareContentsWrap").slideUp();
		$("#compareClose .ico").html('<i class="fa fa-angle-up"></i> Open');

	}else{
		$("#compareContentsWrap").slideDown();
		$("#compareClose .ico").html('<i class="fa fa-angle-down"></i> Close');
	}

}

function clear_compare_item( ){
	$.cookie('compare_item', '', { expires: 1 , path: '/' });
	$("#compareContentsWrap").hide();
	load_compare();
}
function add_compare_item( code ){

	var cookie_str = $.cookie('compare_item')?$.cookie('compare_item'):"";
	var items = cookie_str.length==0 ? new Array() : cookie_str.split('|');
	console.log( code, items );

	if( items.length >= 4 ){
		alert('You can compare max to 4ea.');
		return;
	}

	if( items.length !=0 && items.indexOf( code )  != -1){
		alert('It\'s already added');
		return;
	}

	items.push( code );
	$.cookie('compare_item', items.join("|") , { expires: 1 , path: '/' } );

	load_compare();
	product_compare( 'open' );

}

function remove_compare_item( code ){

	var cookie_str = $.cookie('compare_item')?$.cookie('compare_item'):"";
	var items = cookie_str.length==0 ? new Array() : cookie_str.split('|');

	if( items.indexOf( code )  == -1) return;

	items[ items.indexOf( code ) ] = null;

	var new_items = [];
	for( i in items ){
		if( items[i] != null )
			new_items.push( items[i] );
	}

	$.cookie('compare_item', new_items.join("|") , { expires: 1 , path: '/' } );

	console.log(new_items);

	if( new_items.length == 0 ) product_compare( 'close' );;

	load_compare();
}

function load_compare(){

	var cookie_str = $.cookie('compare_item')?$.cookie('compare_item'):"";
	var items = cookie_str.length==0 ? new Array() : cookie_str.split('|');


	if( items.length == 0 ){
		$(".product-compare-wrap .compare-tag").hide();
	}else{
		$(".product-compare-wrap .compare-tag").show();
	}

	var postData = {ids : items };
	// $.ajax({
	//     url: _base_uri+"/utils/get_compare_item.php",
	//     global: false,
	//     type: "POST",
	//     data: postData,
	//     dataType: "html",
	//     success: function(body){
	// 		$("#compareContentsWrap .container").html( body );
	//     }
	// });
}

function show_compare(){

	var cookie_str = $.cookie('compare_item')?$.cookie('compare_item'):"";
	var items = cookie_str.length==0 ? new Array() : cookie_str.split('|');

	if( items.length <= 1 ){
		alert("Please select at least 2 products and compare them.");
		return;
	}

	$("#compareContentsWrap .container .compare-item").addClass('compare');
	$("#compareContentsWrap .container .compare-item.empty").hide();

	$("#compareContentsWrap .btn-box.compare").hide();
	$("#compareContentsWrap .btn-box.nextlevel").show();
	$("#compareContentsWrap .btn-box.end").hide();
}
