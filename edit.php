<?php
include('koneksi.php');

// Periksa apakah parameter ID telah diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari database berdasarkan ID
    $sql = "SELECT * FROM pembelian WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);

    // Proses form update jika data ditemukan
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_pembeli = $_POST['nama_pembeli'];
        $rasa_icecream = $_POST['rasa_icecream'];
        $jumlah_icecream = $_POST['jumlah_icecream'];
        $total_harga = $_POST['total_harga'];

        // Update data ke database
        $updateSql = "UPDATE pembelian SET nama_pembeli='$nama_pembeli', rasa_icecream='$rasa_icecream', jumlah_icecream=$jumlah_icecream, total_harga=$total_harga WHERE id=$id";
        mysqli_query($koneksi, $updateSql);

        // Redirect ke halaman daftar pembelian setelah update
        header("Location: daftar_pembelian.php");
        exit();
    }
} else {
    // Jika ID tidak ditemukan, redirect ke halaman daftar pembelian
    header("Location: daftar_pembelian.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Pembelian Ice Cream</title>
</head>

<body>
    <h1>Edit Pembelian Ice Cream</h1>
    <form method="POST" action="">
        <!-- Tampilkan form dengan data yang telah diambil -->
        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" value="<?= $row['nama_pembeli'] ?>" required>

        <label for="rasa_icecream">Rasa Ice Cream:</label>
        <input type="text" name="rasa_icecream" value="<?= $row['rasa_icecream'] ?>" required>

        <label for="jumlah_icecream">Jumlah Ice Cream:</label>
        <input type="number" name="jumlah_icecream" value="<?= $row['jumlah_icecream'] ?>" required>

        <label for="total_harga">Total Harga:</label>
        <input type="text" name="total_harga" value="<?= $row['total_harga'] ?>" required>

        <input class="update" type="submit" value="Update">
        <a class="back-link" href="daftar_pembelian.php">Kembali ke Daftar Pembelian</a>
    </form>
</body>

</html>