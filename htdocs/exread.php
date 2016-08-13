<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>weather informaiton</title>
</head>
<body>
 <h1>Contacts</h1>
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
</body>
</html>