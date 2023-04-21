<?php

    include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <style>
        
        </style>
    </head>
    <body>
        <h1>Masukan Data</h1>
        <div class="container">
            <div class="content">
                <form method="POST" action="prosesinput.php">
                    <label for="namabarang">nama barang</label>
                    <br>
                    <br>
                    <input type="text" class="form-control" name="namabarang" id="namabarang" placeholder="Masukan Nama Barang" required>
                    <br>
                    <br>
                    <label for="jumlah">jumlah</label>
                    <br>
                    <br>
                    <input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah Barang" required>
                    <br>
                    <br>
                    <label for="kondisi">kondisi</label>
                    <br>
                    <br>
                    <input type="text" name="kondisi" class="form-control" placeholder="Masukan Kondisi Barang" required>
                    <br>
                    <br>
                    <input type="submit" class="btn" value="kirim">
                </form>
                <br>
                <a href="index.php" class="btn">tampilkan data</a>
            </div>
        </div>
    </body>
</html>