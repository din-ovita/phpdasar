<?php
include 'connect.php';
// isset = jika data ada
if (isset($_POST['submit'])) {
    $nama_sekolah = $_POST['nama'];
    $alamat_sekolah = $_POST['alamat'];
    $sql = "INSERT INTO sekolah(nama_sekolah, alamat_sekolah) VALUES ('$nama_sekolah', '$alamat_sekolah')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // pindah path
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
    <title>CREATE</title>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">CREATE</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sekolah</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sekolah</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
</body>

</html>