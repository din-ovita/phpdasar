<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("location: login.php");
    exit();
}

include 'conncect.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelas = $_POST['kelas'];
    $nisn = $_POST['nisn'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswasekolah (nama, nisn, kelas, tgl_lahir, alamat) VALUES ('$nama', '$nisn', '$kelas', '$tgl_lahir', '$alamat')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: read.php');
    } else {
        die($con->connect_error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CREATE</title>
</head>

<body class="min-vh-100 d-flex align-items-center bg-gray-50">
    <div class="card w-50 m-auto bg-gray-100 rounded-2xl shadow-lg border-none relative">
        <div class="absolute w-full h-10 bg-green-500 rounded-2xl"></div>

        <div class="p-4">
            <h3 class="font-bold text-2xl mt-5 mb-4">CREATE DATA SISWA</h3>
            <form action="" method="post">
                <div class="mb-3 flex items-center gap-4">
                    <label for="nama" class="form-label w-36">Nama Siswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" required placeholder="Nama Siswa">
                </div>
                <div class="mb-3 flex items-center gap-4">
                    <label for="tgl_lahir" class="form-label w-36 ">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                </div>
                <div class="mb-3 flex items-center gap-4">
                    <label for="alamat" class="form-label w-36">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required placeholder="Alamat Siswa">
                </div>
                <div class="mb-3 flex items-center gap-4">
                    <label for="nisn" class="form-label w-36">NISN Siswa</label>
                    <input type="text" name="nisn" id="nisn" class="form-control" required placeholder="NISN">
                </div>
                <div class="mb-3 flex items-center gap-4">
                    <label for="kelas" class="form-label w-36">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" required placeholder="Kelas">
                </div>
                <button type="submit" name="submit" class="px-4 py-2 bg-green-500 uppercase text-white font-semibold rounded-md my-3">SUBMIT</button>
            </form>
        </div>
    </div>
</body>

</html>