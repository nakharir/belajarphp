<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "toko_saya";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    echo"koneksi rusak bree";
    die("errorr!");
}
?>