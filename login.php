<?php
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username password tidak boleh kosong')</script>";
        echo "<script>window.location.href = '/aplikasi_template/login.php'</script>";
        exit();
    }

    $_SESSION['username'] = $username;
    echo "<script>alert('Login berhasil')</script>";
    echo "<script>window.location.href = '/aplikasi_template'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPLATE APLIKASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="template">
        <div id="header">
            <h1>Aplikasi Pendaftaran Mahasiswa Baru</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div id="sidebar">Sidebar</div>
            <div id="content">
                <h1 style="text-align: center;">Login</h1>
                <form method="post"">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                    <br>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
        <div id="footer">Footer</div>
    </div>   
</body>
</html>
