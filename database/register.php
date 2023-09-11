<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register Page</title>
</head>

<body>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center relative">
        <div class="bg-gray-100 rounded-2xl shadow-lg max-w-3xl relative">
            <div class="absolute w-1/2 h-10 bg-green-500 rounded-2xl"></div>
            <div class="py-14 px-12 ">
                <h1 class="uppercase text-3xl font-bold">Register</h1>
                <p class="text-sm mb-8 mt-2 text-gray-600">Please fill in the following form to create an account</p>
                <form method="post" action="connectregister.php">
                    <label for="">Username</label> <br>
                    <input type="text" name="username" placeholder="Username" class="p-2 rounded-xl border w-96" required>
                    <br><br>
                    <label for="">Email</label> <br>
                    <input type="text" name="email" class="p-2 rounded-xl border w-96" placeholder="Email" required>
                    <br><br>
                    <label for="">Password</label> <br>
                    <input type="text" name="password" class="p-2 rounded-xl border w-96" placeholder="Password" required>
                    <br><br>
                    <button type="submit" class="px-4 py-2 bg-green-500 uppercase text-white font-semibold rounded-md">Sign up</button>
                </form>
            </div>
        </div>
        <div class="absolute top-32 left-10 w-12 h-12 border-4 border-gray-400 box"></div>
        <div class="absolute top-44 right-44 w-24 h-24 border-4 border-gray-400 box2"></div>
        <div class="absolute top-44 left-72 w-16 h-16 border-4 border-gray-400 box3"></div>
        <div class="absolute bottom-10 right-72 w-8 h-8 border-4 border-gray-400 box4"></div>
        <div class="absolute bottom-32 left-64 w-12 h-12 border-4 border-gray-400 box5"></div>
        <div class="absolute bottom-48 right-52 w-12 h-12 border-4 border-gray-400 box6"></div>
        <div class="absolute bottom-48 left-32 w-12 h-12 border-4 border-gray-400 box7"></div>
    </section>
    <style>
        .box {
            animation: animate 3s linear infinite;
        }.box2 {
            animation: animate 4s linear infinite;
        }
        .box3 {
            animation: animate 6s linear infinite;
        }
        .box4 {
            animation: animate 5s linear infinite;
        }
        .box5 {
            animation: animate 3s linear infinite;
        }
        .box6 {
            animation: animate 6s linear infinite;
        }
        .box7 {
            animation: animate 5s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: scale(0) translateY(0) rotate(0);
                opacity: 1;
            }

            100% {
                transform: scale(1.3) translateY(-90px) rotate(360deg);
                opacity: 1;
            }
        }
    </style>

    <!-- <?php
            $conn = mysqli_connect("localhost", "root", "");

            if ($conn->connect_error) {
                die("Connection failed : " . $conn->connect_error);
            }
            $conndata = mysqli_connect("localhost", "root", "", "db_sekolah");

            ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $queryemail = "SELECT * FROM admin WHERE email = '$email'";
        $result = $conndata->query($queryemail);

        if ($result->num_rows > 0) {
            echo "<script>alert('Email already in use. Please use another email.')</script>";
            return false;
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO admin 
    VALUES ('', '$email', '$name', '$password');";
            mysqli_query($conndata, $query);
        }
        $conndata->close();
        header("Location");
    }
    ?> -->
</body>

</html>