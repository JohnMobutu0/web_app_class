<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "MULUME0DERHWa.M0BUTU";
$dbname = "techshopdb";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect!");
}

?>