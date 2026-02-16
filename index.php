<?php
    require 'connection.php';
    
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
    
        if ($result->num_rows == 1) {
            header("Location: page/read/index.php");
            exit();
        } else {
            echo "
            <script>
                alert('Username atau password Anda salah. Silakan coba lagi!')
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login_form.css?v=<?php echo time();?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="ico/x-image" href="resource/logo.ico">
    <title>E-Book Tamu SMA Al-Irsyad Kota Tegal</title>

</head>

<body>
    <h1 class="jdl">E-Book Tamu SMA Al-Irsyad Kota Tegal</h1>
    <div class="container">
        <img src="resource/icon_login.png">
        <form method="POST" class="inputContainer">
            <h1>.Login</h1>
            <i class='bx bxs-user-rectangle'></i>
            <input type="text" placeholder="Username" name="username" class="inputUsername" required>
            <br>
            <i class='bx bx-lock-alt'></i>
            <input type="password" placeholder="Password" name="password" class="inputPassword" required>
            <br>
            <button name="submit" class="btn">Login</button>
        </form>
    </div>
</body>

</html>