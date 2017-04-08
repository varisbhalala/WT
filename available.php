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
  ?>
  <center>
  <?php
     
    //echo $code;
    //echo $name;   
    $db = mysqli_connect('localhost','root','');

          if (!$db)
          {
            print "<h1>Unable to Connect to MySQL</h1>";
          }

          $dbname = 'WT';
          
          $timename = $_REQUEST['time'];
          $name = $_REQUEST['doctorid'];
          //echo $timename;
          //echo $name;
          $btest = mysqli_select_db($db,$dbname);

          if (!$btest)
          {
            print "<h1>Unable to Select the Database</h1>";
          }
          $statement = "SELECT * FROM doctor_registration WHERE username = '$name'";
          $result = mysqli_query($db, $statement);
            if (mysqli_num_rows($result) > 0) {
               
              $row=mysqli_fetch_array($result,MYSQLI_NUM);
              //echo $row[0];
              //$statement1 = 'UPDATE doctor_registration set "'.$row[$code].'"="Booked" WHERE username = "'.$name.'"';
              if ($timename == 14) {
                $colname = 's1_to_e1';
              }
              
              if ($timename == 15) {
                $colname = 's2_to_e2';
              }
              
              if ($timename == 16) {
                $colname = 's3_to_e3';
              }
              
              if ($timename == 17) {
                $colname = 's4_to_e4';
              }
              
              if ($timename == 18) {
                $colname = 's5_to_e5';
              }
              
              if ($timename == 19) {
                $colname = 's6_to_e6';
              }
              
              if ($timename == 20) {
                $colname = 's7_to_e7';
              }
              
              if ($timename == 21) {
                $colname = 's8_to_e8';
              }
              
              if ($timename == 22) {
                $colname = 's9_to_e9';
              }
              
              $statement1 = 'UPDATE doctor_registration set '.$colname.' = "Booked" WHERE username = "'.$name.'"';
              $result1 = mysqli_query($db, $statement1);
              if ($result1 > 0) {
                echo "Appointment Booked";
              }
              else {
                //echo $timename;
                echo "Error occured";
              }
            }
  ?>
  </center>
  <?php
      include 'footer.php';
    ?>
</body>
</html>