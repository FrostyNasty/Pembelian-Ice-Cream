<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan query penghapusan
    $sql_delete = "DELETE FROM pembelian WHERE id = $id";
    $result_delete = mysqli_query($koneksi, $sql_delete);

    if ($result_delete) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
}

// Redirect kembali ke halaman utama setelah penghapusan
header("Location: index.php");
exit();
?>
