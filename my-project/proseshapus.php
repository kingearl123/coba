<?php

    include 'koneksi.php';

    $no = $_GET['no'];
    $proseshapus = "DELETE FROM `ruangan` WHERE no ='$no'";
    $hasilhapus = mysqli_query($conn,$proseshapus);
    
    if ($hasilhapus) {
        echo "<script>
        alert('data berhasil dihapus');
        window.location='index.php';
        </script>";
    }
?>