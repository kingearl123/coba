<?php
    include 'koneksi.php';
    if(isset($_GET['no'])){
        $no = $_GET['no'];
        $query = "SELECT * FROM `ruangan` where no = '$no'";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Error :".mysqli_errno($conn)."-".mysqli_error($conn));
        }
        $tampil = mysqli_fetch_array($result);
    }

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
        <h1>Masukan Data</h1>
        <div class="container">
            <div class="content">
                <form method="post" action="prosesedit.php">
                    <label for="no"></label>
                    <br>
                    <br>
                    <input name="no" value="<?php echo $tampil ['no']?>" hidden>
                    <br>
                    <br>
                    <label for="namabarang">nama barang</label>
                    <br>
                    <br>
                    <input type="text" name="namabarang" class="form-control" id="namabarang" value="<?php echo $tampil ['namabarang'];?>" required>
                    <br>
                    <br>
                    <label for="jumlah">jumlah</label>
                    <br>
                    <br>
                    <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?php echo $tampil ['jumlah'];?>" required>
                    <br>
                    <br>
                    <label for="kondisi">kondisi</label>
                    <br>
                    <br>
                    <input type="text" name="kondisi" id="kondisi" class="form-control" value="<?php echo  $tampil ['kondisi'];?>" required>
                    <br>
                    <br>
                    <input type="submit" class="btn" value="kirim">
                    <a href="index.php" class="button-13">tampilkan data</a>
                </form>
            </div>
        </div>
    </body>
</html>