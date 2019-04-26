$(document).ready(function(){
$.ajax({
	url: "http://localhost/robust/views/data1.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var montant = [];
		var count = [];
		for(var i in data){
			montant.push(data[i].montant);
			count.push(data[i].count);
		}
		var chartdata = {
			labels: montant,
			datasets : [
			{
				label : 'montant',
				backgroundcolor: 'rgba(200,200,200,0.75)',
				bordercolor:  'rgba(200,200,200,0.75)',
				hoverbackgroundcolor:  'rgba(200,200,200,1)',
				hoverbordercolor:  'rgba(200,200,200,1)',
				data:count
			}
			]
		};
		   options: {
        scales: {
            yAxes: [{		
             ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
		var ctx = $("#mycanvas");

		var barGraph = new Chart(ctx, {
			type: 'bar',
			data: chartdata
		});
	},
	error: function(data){
		console.log(data);
	}
});
});