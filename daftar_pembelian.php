<link rel="stylesheet" type="text/css" href="style.css">
<?php
include('koneksi.php');

$sql = "SELECT * FROM pembelian";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembelian Ice Cream</title>
</head>

<body>
    <h1>Daftar Pembelian Ice Cream</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pembeli</th>
            <th>Rasa Ice Cream</th>
            <th>Jumlah Ice Cream</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nama_pembeli']}</td>";
            echo "<td>{$row['rasa_icecream']}</td>";
            echo "<td>{$row['jumlah_icecream']}</td>";
            echo "<td>Rp." . number_format($row['total_harga']) . "</td>";
            echo "<td><a href='hapus.php?id={$row['id']}'>Hapus</a></td>";
            echo "</tr>";
        }

        ?>

    </table>
    <a class="back-link" href="index.php">Kembali ke Form Pembelian</a>
</body>

</html>
