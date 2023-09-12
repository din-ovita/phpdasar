<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from siswa where id_siswa=$id";
$result_data = mysqli_query($con, $get_data);
$row = mysqli_fetch_assoc($result_data);
$nama_siswa = $row['nama_siswa'];
$nisn = $row['nisn'];
$gender = $row['gender'];

if (isset($_POST['submit'])) {
    $input_nama_siswa = $_POST['nama'];
    $input_nisn = $_POST['nisn'];
    $input_gender = $_POST['gender'];
    $input_id_kelas = $_POST['id_kelas'];
    $sql = "update siswa set id_siswa=$id, nama_siswa='$input_nama_siswa', gender='$input_gender', nisn='$input_nisn', id_kelas='$input_id_kelas' where id_siswa=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: siswa.php');
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
        <form action="" method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama_siswa?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" name="nisn" id="nisn" class="form-control" value="<?php echo $nisn?>">
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="from-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="<?php echo $gender?>" selected>Pilih Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="id_kelas" class="form-select">
                    <option selected>Pilih Kelas</option>
                    <?php
                    $sql = "select * from kelas";
                    $result = mysqli_query($con, $sql);
                    foreach ($result as $row) :
                    ?>
                        <option value="<?= $row['id'] ?>"><?= $row['tingkat_kelas'] . ' ' . $row['jurusan_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>
</body>

</html>