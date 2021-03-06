<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php"><img src="images/search.png" width="2%" height="2%"> Search and Book</a>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact Us</a>
</div>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded" >
        
  <!--<a class="navbar-brand" href="#">Book My Appointment</a>-->
  <div class="col-md-4">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;<a href="index.php" style="text-decoration:none;padding-left: 30px;color: #4689f4;" id="name">Book My Appointment</a>
    </span>
  </div>
  <div class="col-md-5"></div>
  <div class="col-md-3">
    
  <?php
  //if (session_status()==PHP_SESSION_NONE) {
    # code...
    session_start();
  
    if (isset($_SESSION['user'])) {
      echo 'WelCome '.$_SESSION['user'];
      echo '<a href="logout.php"><button type="button" style="background-color:#008cba;margin-left:20px;">LogOut</button></a>';
    }
    else{
      echo '<a href="doctorform.php" id="login1">For Doctors</a>&nbsp &nbsp &nbsp';
      echo '<button type="button" class="login2 btn-success" data-target="#loginModal" data-toggle="modal">LogIn / Register</button>';
    }
  ?>
  </div>
        
        
</nav>
  <div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog modal-md">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login Or Register</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <!-- Nav tabs -->

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#register" role="tab">Register</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" style="padding-top: 20px;">
          <div class="tab-pane active" id="login" role="tabpanel">
            <form action="successlogin.php" method="post">
              <label for="inputEmail" class="sr-only">User name</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="User name" required autofocus name="username" required="true">
              
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="true"> 
              <br>
              <a href="forgotpassword.php">Forgot Password?</a>
              <input type="submit" value="Sign in">
            </form>
          </div>
          <div class="tab-pane" id="register" role="tabpanel">
            <form method="post" action="successregister.php">
              <label for="inputEmail" class="sr-only">User name</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus name="registerusername">
              
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="registerpass">
              <label for="inputPassword" class="sr-only">Confirm Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required name="registerconfirmpass">
              <label class="sr-only">Security Question</label>
              <select name="security">
                <option value="What was the name of your elementary / primary school?
                  ">What was the name of your elementary / primary school?
                </option>
                <option value="In what city or town does your nearest sibling live?
                " >In what city or town does your nearest sibling live?
                </option>
                <option value="What time of the day were you born? (hh:mm)">What time of the day were you born? (hh:mm)
                </option>
                <option value="What is your pet’s name?">What is your pet’s name?
                </option>
                <option value="In what year was your father born?">In what year was your father born?
                </option>
              </select>
              <input type="text" name="security_answer"><br>
              <input type="submit" value="Sign Up">
            </form>
              
          </div>
        </div>
                
                    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>