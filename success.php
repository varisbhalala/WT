<!DOCTYPE html>
<html lang="en">
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
		<?php
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

			if (isset($_POST['username']))
			{
				$uname = trim($_POST['username']);
			} else {
				$uname = '';
			}
			if (isset($_POST['password']))
			{
				$pass = trim($_POST['password']);
			} else {
				$pass = '';
			}
			if (isset($_POST['name']))
			{
				$name = trim($_POST['name']);
			} else {
				$name = '';
			}
			if (isset($_POST['degree']))
			{
				$degree = trim($_POST['degree']);
			} else {
				$degree = '';
			}
			if (isset($_POST['experience']))
			{
				$expi = trim($_POST['experience']);
			} else {
				$expi = '';
			}
			if (isset($_POST['profession']))
			{
				$profession = trim($_POST['profession']);
			} else {
				$profession = '';
			}
			if (isset($_POST['hospital']))
			{
				$hospital = trim($_POST['hospital']);
			} else {
				$hospital = '';
			}
			if (isset($_POST['address']))
			{
				$address = trim($_POST['address']);
			} else {
				$address = '';
			}
			if (isset($_POST['fee']))
			{
				$fee = trim($_POST['fee']);
			} else {
				$fee = '';
			}
			if (isset($_POST['callno']))
			{
				$callno = trim($_POST['callno']);
			} else {
				$callno = '';
			}
			if (isset($_POST['days']))
			{
				$days = trim($_POST['days']);
			} else {
				$days = '';
			}
			if (isset($_POST['starttime']))
			{
				$starttime = trim($_POST['starttime']);
			} else {
				$starttime = '';
			}
			if (isset($_POST['endtime']))
			{
				$endtime = trim($_POST['endtime']);
			} else {
				$endtime = '';
			}
			if (isset($_POST['slot1']))
			{
				$slot1 = ($_POST['slot1']);
			}
			else{
				$slot1 = '';	
			}
			if (isset($_POST['slot2']))
			{
				$slot2 = ($_POST['slot2']);
			}
			else{
				$slot2 = '';	
			}
			if (isset($_POST['slot3']))
			{
				$slot3 = ($_POST['slot3']);
			}
			else{
				$slot3 = '';	
			}
			if (isset($_POST['slot4']))
			{
				$slot4 = ($_POST['slot4']);
			}
			else{
				$slot4 = '';	
			}
			if (isset($_POST['slot5']))
			{
				$slot5 = ($_POST['slot5']);
			}
			else{
				$slot5 = '';	
			}
			if (isset($_POST['slot6']))
			{
				$slot6 = ($_POST['slot6']);
			}
			else{
				$slot6 = '';	
			}
			if (isset($_POST['slot7']))
			{
				$slot7 = ($_POST['slot7']);
			}
			else{
				$slot7 = '';	
			}
			if (isset($_POST['slot8']))
			{
				$slot8 = ($_POST['slot8']);
			}
			else{
				$slot8 = '';	
			}
			if (isset($_POST['slot9']))
			{
				$slot9 = ($_POST['slot9']);
			}
			else{
				$slot9 = '';	
			}
			$imagename = $_FILES["image"]["name"];
			$type = $_FILES["image"]["type"];
			$tmp = $_FILES["image"]["tmp_name"];
			$error = $_FILES["image"]["error"];
			if ($error > 0) {
				echo " not uploaded";
			}
			else if(($type == "image/jpeg") || ($type == "image/png"))
			{
				move_uploaded_file($tmp, "/opt/lampp/htdocs/WT/uploaded/".$imagename); 
				//echo "uploaded";
			}
			else{
				echo "upload image";
			}
			// $rtncode = insertDoctor($db, $uname, $pass,$imagename, $name ,$degree ,$expi ,$profession ,$hospital ,$address ,$fee ,$callno,$days ,$starttime ,$endtime );
		


		
			// function insertDoctor($db, $uname, $pass,$imagename, $name ,$degree ,$expi ,$profession ,$hospital ,$address ,$fee ,$callno,$days ,$starttime ,$endtime)
			// {
		   	$statement = "insert into doctor_registration values( '".$uname."','".$pass."','".$imagename."','".$name."','".$degree."','".$expi."','".$profession."','".$hospital."','".$address."','".$fee."','".$callno."','".$days."','".$starttime."','".$endtime."','".$slot1."','".$slot2."','".$slot3."','".$slot4."','".$slot5."','".$slot6."','".$slot7."','".$slot8."','".$slot9."')";
		   
			$result = mysqli_query($db,$statement);


			if ($result)
			{
				//echo "Doctor Added: ".$name;
				echo '<center>';
				echo '<table style="margin-top:50px;margin-bottom:50px;">';
				echo '<tr>';
				echo '<td rowspan=11 style="padding:50px;">';
				$img = "/WT/uploaded/".$imagename;
				echo '<img src="'.$img.'" width="160px" height="160px">';
				echo '</td>';
				echo '<td>Name:</td><td>';
				echo ''.$name.'';
				echo '</td>';
				echo '</tr>';
				echo '<tr><td>Degree:</td><td>';
				echo ''.$degree.'';
				echo '</td></tr>';
				echo '<tr><td>Experience</td><td>'; 
				echo ''.$expi.'';echo '</td></tr>';
				echo '<tr><td>profession:</td><td>'; 
				echo ''.$profession.'';echo '</td></tr>';
				echo '<tr><td>hospital:</td><td>'; 
				echo ''.$hospital.'';echo '</td></tr>';
				echo '<tr><td>Address:</td><td>'; 
				echo ''.$address.'';echo '</td></tr>';
				echo '<tr><td>Fee:</td><td>'; 
				echo ''.$fee.'';echo '</td></tr>';
				echo '<tr><td>Contact No.:</td><td>'; 
				echo ''.$callno.'';echo '</td></tr>';
				echo '<tr><td>Working days:</td><td>'; 
				echo ''.$days.'';echo '</td></tr>';
				echo '<tr><td>Start time:</td><td>'; 
				echo ''.$starttime.'';echo '</td></tr>';
				echo '<tr><td>end time:</td><td>'; 
				echo ''.$endtime.'';echo '</td></tr>';
				echo '</td></tr></table></center>';
			}
			else {
				$errno = mysqli_errno($db);

			    if ($errno == '1062') {
					echo "<br>Doctor is already in Table: <br />".$name;
				} else {
					echo("<h4>MySQL No: ".mysqli_errno($result)."</h4>");
					echo("<h4>MySQL Error: ".mysqli_error($result)."</h4>");
					echo("<h4>SQL: ".$statement."</h4>");
					echo("<h4>MySQL Affected Rows: ".mysqli_affected_rows($result)."</h4>");
				}
				return 'NotAdded';
				
			}


		?>
		<?php
			include 'footer.php';
		?>


	</body>
</html>	