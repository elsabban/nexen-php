$(function(){

	// var _tab = ".nexen-company-tabs .tab";
	// var _tab = ".nexen-company-tabs .tab";
	var _tab = '.table-tab tr';

	$( _tab ).on('init',function(){

		var seq = 0;
		$(_tab+' td').each(function(obj){
			if( $(this).is('.active') ) return false;
			seq ++;
		});
		setTimeout(function(){
			$( _tab ).slick('slickGoTo', min( 5 , seq )  );
		},500);
		console.log( seq );
	});


	// var slick = $('.nexen-company-tabs .tab').slick({
	var slick = $( _tab ).slick({
		dots: false,
		infinite: false,
		speed: 0,
		arrows: true,
		slidesToShow: 9 ,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}
		]
	});
	// slick.slickGoTo( 6 );

});



if( typeof google != 'undefined'){
	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
}

if( typeof financCharts == 'undefined') financCharts = [];

function drawChart() {

	// alert(11);
	for( i in financCharts ){
		var item = financCharts[i];



		var chartData = new google.visualization.DataTable();
        chartData.addColumn('string', 'Year');
        chartData.addColumn('number', 'value');
        chartData.addColumn({type:'string', role:'style'});

		chartData.addRows( item.data );

		var view = new google.visualization.DataView(chartData);
		view.setColumns([0, 1,
			{ calc: "stringify",
			sourceColumn: 1,
			type: "string",
			role: "annotation" },
			2]);
		var options = {
			width: 254,
			height: 175,
			bar: {groupWidth: "10%"},
			legend: { position: "none" },
			annotations:{
				alwaysOutside:true,
				line:'none'

			}
		};
		var chart = new google.visualization.ColumnChart(document.getElementById(item.target));
		chart.draw(view, options);
	}


}


// function setFinancialIndexChart(target, data ){

// 	var data = {
// 		'target': target ,
// 		'data':data,
// 		'options':
// 	};

// 	charts.push( data );
// }




/*
$(function(){

		var _scroll_tab = $(".nexen-company-tabs.scroll");
		if( _scroll_tab.length != 0 ){

		$(".tab", _scroll_tab).draggable({
			axis: "x",
			scrollSensitivity: 100,
			scrollSpeed: 100,
			drag: function(ev, ui ) {
				// console.log(ui.position.left);
			},
			create:function( ev, ui ){

				var width = $("li:eq(0)", ev.target ).width();
				var cnt = $("li", ev.target ).length;
				var block_width = width * cnt;
				$( ev.target ).width( block_width * 5 );

				$(ev.target).data('block_width', block_width );
				$(ev.target).data('block_count', 5 );

				var a_position = $("li.active", ev.target ).position();
				var a_left = a_position.left;

				var clone = $( ev.target ).html();
				$( ev.target ).append( clone.replace(/<li>/g,"<li style='border-top:1px solid red;'>") );
				$( ev.target ).append( clone.replace(/<li>/g,"<li style='border-top:1px solid green;'>") );
				$( ev.target ).append( clone.replace(/<li>/g,"<li style='border-top:1px solid blue;'>") );
				$( ev.target ).append( clone.replace(/<li>/g,"<li style='border-top:1px solid black;'>") );

				// console.log( width );

				$(ev.target).css('left', ( ( block_width * 2 * -1 )  - a_left )+'px' );
			},

			stop:function( ev , ui ){
				var bw = $(ev.target).data('block_width');
				var bc = $(ev.target).data('block_count');

				var move = ui.position.left % bw

				$(ev.target).css('left',   ( ( bw * 2 * -1 ) + move )+'px' );;
			}

		});

		_scroll_tab.on('mousewheel',function(ev ){

			var position = $(".tab", _scroll_tab ).position();

			var bw = $(".tab",_scroll_tab).data('block_width');
			var bc = $(".tab",_scroll_tab).data('block_count');
			var move = position.left % bw;

			if( ev.originalEvent.wheelDelta /120 > 0 ){  // UP

				$(".tab",_scroll_tab).css('left',   ( ( bw * 2 * -1 ) + move + 50 )+'px' );;

			}else{ // DOWN


				$(".tab",_scroll_tab).css('left',   ( ( bw * 2 * -1 ) + move - 50 )+'px' );;

			}
			return false;
		});

		$(".tab li a", _scroll_tab).on("click touch",function(){
			alert(1);
		});

	}


});



    var onMouseMove = function(e) {
        var mouseEvents = _scroll_tab.data("mouseEvents");
        if (e.timeStamp - mouseEvents[mouseEvents.length-1].timeStamp > 40) {
            mouseEvents.push(e);
            if (mouseEvents.length > 2) {
                mouseEvents.shift();
            }
        }
    }

    var onMouseUp = function() {
        $(document).unbind("mousemove mouseup");
    }*/


function ethics_report_regist( form ) {


		if( trim( $("input[name=name]",form ).val() ) == ''  ){
			alert('Please enter your name.');
			return false;

		}
		if( trim( $("input[name=email]",form ).val() ) == ''  ){
			alert('Please enter your email address.');
			return false;
		}
		if( trim( $("input[name=hp1]",form ).val() ) == ''  ){
			alert('Please enter your phone number.');
			return false;
		}
		if( trim( $("input[name=hp2]",form ).val() ) == ''  ){
			alert('Please enter your phone number.');
			return false;
		}
		if( trim( $("input[name=hp3]",form ).val() ) == ''  ){
			alert('Please enter your phone number.');
			return false;
		}
		if( trim( $("input[name=passwd]",form ).val() ) == ''  ){
			alert('Please enter the password to check the report result.');
			return false;
		}

		if( trim( $("input[name=passwd_chk]",form ).val() ) == ''  ){
			alert('Please enter the password again.');
			return false;
		}
		if( $("input[name=passwd]",form ).val() != $("input[name=passwd_chk]",form ).val() ){
			alert('The password doesn\'t match.Please check \n and enter it again.');
			return false;
		}

		if( trim( $("input[name=title]",form ).val() ) == '' ){
			alert('Please enter the title.');
			return false;
		}
		if( trim( $("input[name=content]",form ).val() ) == '' ){
			alert('Please write down what it\'s about.');
			return false;
		}

		if( trim( $("input[name=ans_verify]",form ).val() ) == '' ){
			alert('Please provide a way to check the results.');
			return false;
		}

	if( $("input[name='captcha']").val().length == 0 ){
		alert('Please enter the security text.');
		return false;
	}

		if( $("input[name=agree]:checked",form ).val() != 'Y' ){
			alert('Please check the personal information collection agreement.');
			return false;
		}



		return true;
}


function ethics_report_view( ) {


	var name = $("input[name=name]").val();
	var passwd = $("input[name=passwd]").val();


		if( trim( name ) == '' ){
			alert('Please enter the name you entered.');
			return false;
		}
		if( trim( passwd ) == '' ){
			alert('Please enter the password you entered.');
			return false;
		}




	$.post(_base_uri+"/utils/company_ethics_report_proc.php",{'mode':'view','name':name, 'passwd':passwd },function( resp ){
		$("#reportResult").html( resp );
	});

}

