<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database = "db_sekolah";

$con = new mysqli($servername, $username_db, $password_db, $database);

if($con->connect_error) {
    die("Koneksi database gagal : " . $con->connect_error);
}
?>