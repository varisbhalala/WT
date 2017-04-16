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
    include 'header.php';
  ?>
  <center>
    <form action="change_pass.php" method="post">
    <?php
      //session_start();
     
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
      if (isset($_POST['uname']))
      {
            $uname = trim($_POST['uname']);
      } else {
            echo "enter username";
      }
      $_SESSION['user1']=$uname;
      $sql = "SELECT securityquestion FROM successregistration WHERE username = '$uname'";
      $result = mysqli_query($db,$sql);
      if (mysqli_num_rows($result) > 0) {
            
        while($row = mysqli_fetch_assoc($result)) {
          echo $row["securityquestion"];
        }
      }
    ?>
    <input type="text" name="answer">
    <input type="submit">
  </form>
  </center>
  <?php
    include 'footer.php';
  ?>
</body>
</html>