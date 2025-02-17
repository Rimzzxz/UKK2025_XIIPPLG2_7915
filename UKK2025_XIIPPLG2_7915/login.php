<?php
include "koneksi.php";
if (isset($_POST['username'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = mysqli_query($koneksi, "SELECT*FROM users WHERE email='$email' AND  username='$username' AND password='$password'");

    if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_array($cek);
        $_SESSION['users'] = $data;
        echo '<script>alert("Selamat Datang, Jangan lupa logout setelah selesai menggunakan halaman ini"); location.href="index.php"</script>';
    } else {
        echo '<script>alert("Username/Password salah!");</script>';
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, rgb(172, 203, 17) 0%, #2575fc 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
        }

        .form-control:focus {
            border-color: rgb(135, 203, 17);
            box-shadow: 0 0 0 0.2rem rgba(106, 17, 203, 0.25);
        }

        .btn-custom {
            background: linear-gradient(135deg, rgb(17, 150, 203), #2575fc);
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #2575fc, rgb(17, 132, 203));
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: block;
        }
    </style>
</head>


<body>
    <div class="login-container text-center">
        <img src="images.png" alt="Logo" class="logo rounded-circle">
        <h3 class="mb-4 text-primary">Welcome Web To do List</h3>
        <form method="post">

            <div class="mb-3">
                <input class="form-control" id="inputEmail" type="text" name="email" placeholder="Masukkan Email" />
            </div>
            <div class="mb-3">
                <input class="form-control" id="inputEmail" type="text" name="username" placeholder="Masukkan Username" />
            </div>
            <div class="mb-3">
                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
            </div>
            <button type="submit" class="btn btn-custom w-100 mb-3">Login</button>
        </form>
        <p class="mt-3 mb-0 text-dark">Belum punya Akun? <a href="registrasi.php" class="text-decoration-none">Registrasi</p>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>