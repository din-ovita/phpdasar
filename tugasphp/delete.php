<?php
include 'conncect.php';
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "delete from siswasekolah where id=$id";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('location: read.php');
    } else {
        die($con->connect_error);
    }
}
