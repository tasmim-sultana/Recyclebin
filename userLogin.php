<html>
<head>
<link rel="stylesheet" href="css\commonstyle.css" type="text/css">
</head>
<body>
<?php
if(!isset($_SESSION))
{
    session_start();
}
include("dbConnection.php");
 if(isset($_POST["login_user"]))
 {
     $email=mysqli_real_escape_string($conn,$_POST['userlogemail']);
     $pass=mysqli_real_escape_string($conn,$_POST['userlogpass']);
     $query ="SELECT * FROM addusers WHERE user_email='$email' AND user_pass='$pass'";
     $result=mysqli_query($conn,$query);
       if(mysqli_num_rows($result)>0)
         {
             $_SESSION['userLogEmail']=$email;
             header("location: index.php");
         }
         else{
             
            ?>
            <script type="text/javascript">
           window.alert("User name or password is incorrect!");
           window.location.href = "index.php";
       </script><?php
         }
     }
 ?>
 </body>
 <html>













