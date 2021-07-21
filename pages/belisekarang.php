<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Sekarang</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <form action="index.php?p=savebeli" method="POST">
        <center>
        <table border="0">
            <?php
                require("koneksi.php");
                $kodebarang = $_GET['kodebarang'];
                echo "<center><img class=w3-margin-top src='./images/$kodebarang.jpg' width=20% height=20%></center>";
                echo "<br>";
                $sql = "SELECT * FROM barang WHERE kodebarang='$kodebarang'";
                $hasil = mysqli_query($conn, $sql);
                $row = mysqli_fetch_row($hasil);
                do {
                    list($kodebarang, $nama, $harga, $stok) = $row;                
                    echo "<tr><td width=150>Kode Barang<td width=100><input name=kodebarang value='$kodebarang' readonly size=10>";
                    echo "<tr><td>Nama Barang<td><input name=nama value='$nama' size=30>";
                    echo "<tr><td>Harga<td><input name=harga value='$harga' size=10>";
                    echo "<tr><td>Stok<td><input name=stok value='$stok' size=5>";
                    echo "<tr><td>Jumlah Beli<td><select name=jumlah_beli>";

                    for($i=1;$i<=$stok;$i++)
                    echo "<option>$i";
                    echo "<tr><td>Nama Pembeli<td><input name=nama_pembeli size=30>";
                    echo "<tr><td>Alamat<td><input name=alamat size=50>";
                    echo "<tr><td>Kota<td><input name=kota size=20>";
                    echo "<tr><td>KodePos<td><input name=kode_pos size=5>";
                    echo "<tr><td>Telp<td><input name=telp size=20>";
                    echo "<tr><td>EMail<td><input name=email size=30>";
                } while ($row=mysqli_fetch_row($hasil));
            ?>
        </table>
        <hr width=400>
        <button class="w3-btn w3-round-xxlarge w3-red w3-margin-bottom">Save Pembelian</button>
        <a class="w3-btn w3-round-xxlarge w3-red w3-margin-bottom" href="index.php">Kembali Ke Toko</a>
    </form>
</body>
</html>