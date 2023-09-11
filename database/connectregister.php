<?php
$servername = "localhost:3306";
$username_db = "root";
$password_db = "";
$database_name = "db_sekolah";

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die("Koneksi database gagal : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into admin(email, username, password) values(?,?,?)");
    $stmt->bind_param("sss", $email, $name, $password);
    $stmt->execute();
    echo "Register berhasil";
    $stmt->close();
    $conn->close();
}
