<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database_name = "db_sekolah";

    $conn = mysqli_connect($servername, $username_db, $password_db, $database_name);

    if ($conn->connect_error) {
        die("Koneksi database gagal : " . $conn->connect_error);
    } else {
        echo "Koneksi database berhasil";
    }

    ?>