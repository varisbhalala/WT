<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
 <form action="success.php" method="post" enctype="multipart/form-data">
	<table align="center" style="margin-top: 30px;">
	<tr>
		<td>username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>upload image</td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td>full name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>degree</td>
		<td><input type="text" name="degree"></td>
	</tr>
	<tr>
		<td>experience</td>
		<td><input type="number" name="experience"></td>
	</tr>
	<tr>								
		<td>profession</td>
		<td><input type="text" name="profession"></td>
	</tr>
	<tr>
		<td>hospital name</td>
		<td><input type="text" name="hospital"></td>
	</tr>
	<tr>
		<td>located at</td>
		<td><textarea rows="5" cols="30" name="address"></textarea></td>
	</tr>
	<tr>
		<td>fees</td>
		<td><input type="number" name="fee"></td>
	</tr>
	<tr>
		<td>Hospital Contact no.</td>
		<td><input type="number" name="callno"></td>
	</tr>
	<tr>
		<td>days of working:</td>
		<td>
	<select name="days">
	<option selected="selected" value="week">Full Week</option>
	<option value="mon-sat">MON-SAT</option>
	<option value="mon-fri">Mon-FRI</option>
	<option value="sun">Sunday</option>
	<option value="mon">Monday</option>
	<option value="tue">Tuesday</option>
	<option value="wed">Wednesday</option>
	<option value="thu"> Thursday</option>
	<option value="fri">Friday</option>
	<option value="str">Saturday</option>
	</select></td>
	</tr>
	<tr>
		<td>working time:Starting from</td>
	<td><input type="number" name="starttime">
	To<input type="number" name="endtime"></td>
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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>