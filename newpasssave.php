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
      if (isset($_POST['newpass']))
      {
            $newpass = trim($_POST['newpass']);
      } else {
            echo "enter answer";
      }
      $sql = "UPDATE successregistration SET password = '".$newpass."' WHERE username = '".$_SESSION['user1']."'";
      if (mysqli_query($db,$sql)) {
            header('location:/WT/option.php'); 
      }
?>