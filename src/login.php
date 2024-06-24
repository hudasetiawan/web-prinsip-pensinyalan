<?php
session_start();
include 'koneksi.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi password
    if (strlen($password) < 8) {
        echo '<script>alert("Password harus memiliki minimal 8 karakter."); window.location.href = "loginRegister.php";</script>';
        exit();
    }

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
        $username = $row['username'];
        $handphone = $row['handphone'];
        $_SESSION['username'] = $username;
        $_SESSION['handphone'] = $handphone;
        echo "<script>alert('Selamat datang $username'); window.location.href = 'materi.php';</script>";
    } else {
        // Login gagal
        echo '<script>alert("email atau password salah."); window.location.href = "loginRegister.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("Program error"); window.location.href = "loginRegister.php";</script>';
    exit();
}
?>