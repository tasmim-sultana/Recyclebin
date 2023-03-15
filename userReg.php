<html>
<head>
<link rel="stylesheet" href="css\commonstyle.css" type="text/css">
</head>
<body>

<?php
include("dbConnection.php");
$errors=array();

if( isset($_POST['register_user']) )
{
    

   $username= mysqli_real_escape_string($conn,$_POST['username']);
    $useremail= mysqli_real_escape_string($conn,$_POST['useremail']);
    $userpass= mysqli_real_escape_string($conn,$_POST['userpass']);



 $user_check_query="SELECT * FROM addusers WHERE user_name='$username' or user_email='$useremail' LIMIT 1";
 $result1=mysqli_query($conn,$user_check_query);
 $user=mysqli_fetch_assoc($result1);
 if($user)
 {
     
     if($user['stu_email']=== $stuemail)
     {
         array_push($errors,"This email id already have a registered username");
     }
 }
 if(count($errors)==0)
 {

    $sql= "INSERT INTO addusers(user_name,user_email,user_pass) VALUES ('$username','$useremail','$userpass') ";
    $result2= mysqli_query($conn,$sql);
    if($result2)
    { ?>
         <script type="text/javascript">
        window.alert("User Is Registered Successfully!");
        window.location.href = "index.php";
    </script><?php
        
    }
    else{
        echo "Insertation failed! ". mysqli_error($conn);
    }
}
else{
    foreach ($errors as $error)
    {
        echo "$error <br>";
    }
    
}
}
?>
</body>
</html>
