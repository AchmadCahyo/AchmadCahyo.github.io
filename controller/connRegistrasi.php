<?php
session_start();
include "../config/conn.php";

if (isset($_SESSION["nama"])) {
    header("location: ../login/index.php");
    exit();
}
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['user'];
    $password = hash('sha256', $_POST['pass']);
    $cpassword = hash('sha256', $_POST['cpass']);
    $role = $_POST['role'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (name, username, password, role) VALUES ('$nama', '$username', '$password', '$role')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Registrasi Berhasil! Selamat Bergabung'); document.location.href = '../login/index.php'</script>";

            } else {
                echo "<script>alert('Terjadi Kesalahan.')</script>";
            }

        } else {
            echo "<script>alert('Terjadi Kesalahan.')</script>";
        }

    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>