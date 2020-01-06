<?php
// define('HOST','localhost');
// define('USER','iniwrndp');
// define('PASS','QL6yVxglnBFl');
// define('DB','iniwrndp_android');

//Define your host here.
$servername = "localhost";
//Define your database username here.
$username = "root";
//Define your database password here.
$password = "";
//Define your database name here.
$dbname = "data_kepegawaianpm";
 
// $conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
// $conn = new mysqli($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
        die("Database connnection failed " . "(" .
            mysqli_connect_error() . " - " . mysqli_connect_errno() . ")"
                );
    }
?>