<?php
include "../config/conn.php";
session_start();

if ($_SESSION['role']=="") {
    header("location: ../login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand">Data Siswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="form_tambah_siswa.php">[+] Tambah Siswa</span></a>
            </div>
        </div> -->
    </nav>
    <br>
    <h2 class="text-center">Data Siswa</h2>
    <div class="container">
        <br>
        <div class="table-responsive text-center">
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Jurusan</th>
                        <th>Opsi Hapus</th>
                        <th>Opsi Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM siswa";
                    $query = mysqli_query($conn, $sql);
                    $no = '1';
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?= $no++ ?>
                            </td>
                            <td>
                                <?= $data['nis'] ?>
                            </td>
                            <td>
                                <?= $data['nama'] ?>
                            </td>
                            <td>
                                <?= $data['gender'] ?>
                            </td>
                            <td>
                                <?= $data['tanggal_lahir'] ?>
                            </td>
                            <td>
                                <?= $data['alamat'] ?>
                            </td>
                            <td>
                                <?= $data['jurusan'] ?>
                            </td </tr>
                            <td>
                                <a href="../controller/hapus_siswa.php?siswaId=<?= $data['id'] ?>" class="btn btn-danger"
                                    role="button" name="hapus">Hapus</a>
                            </td>
                            <td>
                                <a href="form_edit_siswa.php?siswaId=<?= $data['id'] ?>" class="btn btn-primary"
                                    role="button" name="edit">Edit</a>
                            </td>
                            <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <p>Total Siswa :
        <?php echo mysqli_num_rows($query) ?>
    </p>
    <?php if (isset($_GET['status']))
        ; ?>
    <p>
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Data Berhasil Ditambahkan!";
        } else {
            echo "Tambah Data Siswa Gagal...";
        }
        ?>
    </p>
</body>
<script src="../assets/js/bootstrap.min.js"></script>

</html>