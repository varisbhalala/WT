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

$sql_statement = "select username,password from successregistration where username ='".$uname.'",password = "'.$pass."'";
     $result = mysqli_query($db,$sql_statement);

      if($result > '0')
      {
        //echo 'logged in';
        $_SESSION['user'] = $uname;
        header('location:/WT/index.php');
      }
      else
      {
        header('location:/WT/doctorform.php');
      }
//      include 'footer.php';
    ?>
