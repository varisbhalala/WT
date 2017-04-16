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
	<center>
		<form action="security.php" method="post">
			Enter username<input type="text" name="uname">
			<input type="submit">
		</form>
	</center>
	<?php
		include 'footer.php';
	?>
	</body>
</html>