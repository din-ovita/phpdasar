<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from sekolah where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: read.php');
    } else {
        die($con->connect_error);
    }
}
?>
