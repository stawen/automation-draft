/* global $,Highcharts,Pace */

$(document).ajaxStart(function () {
    Pace.restart()
  })

$(function () {
	Highcharts.chart('grapheBuildPerMonth', {
		title: {
            text: '',
            style: {
                display: 'none'
            }
        },
        subtitle: {
            text: '',
            style: {
                display: 'none'
            }
        },
		xAxis: {
			categories: ['01/2017','02/2017','03/2017','04/2017','05/2017','06/2017','07/2017','08/2017','09/2017','10/2017','11/2017','12/2017']
		},
		yAxis: {
			title: {
				text: 'Nombre de serveurs'
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
			}]
		},
		tooltip: {
			valueSuffix: ' Serveur(s)'
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle',
			borderWidth: 0
		},
		series: [{
			name: 'Linux',
			data: [54,32,47,31,33,58,26,32,23,null,null,null],
			color: '#ff0000',
		}, {
			name: 'Windows',
			data: [5,5,14,3,8,9,6,12,26,null,null,null],
			color: '#00ccff',
		}, {										
			name: 'Aix',
			data: [0,7,2,0,0,0,0,0,0,null,null,null],
			color: '#00ff80',
		}, {
			name: 'Appliance',
			data: [1,4,1,2,2,2,3,2,0,null,null,null],
			color: '#ffbf00',
		}, {										
			name: 'ESX',
			data: [0,0,0,0,0,0,0,0,0,null,null,null],
			color: '#808080',
		}, {										
			name: 'VIO',
			data: [0,6,0,0,0,2,0,4,0,null,null,null],
			color: '#ff00ff',
		}]
	});
});


$(function () {
    var o = $('#serveur').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'pageLength': 15,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    });
    $('#serveur_filter').hide();
    $('#serverSearch').keyup(function(){
      o.search($(this).val()).draw() ;
})
    
});

$('#srvRefresh').click(function(){
  Pace.restart();	
});


