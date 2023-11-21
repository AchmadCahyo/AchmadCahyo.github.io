<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<?php
session_start();
if (!isset($_SESSION["name"])) {
    header("location: index.php");
    exit();
}
?>

<body class="bg-secondary text-white">
    <div class="d-flex justify-content-center mt-5 pt-5">
        <form action="../controller/connLogout.php" method="POST" class="border border-dark rounded bg-light text-dark">
            <h1>Selamat Datang
                <?php echo $_SESSION['name']; ?>!
            </h1>
            <button type="submit" name="submit" class="btn btn-primary m-3">Logout</button>
        </form>
    </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>

</html>