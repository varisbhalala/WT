<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Contact Us</title>
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

			if (isset($_POST['name']))
			{
				$uname = trim($_POST['name']);
			} else {
				$uname = '';
			}
			if (isset($_POST['email']))
			{
				$email = trim($_POST['email']);
			} else {
				$email = '';
			}
			if (isset($_POST['message']))
			{
				$message = trim($_POST['message']);
			} else {
				$message = '';
			}
			
			if (isset($_POST['callno']))
			{
				$callno = trim($_POST['callno']);
			} else {
				$callno = '';
			}
			$statement = "insert into contactus values( '".$uname."','".$email."','".$callno."','".$message."')";
			$result = mysqli_query($db,$statement);
			if ($result)
			{	
				echo "<center style='color:#4286f4;margin-top:40px;'>";
				echo "Thank You! ".$uname;
				echo "<br>";
				echo "Your Contact and Message added in our Database</center>";
			}
			else {
				$errno = mysqli_errno($db);

			    if ($errno == '1062') {
					echo "<br>Sorry something went wrong.<br />".$name;
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