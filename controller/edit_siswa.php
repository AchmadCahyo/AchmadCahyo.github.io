<?php
include "../config/conn.php";

if (isset ($_POST['edit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', gender='$gender', tanggal_lahir='$ttl', alamat='$alamat', jurusan='$jurusan' WHERE id = '$id'";
    // echo $sql;
    $query = mysqli_query($conn, $sql);

    if ($query){
        header('location: ../siswa/index_siswa.php');
    }else {
        die("Gagal Menyimpan Perubahan");
    }
}else {
    die("Akses Ubah Dilarang");
}
?>