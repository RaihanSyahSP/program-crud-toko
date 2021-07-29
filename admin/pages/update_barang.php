<?php 
if(!isset($_POST['kodebarang'])) {
    header('location: index.php');
}
$kodebarang = $_POST['kodebarang'];
$sql = "SELECT * FROM barang where kodebarang = '$kodebarang' ";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);


 // Jika Kode Barang Tidak Ditemukan Arahkan kehalaman utama

 if(mysqli_num_rows($query) < 1) {
    echo '<center>';
    echo '<div class="w3-panel w3-red w3-round-xxlarge">';
    echo '<h3>Peringatan</h3>';
    echo '<h4>Data Kode Barang Tidak Ditemukan!! </h4>';
    echo '<a href="index.php?p=selectbarang" class="w3-button w3-green w3-margin-bottom">Kembali</a>';
    echo '</div>';
    exit;
 }
 ?>
<div class="w3-container">
    <form action="index.php?p=saveeditbarang" method="post">
        <center>
            <h2 class="w3-panel w3-deep-orange"> Edit Data Barang</h2>
                <table class="w3-table-all w3-margin-bottom w3-center">
                    <tbody>
                        <tr>
                            <td width="150">Kode Barang</td>
                            <td width="100"><input name="kodebarang" value="<?php echo $barang['kodebarang']?>" readonly="" size="10"></td>
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
                <input type="submit" value="Edit" class="w3-button w3-green w3-round-xxlarge">
                <input type="reset" value="Reset" class="w3-button w3-red w3-round-xxlarge">
        </center>
    </form>
</div>