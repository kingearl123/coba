<?php
    include 'koneksi.php';
        $namabarang = "";
        $jumlah = "";
        $kondisi = "";
        
    
        $namabarang = $_POST['namabarang'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];
    
        $insertdata = "INSERT INTO `ruangan`(namabarang,jumlah,kondisi) VALUES ('$namabarang','$jumlah','$kondisi')";
        $insertquery = mysqli_query($conn,$insertdata);

        if ($insertquery) {
            echo "<script>
            alert('data berhasil ditambahkan');
            window.location='index.php';
            </script>";
        }

?>