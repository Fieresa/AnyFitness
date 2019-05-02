<!DOCTYPE html>
<html>
<head>
  <title>Chart JS - BarGraph</title>
  <style type="text/css">
    #chart-container{
      width: 640px;
      height:auto;
    }
  </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.9.0.min.js"></script>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="Chart.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript">
$(document).ready ( function() {

  refresh();
   });


function refresh() {


 setTimeout( function() { 

  $('#chart-container').fadeOut('slow').load('bargraph.php').fadeIn('slow');
   refresh();
    }, 5000); 
    }



 </script>
<div id="chart-container">
  <canvas id="mycanvas"></canvas>
</div>
</body>
</html>