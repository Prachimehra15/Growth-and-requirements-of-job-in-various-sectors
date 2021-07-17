<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
$servername ="localhost";
$username ="root";
$password ="";
$database ="Loginsystem";
    $con = mysqli_connect("localhost","root","","Loginsystem");
    // Check connection
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
