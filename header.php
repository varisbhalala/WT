<div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#"><img src="images/search.png" width="2%" height="2%"> Search and Book</a>
      <a href="#">Services</a>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
    </div>

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" >
        
        <!--<a class="navbar-brand" href="#">Book My Appointment</a>-->
        <div class="col-md-4">
          <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;<a style="padding-left: 30px;color: #4689f4;" id="name"> Book My Appointment</a></span>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-3">
          <a href="doctorform.php" id="login1">For Doctors</a>&nbsp &nbsp &nbsp
           <button type="button" class="login2 btn-success" data-target="#loginModal" data-toggle="modal">LogIn / Register</button>
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
            <form action="successlogin" method="post">
              <label for="inputEmail" class="sr-only">User name</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="User name" required autofocus name="username">
                
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
            
            
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