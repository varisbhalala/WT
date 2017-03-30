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
      $uname = $_POST['username'];
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
        echo "hihhhhhh".$uname;
      if (isset($uname))
      {
        $uname = trim($uname);
      } 
      else {
        $uname = '';
      }
      echo "byeeeee".$uname;
       $statement = "select securityquestion from successregistration where username = '".$uname."'";
      $result = mysqli_query($db,$statement);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      echo $row["securityquestion"];
      
    ?>
    <?php
      include 'footer.php';
    ?>

  </body>
</html>