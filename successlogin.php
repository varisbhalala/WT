<!DOCTYPE html>
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
        echo 'logged in';
     //   header('Location:/opt/lampp/htdocs/WT/index.php');
      }
    ?>

      </body>
      </html>