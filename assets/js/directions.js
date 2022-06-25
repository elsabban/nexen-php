// 경상남도 양산시 충렬로 355					35.377390563	129.0440026113
// 경상남도 창녕군 대합면 대동월포로 291		35.6253404104	128.4379789308
// 서울시 서초구 방배로 226 넥센강남타워		37.4933706964	126.9904470333


function initMap() {
	
	var iconName = "../assets/images/service/pin.png";


	var map01 = new google.maps.Map(document.getElementById('map001'), {
		center: {lat: 35.377390563, lng: 129.0440026113 },
		scrollwheel: false,
		zoom: 16
	});
	var marker = new google.maps.Marker({
		position: {lat: 35.377390563, lng: 129.0440026113 } ,
		map: map01,
		icon: iconName
	});


	var map02 = new google.maps.Map(document.getElementById('map002'), {
		center: {lat: 35.6253404104, lng: 128.4379789308 },
		scrollwheel: false,
		zoom: 16
	});
	var marker = new google.maps.Marker({
		position: {lat: 35.6253404104, lng: 128.4379789308 } ,
		map: map02,
		icon: iconName
	});



	var map03 = new google.maps.Map(document.getElementById('map003'), {
		center: {lat: 37.5700725, lng: 126.8275036 },
		scrollwheel: false,
		zoom: 16
	});

	var marker = new google.maps.Marker({
		position: {lat: 37.5700725, lng: 126.8275036 } ,
		map: map03,
		icon: iconName
	});


}
