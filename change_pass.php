
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
      if (isset($_POST['answer']))
      {
            $answer = trim($_POST['answer']);
      } else {
            echo "enter answer";
      }
      $sql = "SELECT security_answer FROM successregistration WHERE username = '".$_SESSION['user1']."'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                  $ans = $row["security_answer"];
            }
      }
      if ($answer == $ans) {
            header('location:/WT/newpass.php'); 
      }
      else
      {
            echo "enter right answer";
      }
?>