<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Pembeli</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <center>
    <hr width="320">
    <table>
        <?php
            require("koneksi.php");
            $kodebarang = $_POST['kodebarang'];
            $jumlah_beli = $_POST['jumlah_beli'];
            $nama_pembeli = $_POST['nama_pembeli'];
            $alamat = $_POST['alamat'];
            $kota = $_POST['kota'];
            $kode_pos = $_POST['kode_pos'];
            $telp = $_POST['telp'];
            $email = $_POST['email'];
            
            if(($nama_pembeli=='') || ($alamat == '') || ($kota == '') || ($kode_pos == '') || ($telp == '') || ($email == '')) {
                echo "<h1>Maaf Data Anda Belum Diisi<br><br></h1>";
                echo "<button class='w3-btn w3-round-xxlarge w3-red' onclick='goBack()'>Back</button>";
                exit;
            }
            echo "<tr><td width=150>Kode Barang<td>$kodebarang";
            echo "<tr><td>Jumlah Beli<td>$jumlah_beli";
            echo "<tr><td>Nama Pembeli<td>$nama_pembeli";
            echo "<tr><td>Alamat<td>$alamat";
            echo "<tr><td>Kota<td>$kota";
            echo "<tr><td>Kode Pos<td>$kode_pos";
            echo "<tr><td>Telp<td>$telp";
            echo "<tr><td>E-Mail<td>$email";
            echo "</table>";
            echo "<hr width=320>";
            $sql="INSERT INTO penjualan VALUES ('','$kodebarang','$jumlah_beli','$nama_pembeli',
            '$alamat','$kota','$kode_pos','$telp','$email') ";
            $hasil=mysqli_query($conn,$sql);
        ?>  
    </table>
    <h1>Data Penjualan Telah Disimpan!</h1>
    <hr>
    <br>
    <a class="w3-btn w3-round-xxlarge w3-red" href="index.php">Kembali ke toko</a>
</body>
</html>