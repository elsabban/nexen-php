
if( typeof(google) != 'undefined' && typeof(__charts) != 'undefined' ){
	google.charts.load('current', {packages: ['corechart', 'bar']});
	google.charts.setOnLoadCallback(drawCharts);
}


	function drawCharts(){
		for( i in __charts){
			var chart = __charts[i];
			// console.log( chart );
			drawChart( chart.target, chart.data, chart.unit );
		}
	}

	function drawChart( target, input_data, unit ) {

		if( !unit ) unit = '';

		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Year');
		data.addColumn('number', 'Value');
		data.addColumn({type:'string', role:'style'});
		data.addColumn({type:'string', role:'annotation'});

		var re_data = [];
		for( i in input_data ){
			var row = input_data[i];
			row[3] = row[1]+unit;
			console.log(row);
			re_data[ re_data.length ] = row;
		}

		data.addRows(  re_data  );

		var view = new google.visualization.DataView(data);
		// view.setColumns([0, 1,
		// 	{ calc: "stringify",
		// 	sourceColumn: 1,
		// 	type: "string",
		// 	role: "annotation" },
		// 	2]);


		var options = {
			enableInteractivity:false,
			tooltip:{trigger:'none'},
			annotations:{
				alwaysOutside:true,
				highContrast:true,
				textStyle: {
					fontSize: 11,
					bold: true,
					color: '#aaa'
					//,auraColor:'none'
				},
				datum:{
					stem:{length:5,color:'none'}
				}
			},
			legend:{position: 'none'},
			bar: {groupWidth: "20%"},
			chartArea:{left:30,top:20,width:'100%',height:'70%'},
			hAxis:{
				textStyle:{
					fontSize:12,
					color: '#aaa'
				}
			},
			vAxis:{
				format:'#,###.#',
				textStyle:{
					fontSize:11,
					color: '#a4a4a4',
				},
				gridlines:{color : '# 333', count : 4}

			}
		};


		var chart = new google.visualization.ColumnChart( document.getElementById( target ) );
		chart.draw(view , options);
	}