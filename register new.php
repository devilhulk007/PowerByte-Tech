<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PowerByte &mdash; Technologies :: Sign up</title>
  <link rel="stylesheet" type="text/css" href="sign_in.css">
  <!--link rel="icon" type="image/x-icon" href="v1.ico"-->
</head>
<body>
          <!--toggle switch for light and dark theme>
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
           //toggle switch for light and dark theme -->
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
         <h1><a rel="dofollow"> P O W E R B Y T E &mdash; T E C H N O L O G I E S</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign up to your account</span>
              <?php

                    if(isset($_POST['continue']))
                    {
                      $nm=$_POST['u_name'];
                      $e=$_POST['u_email'];
                      $ps=$_POST['u_pass'];
                      $co=$_POST['u_num'];
                      $g=$_POST['u_gnd'];
                      $add=$_POST['u_add'];
                      $ct=$_POST['u_city'];
                      $st=$_POST['u_state'];

                      //$mdps=md5($ps);
                      $cn=mysqli_connect("localhost","root","","powerbyte technologies");
                      $db=mysqli_select_db($cn,"powerbyte technologies");
                      $q="insert into registration_details values('','$nm','$e','$ps','$co','$g','$add','$ct','$st')";
                      $a=mysqli_query($cn,$q);
                      
                      if($a) {
                        echo "<script>alert('Data Inserted Successfully.'); window.location = 'http://localhost/PowerByte Technologies/login2.php';</script>";
                      } 
                      else {
                        echo "<script>alert('Some Error Occured, Please try again...')</script>";
                      }
                    }

                ?>
              <form id="stripe-login" action="#" method="post">
                <!--Fname-->
                <div class="field padding-bottom--24">
                  <label for="First Name">User Name</label>
                  <input type="text" name="u_name" placeholder="Enter User Name">
                </div>
              <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_name'])) 
                  {
                  echo '<span style="color:red;">Username is
                  required</span>';
                  }
                }
              ?>

                 <!--Lname-->
                <!--div class="field padding-bottom--24">
                  <label for="Last Name">Last Name</label>
                  <input type="text" name="Last_Name" placeholder="Last Name" required="">
                </div-->
                <!--Dept-->
                <!--div class="field padding-bottom--24">
                  <label for="Dept">Department</label>
                  <input type="text" name="Dept" placeholder="Department" required="">
                </div>
                <Grno>
                <div class="field padding-bottom--24">
                  <label for="Dept">Gr No</label>
                  <input type="text" name="Gr_No" placeholder="Gr No" required="">
                </div-->
                <!--Email-->
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="text" name="u_email" placeholder="Enter E-Mail ID">
                </div>
                <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_email'])) 
                  {
                  echo '<span style="color:red;"> Email is
                  required</span>';
                  }
                }
              ?>
                <!--password-->
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                    <!--div class="reset-pass">
                      <a href="#">Forgot your password?</a>
                    </div-->
                  </div>
                  <input type="password" name="u_pass" placeholder="Enter Password" required="" id="myInput"><div class="grid--50-50"><input type="button" onclick="myFunction()" value="Show"> </div></td></tr>
                  <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_pass'])) 
                  {
                  echo '<span style="color:red;">Password is
                  required</span>';
                  }
                }
              ?>
                    <script type="text/javascript">
                      function myFunction() 
                      { 
                        var x = document.getElementById("myInput");
                      if (x.type === "password") 
                      {
                        x.type = "text";
                      } 
                      else 
                      {
                        x.type = "password";
                      }
                    }</script>
                </div>
                <!--Cntc-->
                <div class="field padding-bottom--24">
                  <label for="Contact">Contact</label>
                  <input type="tel" name="u_num" placeholder="Enter Contact">
                </div>
                <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_num'])) 
                  {
                  echo '<span style="color:red;">Contact is
                  required</span>';
                  }
                }
              ?>
                <!--Cntc-->
                <div>
                  <label for="Gender">Gender</label>
                  <input type="radio" id="male "name="u_gnd" value="male" id="u_gnd" >Male
                  <input type="radio" id="female "name="u_gnd" value="female" id="u_gnd">FeMale

                </div>
                <?php

                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_gnd'])) 
                  {
                  echo '<span style="color:red;">Gender is
                  required</span>';
                  }
                }
              ?>
              <br>
                <!--div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Re-Enter Password</label>
                    <div class="reset-pass">
                      <a href="#">Forgot your password?</a>
                    </div>
                  </div>
                <input type="password" name="CPassword" placeholder="Re-Enter Password" required="" id="myInput"><div class="grid--50-50"><input type="button" onclick="myFunction()" value="Show"> </div></td></tr>
      <script type="text/javascript">
        function myFunction() 
        { 
          var x = document.getElementById("myInput");
        if (x.type === "password") 
        {
          x.type = "text";
        } 
        else 
        {
          x.type = "password";
        }
      }</script>
                </div-->
                <!--div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="checkbox"> Stay signed in for a week
                  </label>
                </div-->
                <!--Address-->
                <div class="field padding-bottom--24">
                <label for="c_message">Address</label>
                <input type="text" name="u_add" placeholder="Enter Address">
                    <!--textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea-->
                </div>
                <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_add'])) 
                  {
                  echo '<span style="color:red;">Address is
                  required</span>';
                  }
                }
              ?>
                <div class="field padding-bottom--24">
                  <label for="City">City</label>
                  <input type="text" name="u_city" placeholder="City">
                </div>
                <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_city'])) 
                  {
                  echo '<span style="color:red;">City is
                  required</span>';
                  }
                }
              ?>
                <div class="field padding-bottom--24">
                  <label for="State">State</label>
                  <input type="tel" name="u_state" placeholder="Enter State">
                </div>
                <?php  
                if (isset($_POST['continue'])) 
                {
                   if (empty($_POST['u_state'])) 
                  {
                  echo '<span style="color:red;">State is
                  required</span>';
                  }
                }
              ?>
                <div class="field padding-bottom--24">
                  <input type="submit" name="continue" value="continue">
                </div>
                <input type="reset" name="reset" value="Reset">
                <!--div class="field padding-bottom--24">
                  
                </div-->
                <!--div class="field">
                  <a class="ssolink" href="#">Use single sign-on (Google) instead</a>
                </div-->
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Have An Exixting Account? <a href="login2.php">Sign In</a><br><a href="http://localhost/PowerByte Technologies/index.php">Go Back</a></br></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="http://localhost/PowerByte Technologies/index.php">© PowerByte &mdash; Technologies</a></span>
              <span><a href="contact.php">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

