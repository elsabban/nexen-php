


		function share( ch ){
			var url  =  document.location.href ;
			var w = 600;
			var h = 400;
			var window_left = (screen.width-w)/2;
			var window_top = 30;

			switch(ch){
				case 'F' :
					window.open("https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent( url+"#" ), 'share00001' ,'width='+w+',height='+h+',scrollbars=yes,status=no,top=' +window_top+',left='+window_left+'');
					break;

				case 'T' :
					window.open("https://twitter.com/home?status="+encodeURIComponent( url ), 'share00002' ,'width='+w+',height='+h+',scrollbars=yes,status=no,top=' +window_top+',left='+window_left+'');
					break;

				case 'G' :
					window.open("https://plus.google.com/share?url="+encodeURIComponent( url ), 'share00003' ,'width='+w+',height='+h+',scrollbars=yes,status=no,top=' +window_top+',left='+window_left+'');
					break;

				case 'KS' :
					window.open("https://story.kakao.com/share?url="+encodeURIComponent( url ), 'share00004' ,'width='+w+',height='+h+',scrollbars=yes,status=no,top=' +window_top+',left='+window_left+'');
					break;
			}
		}



		function recommand_pop(){

			$.ajax({
				url: "recommend.html",
				dataType: "html",
				success: function(html){
					$("body").append(html);
			        // $(document).scrollTop(0);
			    }
			});
		}

		function recommand_pop_close(){
			$(".recommendBox").remove();
		}


		function _recommend_confirm(){

			if( $.trim( $("input[name='rEmail']").val() ).length == 0 ){
				alert("추천 받으실분의 이메일주소를 입력해주세요.");
				return;
			}


			$.ajax({
				url: "recommend_proc.php",
				data:{
					mode:'request',
					season:'201704',
					lang:'KR',
					email: $("input[name='rEmail']").val() ,
					message: $("textarea[name='rMessage']").val() 
				},
				dataType: "json",
				success: function(resp){

					if( resp.result == 200 ){
						alert( resp.message );

						$("input[name='rEmail']").val('');
						$("textarea[name='rMessage']").val('');

						$('.modal-popoup').remove();


					}else{
						alert( resp.message );
					}

				}
			});



		}




			$(".nav-close").on('click',function(){
				$(".nav-artcle").fadeOut();
			});

			$(".wz-navbar .menu").on('click',function(){
				$(".nav-artcle").fadeIn();
			});
			