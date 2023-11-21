<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="text-center p-2 m-2">
        <h1>Tambah Siswa Baru</h1>
    </div>
    <div class="container">
        <form action="../controller/tambah_siswa.php" method="POST">
            <div class="form-group">
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="gender">Gender : </label>
                <select name="gender" id="" class="form-select">
                    <option value="" disabled selected>Pilih dari Kolom Di Bawah</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="ttl">Tempat, Tanggal Lahir : </label>
                <input type="date" name="ttl" id="" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="jurusan">Jurusan : </label>
                <select name="jurusan" id="" class="form-select">
                    <option value="" disabled selected>Pilih Jurusan dari Kolom Di Bawah</option>
                    <option value="RPL">RPL</option>
                    <option value="TKR">TKR</option>
                    <option value="KPR">KPR</option>
                    <option value="ANM">ANM</option>
                    <option value="SIJA">SIJA</option>
                </select>
            </div>
            <div class="botton mt-3">
                <input type="submit" value="Tambah" name="tambah">
            </div>
        </form>
    </div>


    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>