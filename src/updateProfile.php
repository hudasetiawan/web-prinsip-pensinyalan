<?php
include('koneksi.php');
session_start();
if (isset($_SESSION['username'])) {
    $usernameSession = $_SESSION['username'];
    $emailSession = $_SESSION['email'];
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $handphone = $_POST['handphone'];
    $email = $_POST['email'];

    $query = "UPDATE users SET username = '$username', handphone = '$handphone', email = '$email' WHERE email = '$emailSession'";
    mysqli_query($koneksi, $query);

    echo "<script>alert('Profil berhasil diupdate!');window.location.href='profil.php';</script>";
} else {
    echo "<script>alert('Profil gagal diupdate!');window.location.href='profil.php';</script>";
}
?>