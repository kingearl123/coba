<?php

    $conn = mysqli_connect('localhost','root','','inventory');

    if (isset($_GET['no'])) {
        $no = $_GET['no'];
        $anjg = "SELECT * FROM `ruangan` WHERE 'no' ='$no'";
        $bgst = mysqli_query($conn,$anjg);
        if (!$bgst) {
            die("Query Error :".mysqli_errno($conn)."-".mysqli_error($conn));
        }
        $tampildata = mysqli_fetch_array($bgst);
        
    }
?>