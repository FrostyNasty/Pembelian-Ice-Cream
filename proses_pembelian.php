<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembelian Ice Cream</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        include('koneksi.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $rasa = $_POST['rasa'];
            $jumlah = $_POST['jumlah'];
            $harga_per_icecream = 10000;
            $total_harga = $jumlah * $harga_per_icecream;
        
            $sql = "INSERT INTO pembelian (nama_pembeli, rasa_icecream, jumlah_icecream, total_harga) VALUES ('$nama', '$rasa', $jumlah, $total_harga)";

            if (mysqli_query($koneksi, $sql)) {
                echo "<div class='success-message'>Pembelian berhasil. Total harga: Rp." . number_format($total_harga) . "</div>";
            } else {
                echo "<div class='error-message'>Error: " . $sql . "<br>" . mysqli_error($koneksi) . "</div>";
            }
        }

        mysqli_close($koneksi);
        ?>
        <a class="back-link" href="index.php">Kembali ke Form Pembelian</a>
    </div>
</body>
</html>
