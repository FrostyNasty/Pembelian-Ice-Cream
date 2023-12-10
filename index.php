<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pembelian Ice Cream</title>
</head>

<body>
    <h1>Form Pembelian Ice Cream</h1>
    <form action="proses_pembelian.php" method="post">
        <label for="nama">Nama Pembeli:</label>
        <input type="text" name="nama" required><br>

        <label for="rasa">Rasa Ice Cream:</label>
        <select name="rasa" required>
            <option value="chocolate">Chocolate</option>
            <option value="strawberry">Strawberry</option>
            <option value="vanilla">Vanilla</option>
        </select><br>

        <label for="jumlah">Jumlah Ice Cream:</label>
        <input type="number" name="jumlah" required><br>

        <input type="submit" value="Beli">
        <a href="daftar_pembelian.php">Lihat Daftar Pembelian</a>
    </form>
</body>

</html>