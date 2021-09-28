<?php
$servername = "localhost";
$username = "root";
$password = "1qaz2wsx";
$dbname = "CVMS";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$dbname);

//Check connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?> 