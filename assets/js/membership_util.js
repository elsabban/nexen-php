/*************************************************************************************************
 *	@CreateDate : 2010.08.20
 *	@ModifyDate : 2010.08.20
 *	@FileName   : common_util.js
 *	@Author     : Sung jin Lee (Persona)
 *	
 *  @Searching List 
 *		1. stripHTMLtag : HTML태그 제거
 *		2. checkNumber  : 숫자채크
 *		3. checkMail	: 이메일 채크
 *		4. chkInput		: 필수입력 사항 채크
 *		5. chkSsnNo		: 주민등록번호 채크
 *		6. trim			: 공백문자 제거
 *		7. checkFileExt	: 파일 업로드시 배열로 확장자를 받아 맞는지 채크한다.
 *		8. setCookie	: 쿠키값 저장
 *		9. getCookie	: 쿠키값 가져오기
 *	   10. sliceText	: 글자 자르고 '...' 붙이기
 *************************************************************************************************/

/**********************************************************************
 * @Function : stripHTMLtag(string)
 * @Desc	 : string으로 넘어온 문자열 중에서 HTML태그를 제거한다.
 * @param	 : string
 * @return	 : null
 * @Author	 : Persona
 **********************************************************************/
function stripHTMLtag(string) { 
   var objStrip = new RegExp(); 
   objStrip = /[<][^>]*[>]/gi; 
   return string.replace(objStrip, ""); 
} 

/**********************************************************************
 * @Function : checkNumber(str)
 * @Desc	 : str으로 넘어온 문자열이 숫자인지 채크한다.
 * @Param	 : str
 * @Return	 : false(숫자)/true(문자)
 * @Author	 : Persona
 **********************************************************************/
function checkNumber(str) { 
    var flag=true; 
    if (str.length > 0) { 
        for (i = 0; i < str.length; i++) {  
            if (str.charAt(i) < '0' || str.charAt(i) > '9') { 
                flag=false; 
            } 
        } 
    } 
    return flag; 
} 

/**********************************************************************
 * @Function : checkMail(strMail)
 * @Desc	 : strMail 넘어온 문자열이 숫자인지 채크한다.
 * @Param	 : strMail
 * @Return	 : true(유효한 이메일)/false(유효하지 않은 이메일)
 * @Author	 : Persona
 **********************************************************************/
function checkMail(strMail) { 
   /** 체크사항 
     - @가 2개이상일 경우 
     - .이 붙어서 나오는 경우 
     -  @.나  .@이 존재하는 경우 
     - 맨처음이.인 경우 
     - @이전에 하나이상의 문자가 있어야 함 
     - @가 하나있어야 함 
     - Domain명에 .이 하나 이상 있어야 함 
     - Domain명의 마지막 문자는 영문자 2~4개이어야 함 
   **/ 

    var check1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;  

    var check2 = /^[a-zA-Z0-9\-\.\_]+\@[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4})$/; 
     
    if ( !check1.test(strMail) && check2.test(strMail) ) { 
        return true; 
    } else { 
        return false; 
    } 
} 

/**********************************************************************
 * @Function : chkInput(obj, msg)
 * @Desc	 : 필수입력 사항 처리 
 * @Param	 : obj, msg
 * @Return	 : 
 * @Author	 : Persona
 **********************************************************************/
function chkInput(obj, msg){
  if (trim(obj.value) == ""){
    alert(msg);
    obj.focus();
    return false;
  }
  return true;
}



function isValidDate(iDate) {
	if( iDate.length != 8 ) {
		return false;
	}
	oDate = new Date(iDate.substring(0, 4),iDate.substring(4, 6),iDate.substring(6),0,0,0);
	//oDate.setFullYear(iDate.substring(0, 4));
	//oDate.setMonth(parseInt(iDate.substring(4, 6)) - 1);
	//oDate.setDate(iDate.substring(6));
	alert(oDate.getFullYear());
	alert(iDate.substring(0, 4));
	alert(oDate.getMonth());
	alert(Number(iDate.substring(4, 6)));
	alert(oDate.getDate());
	alert(Number(iDate.substring(6)) );

	if( oDate.getFullYear()     != iDate.substring(0, 4) 
	  || oDate.getMonth() != Number(iDate.substring(4, 6))
	  || oDate.getDate()      != Number(iDate.substring(6)) ){
		return false;
	}

	return true;
}

function isNumeric(s) { 
	for (i=0; i<s.length; i++) { 
		c = s.substr(i, 1); 
		if (c < "0" || c > "9") return false; 
	} 
	return true; 
}

function isSSN(s1, s2) {
	n = 2;
	sum = 0;
	for (i=0; i<s1.length; i++)
		sum += parseInt(s1.substr(i, 1)) * n++;

		for (i=0; i<s2.length-1; i++) {
			sum += parseInt(s2.substr(i, 1)) * n++;
			if (n == 10) n = 2;
		}

		c = 11 - sum % 11;
		if (c == 11) c = 1;
		if (c == 10) c = 0;
		if (c != parseInt(s2.substr(6, 1))) return false;
	else return true;
}
// chkSsnNo	

 /**********************************************************************
 * @Function : trim(strSrc)
 * @Desc	 : 지정된 문자열에서 앞/뒤 공백문자를 제거하여 반환한다
 * @Param	 : strSrc
 * @Return	 : strDest
 * @Author	 : Persona
 **********************************************************************/
function trim(strSrc){
	var iLength     = strSrc.length;
	var iStartIndex = 0;
	var iEndIndex   = iLength - 1;
	var strDest     = "";

	// 빈 문자열일 경우 그대로 반환한다.
	if (iLength == 0) return strDest;

	// 새 문자열의 시작인덱스를 계산한다.
	for (var index=0 ; index < iLength ; index++) {
		if (strSrc.charAt(index) != ' ') {
			iStartIndex = index;
			break;
		}
	} // for (var index=0 ; index < iLength ; index++)

	// 새 문자열의 마지막인덱스를 계산한다.
	for (var index=iLength-1 ; index >= 0 ; index--) {
		if (strSrc.charAt(index) != ' ') {
			iEndIndex = index;
			break;
		}
	} // for (var index=iLength-1 ; index >= 0 ; index--)

	// 빈 문자열이 아닐 경우, 앞/뒤 공백문자를 제거한다.
	if (iStartIndex <= iEndIndex) {
		strDest = strSrc.substring(iStartIndex, iEndIndex + 1);
	}

	return strDest;
}

 /**********************************************************************
 * @Function : checkFileExt(arrExt, file_name)
 * @Desc	 : 파일 업로드시 배열로 확장자를 받아 맞는지 채크한다.
 * @Param	 : arrExt(배열), file_name(파일명)
 * @Return	 : true/false
 * @Author	 : Persona
 **********************************************************************/
function checkFileExt(arrExt, file_name){
	var result = false;

	var f_ext = file_name.substring(file_name.length-3, file_name.length);

	for(var i=0; i<arrExt.length; i++){
		if(f_ext.toLowerCase() == arrExt[i]){
			result = true;
			break;
		}
	}
	return result;
}

 /**********************************************************************
 * @Function : setCookie(key, value, expiredays)
 * @Desc	 : 쿠키저장.
 * @Param	 : key(키), value(값), expiredays(쿠키유지기간: 일)
 * @Return	 : 
 * @Author	 : Persona
 **********************************************************************/
function setCookie(key, value, expiredays){
	var today = new Date();
	today.setDate( today.getDate() + expiredays );
	document.cookie = key + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";"
}

 /**********************************************************************
 * @Function : getCookie(key)
 * @Desc	 : 쿠키값 가져오기.
 * @Param	 : key(키)
 * @Return	 : 
 * @Author	 : Persona
 **********************************************************************/
function getCookie(key){
	var cook = document.cookie + ";";
	var idx = cook.indexOf(key, 0);
	var val = "";

	if(idx != -1){
		cook = cook.substring(idx, cook.length);
		begin = cook.indexOf("=", 0) + 1;
		end = cook.indexOf(";", begin);
		val = unescape( cook.substring(begin, end) );
	}

	return val;
}

/**********************************************************************
 * @Function : sliceText(len, string)
 * @Desc	 : string으로 넘어온 문자열이 len보다 크면 문자열을 자르고
			   '...'을 붙인다.
 * @param	 : len, string
 * @return	 : string
 * @Author	 : Persona
 **********************************************************************/
function sliceText(len, string) { 
   var val = '';

   if(trim(string) != ''){
		if(string.length > len){
			val = string.substring(0, len)+'...';		
		}else{
			val = string;
		}
   }

   return val;
} 

/**********************************************************************
 * @Function : String_trim(string)
 * @Desc	 : 공백문자제거
 * @Param	 : string
 * @Return	 : 공백이 제거된 string
 * @Author	 : 
 **********************************************************************/
function String_trim(txt)
{
	return txt.replace(/(^\s*)|(\s*$)/g, "");
}


/**********************************************************************
 * @Function : h_check(Objectname)
 * @Desc	 : 한글및특수문자 잡아낸다
 * @Param	 : string
 * @Return	 : 공백이 제거된 string
 * @Author	 : 
 **********************************************************************/
function h_check(Objectname)
{
	 var intErr;
	 var strValue = Objectname;
	 var retCode = 0;	 
	 for (i = 0; i < strValue.length; i++)
	 {
		  var retCode = strValue.charCodeAt(i)
		  var retChar = strValue.substr(i,1).toUpperCase()
		  retCode = parseInt(retCode)		 
		  if ((retChar < "0" || retChar > "9") && (retChar < "A" || retChar > "Z") && ((retCode > 255) || (retCode < 0)))
		  {
		   intErr = -1;
		   break;
		  }
	 }
	return (intErr);
}


function username_verification( username ){

	if( 
		username.length >= 6 && username.length <= 12 &&
		(/[a-z]/i).test( username ) == true && (/[^a-z0-9]/i).test( username ) == false ){
		return true;
	}else{
		return false;
	}

}

function password_verification( password ){

	if( 
		password.length >= 6 && password.length <= 20 &&
		(/^(?=.*[a-zA-Z])((?=.*\d)|(?=.*\W)).{1,}$/i).test( password ) == true
	){
		return true;
	}else{
		return false;
	}
}