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

      } else {
        header('location:/WT/forgotpassword.php');  
      }
      


//      include 'footer.php';
    ?>
