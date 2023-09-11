<!DOCTYPE html>
<html lang="en">

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="">
        Umur: <input type="text" name="umur">
        <br>
        <br>
        Nama: <input type="text" name="fname">
        <input type="submit">
        <br>
        <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $umur = $_POST['umur'];
        if (empty($umur) and empty($name)) {
            echo "Umur dan nama kosong";
        } elseif (empty($umur)) {
            echo "Umur kosong";
        } elseif (empty($name)) {
            echo "Nama kosong";
        } else {
            echo "Nama saya adalah $name <br> Umur saya sekarang $umur tahun";
        }
    }
    ?>

</body>

</html>