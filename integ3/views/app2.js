$(document).ready(function(){
$.ajax({
	url: "http://localhost/chart2/data.php",
	method: "GET",
	success: function(data){
		console.log(data);
		var NomC = [];
		var count = [];
		for(var i in data){
			NomC.push(data[i].NomC);
			count.push(data[i].count);
		}
		var chartdata = {
			labels: NomC,
			datasets : [
			{
				label : 'categories des produits',
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