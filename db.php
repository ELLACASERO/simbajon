 <?php

 $hostName = "localhost";
 $dbUser =  "root"; 
 $dbPassword = "";
 $dbName = "bogo";
 $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
 if (!$conn) {
    die("kalasag_bogo_nimo_oy!!;");
 }
echo"congratulations negga!";

 ?>