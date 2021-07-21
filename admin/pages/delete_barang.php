<?php 
if(!isset($_GET['kodebarang'])) {
    header('location: index.php');
}

$kodebarang = $_GET['kodebarang'];
$sql = "SELECT * FROM barang where kodebarang = '$kodebarang' ";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);

 // Jika Kode Barang Tidak Ditemukan Arahkan kehalaman utama

 if(mysqli_num_rows($query) < 1) {
    header('location: index.php');
 }
 ?>
<form action="index.php?p=prosesdeletebarang" method="post">
    <center>
        <font size="6">Data Barang Yang Akan Di Hapus </font>
            <hr width="400">
       
            <table border="1">
                <tbody>
                    <tr>
                        <td width="150">Kode Barang</td>
                        <td width="100"><input name="kodebarang" value="<?php echo $barang['kodebarang']?>" readonly="" size="10"></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><input name="nama" value="<?php echo $barang['nama']?>" size="30"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input name="harga" value="<?php echo $barang['harga']?>" size="10"></td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input name="stok" value="<?php echo $barang['stok']?>" size="5"></td>
                </tr>
            </tbody>
        </table>
            <hr width="400">
            <font size="6">
            <input type="submit" value="PROSES DELETE">
            </font>
        </font>
    </center>
</form>