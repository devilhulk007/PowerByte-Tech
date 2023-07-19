<?php
//session_start();
if(isset($_POST['continue']))
{
  //$u_id=$_POST['u_id'];
  $e=$_POST['email'];
  $ps=$_POST['password'];
  //$mdpw=md5($pw);

         $conn=mysqli_connect("localhost","root","","powerbyte technologies");

         $q="select * from registration_details where u_email='$e' AND u_pass='$ps'";
         //echo $q;(ID='$di', )

         $c=mysqli_query($conn,$q);
         $r=mysqli_num_rows($c);
?>
     <!--p><?php //echo $r; ?></p-->
  <?php
     if($r>=1)
     {
       //echo "Login successfull";
      //$_SESSION['login']=$e;

        ?>
       <script>
       alert('Welcome to Student panel,You are loged in.... ');
       window.location='http://localhost/PowerByte Technologies/index.php';
       </script>
       <?php       
     }
     //echo $c;
    else
    {
      ?>
      <script>alert('Invalid UserName and Password. PLZ Check Your UserName and Password.'); 
    window.location = 'http://localhost/PowerByte Technologies/session.php';</script>    
    <?php 
    }
}
?>