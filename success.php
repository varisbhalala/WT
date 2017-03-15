<!DOCTYPE html>
<html>
<head>
	<title>registred</title>
</head>
<body>
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


// if (empty($uname) || empty($pass) || empty($name)  || empty($degree) || empty($expi) || empty($profession) || empty($hospital) || empty($address) || empty($fee) || empty($days) || empty($starttime) || empty($endtime))
// {
// 	$rtncode = '';
// } else {
	$rtncode = insertDoctor($db, $uname, $pass, $name ,$degree ,$expi ,$profession ,$hospital ,$address ,$fee ,$days ,$starttime ,$endtime);
// }
?>
</body>
</html>
<?php



function insertDoctor($db, $uname, $pass, $name ,$degree ,$expi ,$profession ,$hospital ,$address ,$fee ,$days ,$starttime ,$endtime)
{
	$statement = "insert into doctorregistration values( '".$uname."','".$pass."','".$name."','".$degree."','".$expi."','".$profession."','".$hospital."','".$address."','".$fee."','".$days."','".$starttime."','".$endtime."')";

	$result = mysqli_query($db,$statement);

	if ($result)
	{
		echo "Doctor Added: ".$name;
	}
	// else {
	// 	$errno = mysqli_errno($db);

	//     if ($errno == '1062') {
	// 		echo "<br>Doctor is already in Table: <br />".$name;
	// 	} else {
	// 		echo("<h4>MySQL No: ".mysqli_errno($result)."</h4>");
	// 		echo("<h4>MySQL Error: ".mysqli_error($result)."</h4>");
	// 		echo("<h4>SQL: ".$statement."</h4>");
	// 		echo("<h4>MySQL Affected Rows: ".mysqli_affected_rows($result)."</h4>");
	// 	}
		return 'NotAdded';
	
}


?>