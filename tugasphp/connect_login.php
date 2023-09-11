<?php
include 'conncect.php';

$email = $_POST['email'];
$password = $_POST['password'];

if ($con->connect_error) {
    die("Koneksi database gagal : " . $con->connect_error);
} {
    $stmt = $con->prepare("select * from supervisor where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($data['password'] === md5($password)) {
            $_SESSION["logged_in"] = true;
            header("location: read.php");
            exit();
        } else {
            $_SESSION["login_error"] = "Invalid username or password";
            header("location: login.php");
            exit();
        }
    } else {
        $_SESSION["login_error"] = "Invalid username or password";
        header("location: login.php");
        exit();
    }
}
