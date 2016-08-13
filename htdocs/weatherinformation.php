<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>weather information</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">中原大學巨量資料管理學程-wilson 威神小組</a>
        </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>氣候與蔬果價量的預測：時間序列分析</h1>
	 <h1>Weather Informaion</h1>
	<div>
	<?php
		print <<< HERE
		<table border = "1">
		<tr>
		<th>Unnamed</th>
		<th>date</th>
		<th>avg_max_temp</th>
		<th>avg_min_temp</th>
		<th>avg_rain</th>
		<th>max_wild</th>
		<th>price</th>
		<th>lbl_max_temp</th>
		<th>lbl_min_temp</th>
		<th>lbl_avg_rain</th>
		<th>lbl_max_wind</th>
	</tr>
HERE;
  $data = file("testing_weather1.csv");
  foreach ($data as $line){
  $lineArray = explode("\t", $line);
  list($Unnamed, $date, $avg_max_temp, $avg_min_temp, $avg_rain, $max_wild, $price, $lbl_max_temp, $lbl_min_temp, $lbl_avg_rain, $lbl_max_wind) = $lineArray;
  print <<< HERE
   <tr>
   <td>$Unnamed</td>
   <td>$date</td>
   <td>$avg_max_temp</td>
   <td>$avg_min_temp</td>
   <td>$avg_rain</td>
   <td>$max_wild</td>
   <td>$price</td>
   <td>$lbl_max_temp</td>
   <td>$lbl_min_temp</td>
   <td>$lbl_avg_rain</td>
   <td>$lbl_max_wind</td>
   
   </tr>
HERE;
  } // end foreach
  //print the bottom of the table
  print "</table> \n";
 ?>
 </div>
	
	  <footer>
        <p>&copy; 2016 Bigdata-Wilson, Inc. picture source：pinterest</p>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>