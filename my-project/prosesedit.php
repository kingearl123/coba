<?php
    include 'koneksi.php';
    
    $namabarang = "";
    $jumlah = "";
    $kondisi = "";

    extract($_POST);

    $query = "UPDATE ruangan SET no='$no',namabarang = '$namabarang' ,jumlah = '$jumlah',kondisi ='$kondisi'";
        $query .= "WHERE no = '$no'";
        $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        echo "<script>
        alert('data berhasil diedit');
        window.location='index.php';
        </script>";
    }
?>