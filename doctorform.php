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
<form action="success.php" method="post">
	username<input type="text" name="username">
	password<input type="password" name="password">
	full name<input type="text" name="name"><br>
	degree<input type="text" name="degree"><br>
	experience<input type="number" name="experience"><br>													profession<input type="text" name="profession"><br>
	hospital name<input type="text" name="hospital"><br>
	located at<textarea rows="5" cols="30" name="address"></textarea><br>
	fee<input type="number" name="fee">
	days of working:<br>
	Monday<input type="checkbox" name="days" value="MON">
	Tuesday<input type="checkbox" name="days" value="TUE">
	Wednesday<input type="checkbox" name="days" value="WED">
	Thursday<input type="checkbox" name="days" value="THU">
	Friday<input type="checkbox" name="days" value="FRI">
	Saturday<input type="checkbox" name="days" value="SAT">
	Sunday<input type="checkbox" name="days" value="SUN"><br>
	working time:
	Starting from<input type="number" name="starttime">
	To<input type="number" name="endtime"><br>
	<input type="submit">
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