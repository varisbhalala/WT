<!DOCTYPE html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style type="text/css">
      table ,th ,td{
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
  
  <?php
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
    if (isset($_POST['by']))
    {
      $select = trim($_POST['by']);
    } else {
      $select = '';
    }
    if (isset($_POST['search']))
    {
      $search = trim($_POST['search']);
    } else {
      $search = '';
    }

    if(isset($select) && isset($search))
    {
      if($select == 'by_name')
      {
        $statement = "SELECT * FROM doctor_registration WHERE fullname = '$search'";
      }
      if($select == 'by_speciality')
      {
        $statement = "SELECT * FROM doctor_registration WHERE speciality = '$search'";
      }
      if($select == 'by_area')
      {
        $statement = "SELECT * FROM doctor_registration WHERE locatedat = '$search'";
      }
      $result = mysqli_query($db, $statement);
      if (mysqli_num_rows($result) > 0) {
        $i=0; 	    
        while($row = mysqli_fetch_assoc($result)) {
          echo "<center><table style='margin-top:20px;margin-bottom:15px;'>";
          echo '<tr>';
          echo '<td rowspan="3" style="padding-right:40px;">';
          echo "<img height='160px' width='160px' src='/WT/uploaded/".$row["imagename"]."'>";
          echo "</td><td colspan='2' style='color:blue'>";
          echo $row["fullname"];
          echo "</td>";
          echo "<td>Address:";
          echo $row["locatedat"];
          echo "</td>";
          echo "<td>working days:";
          echo $row["days"];
          echo "</td>";
          echo "</tr>";
          echo '<tr>';
          echo '<td style="padding-right:20px;">experience:';
          echo $row["experience"];
          echo "</td>";
          echo '<td style="padding-right:20px;">hospital:';
          echo $row["hospitalname"];
          echo "</td>";
          echo '<td>fees:';
          echo $row["fees"];
          echo "</td>";
          echo '<td>start time:';
          echo $row["starttime"];
          echo "</td>";
          echo "</tr>";
          echo '<tr>';
          echo '<td>Degree:';
          echo $row["degree"];
          echo "</td>";
          echo '<td>Speciality:';
          echo $row["speciality"];
          echo "</td>";
          echo '<td style="padding-right:20px;">Contact no:';
          echo $row["contactno"];
          echo "</td>";
          echo '<td>End time:';
          echo $row["endtime"];
          echo "</td>";
          echo '</tr>';
          echo '<tr>';
          echo "<td style='text-align:center;' colspan='5'>";
          $name = $row['username'];
          echo "<a href='book1.php?doctorid=$name'>book now</a>";
          echo "</td></tr>";
          echo "</table></center>";
        }
      }
      else{
        echo "result not found";
      }
    }

  ?>
     
    
  <?php
    include 'footer.php';
  ?>
  </body>
</html>