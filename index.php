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
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="images" src="images/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="images" src="images/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="images" src="images/slide3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      

    
        <p class="mainname">Find and Book</p>
        <div class="row" id="searchbar">
        
            <form class="form-inline" action="list.php" method="post">
              <button class="btn" type="button" data-toggle="collapse" data-target="#city" aria-expanded="false" aria-controls="city" >
                <img src="images/pin.png" width="7%" height="4%"> City
              </button>
              <select name="by" style="margin-left: 20px">
                <option value="by_name" selected>By Name</option>
                <option value="by_speciality">By Speciality</option>
                <option value="by_area">By Area</option>
              </select>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" size="40" style="margin-left: 20px;" name="search">
                <button class="button button2 my-2 my-sm-0" type="submit">Search</button>
              </form>
            
        </div>
        <div class="row">
            <div class="collapse" id="city">
              <div class="card card-block">
                <table>
                  <tr>
                    <td width="400px;"><a href="#">Anand</a></td>
                    <td width="400px;"><a href="#">Banglore</a></td>
                    <td><a href="#">Surat</a></td>
                  </tr>
                  <tr>
                    <td width="400px;"><a href="#">Mumbai</a></td>
                    <td width="400px;"><a href="#">Chennai</a></td>
                    <td><a href="#">Delhi</a></td>
                  </tr>
                  <tr>
                    <td width="400px;"><a href="#">Pune</a></td>
                    <td width="400px;"><a href="#">Ahmedabad</a></td>
                    <td><a href="#">Vadodara</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          

          


    <footer style="margin-top: 20px;">
      <div class="row" class="footer">
        <div class="links">
            <p>QUICK LINKS</p>
            <a href="index.php" style="text-decoration: none;">Search the Doctors</a><br>
            <a href="contactus.php" style="text-decoration: none;">Contact Us</a><br>
            <a href="aboutus.php" style="text-decoration: none;">About Us</a>
          </div>
        </div>
      </div>
    </footer>


    <!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>