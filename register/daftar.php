<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body class="bg-secondary text-white">
    <div class="d-flex justify-content-center mt-2 pt-3">
        <form action="../controller/connRegistrasi.php" method="POST"
            class="border border-dark rounded bg-light text-dark">
            <h2 class="text-center">Form Daftar</h4>
                <div class="form-group p-3">
                    <label for="user name">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="nama" placeholder="Enter Name" name="nama" required>
                </div>
                <div class="form-group p-3">
                    <label for="passpord">Username</label>
                    <input type="text" class="form-control rounded-pill" id="username" placeholder="Enter Username" name="user"
                        required>
                </div>
                <div class="form-group p-3">
                    <label for="passpord">Password</label>
                    <input type="password" class="form-control rounded-pill" id="password" placeholder="Enter Password" name="pass"
                        required>
                </div>
                <div class="form-group p-3">
                    <label for="passpord">Confirm Password</label>
                    <input type="password" class="form-control rounded-pill" id="cpassword" placeholder="Enter Confirm Password"
                        name="cpass" required>
                </div>
                <div class="form-group p-3">
                    <label for="level">Role : </label>
                    <select name="role" id="" class="form-select rounded-pill">
                        <option value="disabled selected">Pilih Role dari User</option>
                        <option value="admin">Admin</option>
                        <option value="karyawan">Guru</option>
                        <option value="member">Karyawan</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary m-3 rounded-pill">Daftar</button>
        </form>
    </div>
    <?php

    ?>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>