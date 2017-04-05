<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

 <?php
      include 'header.php';
 ?>
 <p align="center" style="font-size: 30px;color: #4286f4;padding-top: 30px;">Contact Us</p>
 <form action="contactusstore.php" method="post" enctype="multipart/form-data">
	<table align="center" style="margin-top: 30px;">
	
	<tr>
		<td>Full name</td>
		<td><input type="text" name="name" placeholder="Full name" required="true"></td>
	</tr>
	
	
	<tr>
		<td>Contact no.</td>
		<td><input type="number" name="callno" placeholder="Contact number"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" placeholder="Email" required="true"></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><textarea placeholder="Message" rows="5" cols="40" required="true" name="message"></textarea></td>
	</tr>
	
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
	</table>
</form>
<?php
      include 'footer.php';
      ?>

      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
</body>
</html>