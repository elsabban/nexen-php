



/* 구독 */
function webzine_subscribe(){

	var first_name  = trim(  $("input[name='first_name']").val()  ); 
	var last_name   = trim(  $("input[name='last_name']").val()  ); 
	var category    = trim(  $("select[name='category']").val()  ); 
	var region      = trim(  $("select[name='region']").val()  ); 
	var institution = trim(  $("input[name='institution']").val()  ); 
	var email       = trim(  $("input[name='email']").val()  ); 



	if( first_name.length == 0 ){
		alert("Please enter your First Name");
		return;
	}
	if( last_name.length == 0 ){
		alert("Please enter your Last Name");
		return;
	}
	if( email.length == 0 ){
		alert("Please enter your E-mail");
		return;
	}

	if( !checkMail( email ) ){
		alert("Email format is incorrect.");
		return;
	}

	if( category.length == 0 ){
		alert("Please select a Division");
		return;
	}

	if( region.length == 0 ){
		alert("Please select a Region");
		return;
	}



	$.ajax({
		url: _base_uri+"/utils/request_webzine.php",
		type: "POST",
		data:  $("#requestForm").serialize() ,
		dataType: "json",
		success:function(resp){

			if( resp.result == 200 ){
				alert( resp.message );
				document.location.reload();

			}else{
				alert( resp.message );
			}
		},
		error:function( e ){
			alert( "An error occurred during processing.\nPlease try again in a few minutes." );
		}
	});



}

/* 변경 */
function webzine_modify(){

	var name      = trim(  $("input[name='name']").val()  ); 
	var email     = trim(  $("input[name='email']").val()  ); 
	var email_new = trim(  $("input[name='email_new']").val()  ); 
	var agree     = $("input[name='agree']:checked").val() == 'Y' ? 'Y':'N' ; 

	if( name.length == 0 ){
		alert('이름을 입력해주세요.');
		return;
	}

	if( email.length == 0 ){
		alert('기존 이메일을 입력해주세요.');
		return;
	}

	if( !checkMail( email ) ){
		alert("기존 이메일 형식이 올바르지 않습니다.");
		return;
	}
	if( email_new.length == 0 ){
		alert('변경 이메일을 입력해주세요.');
		return;
	}

	if( !checkMail( email_new ) ){
		alert("변경 이메일 형식이 올바르지 않습니다.");
		return;
	}
	if( agree != 'Y' ){
		alert("개인정보 취급방침에 동의하신 후 신청하실 수 있습니다.");
		return;
	}

	$.ajax({
		url: _base_uri+"/utils/request_webzine.php",
		type: "POST",
		data: {
			'mode':'MODIFY',
			'name':name,
			'email':email,
			'email_new':email_new
		},
		dataType: "json",
		success:function(resp){

			if( resp.result == 200 ){
				alert( resp.message );
				document.location.reload();

			}else{
				alert( resp.message );
			}
		},
		error:function( e ){
			alert( "처리중 오류가 발생하였습니다. 잠시 후 다시 시도해주세요." );
		}
	});

}



/* 해지 */
function webzine_del(){

	var name      = trim(  $("input[name='name']").val()  ); 
	var email     = trim(  $("input[name='email']").val()  ); 

	if( name.length == 0 ){
		alert('이름을 입력해주세요.');
		return;
	}

	if( email.length == 0 ){
		alert('이메일을 입력해주세요.');
		return;
	}

	if( !checkMail( email ) ){
		alert("이메일 형식이 올바르지 않습니다.");
		return;
	}

	$.ajax({
		url: _base_uri+"/utils/request_webzine.php",
		type: "POST",
		data: {
			'mode':'DEL',
			'name':name,
			'email':email
		},
		dataType: "json",
		success:function(resp){

			if( resp.result == 200 ){
				alert( resp.message );
				document.location.reload();

			}else{
				alert( resp.message );
			}
		},
		error:function( e ){
			alert( "처리중 오류가 발생하였습니다. 잠시 후 다시 시도해주세요." );
		}
	});


}