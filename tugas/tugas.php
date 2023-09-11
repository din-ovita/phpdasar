<!DOCTYPE html>
<html lang="en">

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nama : <input type="text" name="nama">
        <br>
        <br>
        Umur : <input type="text" name="umur">
        <br><br>
        Gender : <input type="radio" name="gender" value="perempuan"> Perempuan <input type="radio" name="gender" value="laki-laki"> Laki-laki
        <br><br>
        Makanan Kesukaan : <input type="checkbox" id="1" name="favmakanan[]" value="mie ayam"> Mie Ayam <input type="checkbox" id="2" name="favmakanan[]" value="bakso"> Bakso <input type="checkbox" id="3" name="favmakanan[]" value="soto"> Soto
        <br><br>
        <input type="submit">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['nama'];
        $umur = $_POST['umur'];
        $gender = $_POST['gender'];
        switch ($gender) {
            case "perempuan":
                $gender2 = "perempuan";
                break;
            default:
                $gender2 = "laki-laki";
        }

        if (empty($umur) and empty($name) and empty($gender) and empty($favmakanan)) {
            echo "Input terlebih dahulu";
        } else {
            echo "Nama saya adalah $name";
            echo "<br>";
            echo "Umur saya sekarang $umur tahun";
            echo "<br>";
            echo "Saya seorang $gender2";
            echo "<br>";
            echo "Dan makanan kesukaan saya adalah ";
            $fav = $_POST['favmakanan'];
            $f = count($fav);
            for ($i = 0; $i < $f; $i++) {
                echo $fav[$i] . " , ";
            }    
        }
    }
    ?>
</body>

</html>