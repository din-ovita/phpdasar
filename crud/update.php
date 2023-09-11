<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from sekolah where id=$id";
$result_data = mysqli_query($con, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_sekolah = $row['nama_sekolah'];
$alamat_sekolah = $row['alamat_sekolah'];
if(isset($_POST['submit'])) {
    $nama_sekolah = $_POST['nama'];
    $alamat_sekolah = $_POST['alamat'];
    $sql = "update sekolah set id=$id, nama_sekolah='$nama_sekolah', alamat_sekolah='$alamat_sekolah' where id=$id";
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
    <title>UPDATE</title>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">UPDATE</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Sekolah</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama_sekolah?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sekolah</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo$alamat_sekolah ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
</body>

</html>