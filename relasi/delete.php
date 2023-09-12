<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from siswa where id_siswa=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: siswa.php');
    } else {
        die($con->connect_error);
    }
}
?>
