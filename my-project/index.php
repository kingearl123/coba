<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <center>
            <h1>inventory ruangan</h1>
            
        </center>
        <br>
        
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $urut = 1;
            $tabelconn = "select * from ruangan";
            $querytabel = mysqli_query($conn, $tabelconn);
            while ($tampil = mysqli_fetch_array($querytabel)) {
                $no = $tampil['no'];
                $namabarang = $tampil['namabarang'];
                $jumlah = $tampil['jumlah'];
                $kondisi = $tampil['kondisi'];
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $urut++ ?></td>
                        <td><?php echo $namabarang ?></td>
                        <td><?php echo $jumlah ?></td>
                        <td><?php echo $kondisi ?></td>
                        <td>
                            <a href="proseshapus.php?no=<?php echo $tampil['no']; ?>"><button class="button-12" type="button">hapus</button></a>
                            <a href="edit.php?no=<?php echo $tampil['no']; ?>"><button class="button-12" type="button">edit</button></a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>
        </table>
        <a href="tambah.php" class="button-14">Masukan Data</a>
    </body>
</html>