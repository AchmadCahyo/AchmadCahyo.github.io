<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="bg-secondary text-white">
    <div class="d-flex justify-content-center mt-5 pt-5">
        <form action="../controller/connLogin.php" method="POST" class="border border-dark rounded bg-light text-dark">
            <h2 class="text-center">Form Login</h4>
                <div class="form-group p-3">
                    <label for="user name">User Name</label>
                    <input type="text" class="form-control rounded-pill" id="user" placeholder="Enter User Name" name="username"
                        required>
                </div>
                <div class="form-group p-3">
                    <label for="passpord">Password</label>
                    <input type="password" class="form-control rounded-pill" id="pass" placeholder="Enter Password" name="pass"
                        required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary m-3 rounded-pill">Login</button>
                <p class="p-3">Belum Memiliki Akun? <a class="link-offset-2 link-underline link-underline-opacity-0" href="../register/daftar.php">Daftar</a></p>
        </form>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>