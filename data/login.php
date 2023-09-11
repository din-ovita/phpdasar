<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Email : <input type="text" name="email">
        <br><br>
        Password : <input type="text" name="password">
        <br><br>
        <input type="submit">
    </form>
    <?php
    $conndata = mysqli_connect("localhost", "root", "", "produk");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $res = mysqli_query($conndata, "SELECT * FROM user WHERE email = '$email'");

        $password = password_hash($password, PASSWORD_DEFAULT);

        if (mysqli_num_rows($res) === 1) {
            $row = mysqli_fetch_assoc($res);
            if (password_verify($password, $row["password"])) {
                header("Location: data.php");
            }
        }
    } ?>
</body>

</html>