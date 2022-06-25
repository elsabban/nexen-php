$(function(){
	load_fb_content( fb_page++ );
	load_youtube_content( youtube_page++ );
});


var fb_page = 1;
function load_fb_content( page ){

	console.log( page );
	$.post(_base_uri+"/utils/get_social_contents.php",{'ch':'facebook',page:page }, function( resp ){
		$("#facebookContentBox").append( resp.data.html );
		if( fb_page > 10 || resp.data.html.length == 0 )
			$("#facebookContentBox").parents('.information-list').find(".read-more").hide();

	},'json');


}

var youtube_page = 1;
function load_youtube_content( page ){

	console.log( page );
	$.post(_base_uri+"/utils/get_social_contents.php",{'ch':'youtube',page:page }, function( resp ){

		$("#youtubeContentBox").append( resp.data.html );
		if( youtube_page > 10 || resp.data.html.length == 0 )
			$("#youtubeContentBox").parents('.information-list').find(".read-more").hide();

	},'json');
}