
<?php
$server="127.0.0.1:3306";
$username="root";
$pass="";
$dbname="recycleBin";
 $conn = mysqli_connect($server,$username,$pass,$dbname);
 if($conn)
 {
     echo "";
 }
 else{
     echo "Not connected";
 }
 ?>
 