<?php
include "../config/conn.php";

$id = $_GET["siswaId"];
$query = "DELETE FROM siswa WHERE id = $id";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Hapus Data Berhasil'); document.location.href = '../siswa/index_siswa.php'</script>";
} else {
    echo "Error Hapus Data";
}
mysqli_close($conn);
?>