<?php
include "../config/conn.php";

if (isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa (nis, nama, gender, tanggal_lahir, alamat, jurusan) VALUES ('$nis', '$nama', '$gender', '$ttl', '$alamat', '$jurusan')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../siswa/index_siswa.php?status=sukses');
    } else {
        header('location: ../siswa/ondex_siswa.php?status=gagal');
    }
}
?>