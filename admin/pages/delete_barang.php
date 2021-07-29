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
<div class="w3-container">
    <form action="index.php?p=prosesdeletebarang" method="post">
        <center>
            <h2 class="w3-panel w3-green">Data Barang Yang Akan Dihapus</h2>
                <hr width="400">
           
                <table class="w3-table-all w3-margin-bottom w3-center">
                    <tbody>
                        <tr>
                            <td>Kode Barang</td>
                            <td><input name="kodebarang" value="<?php echo $barang['kodebarang']?>" readonly="" size="10"></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input name="nama" value="<?php echo $barang['nama']?>" size="20"></td>
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
                <input type="submit" value="DELETE" class="w3-button w3-red w3-round-xxlarge">
        </center>
    </form>
</div>