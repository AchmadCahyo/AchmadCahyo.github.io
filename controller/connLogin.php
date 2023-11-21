<?php
session_start();
include '../config/conn.php';


if (isset($_SESSION['name'])) {
    header("location: ../login/dashbord.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = hash('sha256', $_POST['pass']);

    $sql = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row['role'] == "admin") {
            $_SESSION['$username'] = $username;
            $_SESSION['$role'] = "operator";
            header("location: siswa_operator.php");

        }else if ($row['role']=="operator"){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "operator";
            header("location: siswa_operator.php");

        }else {
            echo "<script>alert('Gagal Login')</script>";
        }

    }else{
        echo "<script>alert('Email atau Password Salah, Coba Lagi')</script>";
    }
}
?>