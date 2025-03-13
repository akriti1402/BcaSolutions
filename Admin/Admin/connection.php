<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "epiz_33848685_bcasolutions";

// $conn = mysqli_connect($host , $username , $password, $db);
// or another method to connect 
$conn = new mysqli($host, $username, $password, $db);
if (!$conn) {
    die(mysqli_error($conn));
} 
// else {
 //    echo "Connection Successfull!!";
 //}
