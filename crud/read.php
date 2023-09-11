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
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">READ</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Alamat Sekolah</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = "select * from sekolah";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $nama_sekolah = $data['nama_sekolah'];
                        $alamat_sekolah = $data['alamat_sekolah'];
                        echo '
                        <tr>
                        <td>' . $nama_sekolah . '</td>
                        <td>' . $alamat_sekolah . '</td>
                        <td class="text-center">
                        <a href="update.php?id=' . $id . '" class="btn btn-sm btn-primary ">Update</a>
                        <button onClick="hapus(' . $id . ')" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                        </tr>
                        ';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin dihapus?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>
</body>

</html>