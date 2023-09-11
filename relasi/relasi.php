<?php include 'connect.php' ?>
<!-- untuk menyambungkan antar file -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>READ</title>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-75 m-auto p-3">
        <h3 class="text-center">READ</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NISN</th>
                    <th>Gender</th>
                    <th>Kelas</th>
                    <th>Sekolah</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "select * from siswa 
                INNER JOIN kelas ON siswa.id_kelas = kelas.id
                INNER JOIN sekolah ON kelas.id_sekolah = sekolah.id";
                $result = mysqli_query($con, $sql);
                $no = 1;
                foreach ($result as $row) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_siswa'] ?></td>
                        <td><?= $row['nisn']; ?></td>
                        <td><?= $row['gender']; ?></td>
                        <td><?= $row['tingkat_kelas'] . ' ' . $row['jurusan_kelas']; ?></td>
                        <td><?= $row['nama_sekolah'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
</body>

</html>