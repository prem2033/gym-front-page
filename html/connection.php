<?php
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "login";
$connection=false;
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn->connect_error) {
     $connection=true;
}
 ?>