<?php
$local = "localhost";
$username = "root";
$pass = "";
$database = "marco_311810411";

$tersambung = mysqli_connect($local, $username,$pass,$database);

if(mysqli_connect_error($tersambung)){
    echo "Database tidak tersambung".mysqli_connect_error();
}
?>