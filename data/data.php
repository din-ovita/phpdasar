<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "produk");

// ambil data 
$result = mysqli_query($conn, "SELECT * FROM user");
// var_dump($result);

// ambil data (fetch)
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while ($user = mysqli_fetch_assoc($result)) {
//     var_dump($user);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar User</h1>
    <table style="border: 1px solid; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid;">No</th>
            <th style="border: 1px solid;">Username</th>
            <th style="border: 1px solid;">Email</th>
            <th style="border: 1px solid;">Password</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td style="border: 1px solid;"><?= $i; ?></td>
                <td style="border: 1px solid;"><?= $row["username"] ?></td>
                <td style="border: 1px solid;"><?= $row["email"] ?></td>
                <td style="border: 1px solid;"><?= $row["password"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>

</html>