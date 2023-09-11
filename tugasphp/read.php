<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>READ</title>
</head>

<body>
    <section class="bg-gray-50 min-h-screen flex justify-center py-12">
        <div class="bg-gray-100 rounded-2xl shadow-lg w-75 relative">
            <div class="absolute w-1/2 h-10 bg-green-500 rounded-2xl"></div>
            <div class="p-5">
                <div class="flex justify-between">
                    <h2 class="font-bold text-3xl my-4">DATA SISWA</h2>
                    <a href="create.php" class="px-4 py-2 bg-green-500 uppercase text-white font-semibold my-4 rounded-md">ADD</a>
                </div>
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>NISN</th>
                            <th>Class</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        include 'conncect.php';

                        $sql = mysqli_query($con, "select * from siswasekolah");
                        if ($sql) {
                            while ($data = mysqli_fetch_assoc($sql)) {
                                $id = $data['id'];
                                $name = $data['nama'];
                                $tgl_lahir = $data['tgl_lahir'];
                                $alamat = $data['alamat'];
                                $nisn = $data['nisn'];
                                $kelas = $data['kelas'];

                                echo "<tr>
                                <td>" . $name . "</td>
                                <td>" . $tgl_lahir . "</td>
                                <td>" . $alamat . "</td>
                                <td>" . $nisn . "</td>
                                <td>" . $kelas . "</td>
                                <td class='text-center'>                        
                                <a href='update.php?id=" . $id . "' class='btn btn-sm btn-primary '>Update</a>
                                <button onClick='hapus(" . $id . ")' class='btn btn-sm btn-danger'>Delete</button></td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="absolute bottom-5 right-5 p-5">
                <button onClick='logout()' class="btn btn-danger">LOGOUT</button>
            </div>
        </div>
    </section>
    <script>
        function hapus(id) {
            var yes = confirm('Sure deleted?');
            if (yes == true) {
                window.location.href = "delete.php?id=" + id;
            }
        }

        function logout() {
            var yes = confirm('Logout?');
            if (yes == true) {
                window.location.href = "logout.php";
            }
        }
    </script>
</body>

</html>