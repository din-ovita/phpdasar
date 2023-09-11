<?php
include 'conncect.php';

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($con->connect_error) {
    die("Koneksi database gagal : " . $con->connect_error);
} {
    $stmt = $con->prepare("insert into supervisor(email, username, password) values(?,?,?)");
    $stmt->bind_param("sss", $email, $name, md5($password));
    $stmt->execute();
    header('location: login.php');
    $stmt->close();
    $conn->close();
}
