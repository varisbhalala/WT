<!DOCTYPE html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
<body>
  
	<?php
	    include 'header.php';
	?>
	<center>
	<?php
		//if (isset($_SESSION['user'])) {
			$code = $_REQUEST['doctorid'];
			//echo $code;		
			$db = mysqli_connect('localhost','root','');

	        if (!$db)
	        {
	          print "<h1>Unable to Connect to MySQL</h1>";
	        }

	        $dbname = 'WT';

	        $btest = mysqli_select_db($db,$dbname);

	        if (!$btest)
	        {
	          print "<h1>Unable to Select the Database</h1>";
	        }
	        $statement = "SELECT * FROM doctor_registration WHERE username = '$code'";
			$result = mysqli_query($db, $statement);
	          if (mysqli_num_rows($result) > 0) {
		          $i=0; 
		          $row=mysqli_fetch_array($result,MYSQLI_NUM);	    
			       //while($row) {
			        echo "<center><table style='margin-top:20px;margin-bottom:15px;'>";
	            echo '<tr>';
	            echo '<td rowspan="3" style="padding-right:40px;">';
	            echo "<img height='160px' width='100px' src='/WT/uploaded/".$row[2]."'>";
	            echo "</td><td colspan='2'>";
	            echo $row[3];
	            echo "</td>";
	            echo "<td>Address:";
	            echo $row[8];
	            echo "</td>";
	            echo "<td>working days:";
	            echo $row[11];
	            echo "</td>";
	            echo "</tr>";
	            echo '<tr>';
	            echo '<td style="padding-right:20px;">experience:';
	            echo $row[5];
	            echo "</td>";
	            echo '<td style="padding-right:20px;">hospital:';
	            echo $row[7];
	            echo "</td>";
	            echo '<td>fees:';
	            echo $row[9];
	            echo "</td>";
	            echo '<td>start time:';
	            echo $row[13];
	            echo "</td>";
	            echo "</tr>";
	            echo '<tr>';
	            echo '<td>Degree:';
	            echo $row[4];
	            echo "</td>";
	            echo '<td>Speciality:';
	            echo $row[6];
	            echo "</td>";
	            echo '<td style="padding-right:20px;">Contact no:';
	            echo $row[10];
	            echo "</td>";
	            echo '<td>End time:';
	            echo $row[14];
	            echo "</td>";
	            echo '</tr>';
	            $name = $row[0];
	            echo '<tr>';
	            echo "<td style='text-align:center;' colspan='5'>";
	            echo "</td></tr>";
	            echo "</table>";
	            echo "<h1>Today's Time Table</h1>";
	            echo "<table style='margin-top:20px;'>";
	            echo "<tr>";
	            for ($i=$row[12]-1; $i < $row[13]-1 ; $i++) { 
	            	echo "<th>";
	            	echo $i+1;
	            	echo " to ";
	            	echo $i+2;
	            	echo "</th>";
	            }
	            echo "</tr>";
	            echo "<tr>";
	            $starttime = $row[12];
	            $endtime = $row[13];
	            if ($starttime == 10) {
	            	$time = 14;
	            }
	            if ($starttime == 11) {
	            	$time = 15;
	            }
	            if ($starttime == 12) {
	            	$time = 16;
	            }
	            if ($starttime == 1) {
	            	$time = 17;
	            }
	            if ($starttime == 2) {
	            	$time = 18;
	            }
	            if ($starttime == 3) {
	            	$time = 19;
	            }
	            if ($starttime == 4) {
	            	$time = 20;
	            }
	            if ($starttime == 5) {
	            	$time = 21;
	            }
	            if ($starttime == 6) {
	            	$time = 22;
	            }
	     
	            //$timediff = $endtime -$starttime;
	            for ($i=$row[12]-1; $i < $row[13]-1 ; $i++) { 

	            	echo "<td style='padding-right:5px;'>";
	            	//echo "<a href='availability.php?doctorid=$name&starttime=$starttime&endime=$endtime'>check availibility </a>";
	            	echo '<a href="available.php?time='.$time.'&doctorid='.$code.'">'.$row[$time].'</a>';
	            	$time++;
	            	echo "</td>";
	            }
	            echo "</tr>";
	            echo "</table>";
	            echo "</center>";
			}
	            
			  // }		//}
		//else
		//{
		//	echo "Please Login first";
		//}
	?>
	</center>
	<?php
      include 'footer.php';
    ?>
</body>
</html>