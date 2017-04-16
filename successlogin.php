<?php
  session_start();
 //include 'header.php';
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

  if (isset($_POST['username']) && isset($_POST['password']))
  {
    $uname = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $sql = "SELECT username FROM successregistration WHERE username = '$uname' and password = '$pass'";
    $result = mysqli_query($db,$sql);
    $num_rows = mysqli_num_rows($result);
    //echo $num_rows;
    if($num_rows == 1)
    {
      //echo 'logged in';
      $_SESSION['user'] = $uname;
      header('location:/WT/index.php');
    }
    else
    {
      header('location:/WT/forgotpassword.php'); 
    }

  } 
      


//      include 'footer.php';
?>
