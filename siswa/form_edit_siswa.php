<?php
include "../config/conn.php";

if (isset($_GET["edit"])) {
    header("location: index_siswa.php");
}
$id = $_GET["siswaId"];

$sql = "SELECT * FROM siswa WHERE id=$id";
// echo $sql;
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <h2 class="text-center">Edit Data Siswa</h2>
    <br>
    <div class="container">
        <form action="../controller/edit_siswa.php" method="POST">
            <div>
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $siswa['id'] ?>">
            </div>
            <div class="form-group">
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="" class="form-control" value="<?php echo $siswa['nis'] ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="" class="form-control" value="<?php echo $siswa['nama'] ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="gender">Gender : </label>
                <?php $gender = $siswa['gender'] ?>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled selected>Pilih dari Kolom Di Bawah</option>
                    <option <?php echo ($gender == 'L') ? "selected" : "" ?>>L</option>
                    <option <?php echo ($gender == 'P') ? "selected" : "" ?>>P</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="ttl">Tempat, Tanggal Lahir : </label>
                <input type="date" name="ttl" id="" class="form-control" value="<?php echo $siswa['tanggal_lahir'] ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="" class="form-control" value="<?php echo $siswa['alamat'] ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="jurusan">Jurusan : </label>
                <?php $jurusan = $siswa['jurusan'] ?>
                <select name="jurusan" id="" class="form-select">
                    <option value="" disabled selected>Pilih Jurusan dari Kolom Di Bawah</option>
                    <option <?php echo ($jurusan == 'RPL') ? "selected" : "" ?>>RPL</option>
                    <option <?php echo ($jurusan == 'TKR') ? "selected" : "" ?>>TKR</option>
                    <option <?php echo ($jurusan == 'KPR') ? "selected" : "" ?>>KPR</option>
                    <option <?php echo ($jurusan == 'ANM') ? "selected" : "" ?>>ANM</option>
                    <option <?php echo ($jurusan == 'SIJA') ? "selected" : "" ?>>SIJA</option>
                </select>
            </div>
            <div class="botton mt-3">
                <input type="submit" value="Ubah" name="edit">
            </div>
        </form>

        <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>