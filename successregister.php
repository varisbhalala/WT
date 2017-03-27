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
      $session_start();
      include 'header.php';
      ?>
    
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

      if (isset($_POST['registerusername']))
      {
        $username = trim($_POST['registerusername']);
      } else {
        $username = '';
      }
      if (isset($_POST['registerpass']))
      {
        $pass = trim($_POST['registerpass']);
      } else {
        $pass = '';
      }
      if (isset($_POST['registerconfirmpass']))
      {
        $confirmpass = trim($_POST['registerconfirmpass']);
      } else {
        $confirmpass = '';
      }
      
      if($pass == $confirmpass)
      {
        $passok = $pass;
        $statement = "insert into successregistration values( '".$username."' , '".$passok."' )";
        $result = mysqli_query($db,$statement);
        if ($result)
        {
          //echo "Doctor Added: ".$name;
          echo '<center>';
          echo '<table style="margin-top:50px;margin-bottom:50px;">';
          echo '<tr style="padding:50px;">';
          echo '<td>Added:';
          echo '"'.$username.'"';
          echo '</td>';
          echo '</tr>';
          echo '</table>';
          echo '</center>';
        }
        else {
        $errno = mysqli_errno($db);

          if ($errno == '1062') {
          echo "<br>Doctor is already in Table: <br />".$name;
        } else {
          echo("<h4>MySQL No: ".mysqli_errno($result)."</h4>");
          echo("<h4>MySQL Error: ".mysqli_error($result)."</h4>");
          echo("<h4>SQL: ".$statement."</h4>");
          echo("<h4>MySQL Affected Rows: ".mysqli_affected_rows($result)."</h4>");
        }
        return 'NotAdded';
        }
      }
      else
      {
        echo 'enter same password in password and confirm password field';
      }
      
      ?>
      <?php
      include 'footer.php';
      ?>

      </body>
      </html>