<?php
$conn = mysqli_connect("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}
$conndata = mysqli_connect("localhost", "root", "", "produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Register</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Username : <input type="text" name="username">
        <br>
        <br>
        Email : <input type="text" name="email">
        <br><br>
        Password : <input type="text" name="password">
        <br><br>
        Konfirmasi Password : <input type="text" name="password2">
        <br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if ($password != $password2) {
            echo "<script>alert('konfirmasi password tidak sesuai!')</script>";
            return false;
        }
        $queryemail = "SELECT * FROM users WHERE email = '$email'";
        $result = $conndata->query($queryemail);

        if ($result->num_rows > 0) {
            echo "Email sudah digunakan. Silakan gunakan email lain.";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user 
    VALUES ('', '$name', '$email', '$password');";
            $insertQuery = mysqli_query($conndata, $query);
            if ($conndata->query($insertQuery) === TRUE) {
                echo "Pendaftaran berhasil!";
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conndata->error;
            }
        }
        $conndata->close();
    }
    ?>
</body>

</html>