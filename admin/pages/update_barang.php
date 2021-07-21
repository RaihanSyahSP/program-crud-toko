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
    echo '<div class="w3-panel w3-red">';
    echo '<h3>Info!</h3>';
    echo '<p>Data Kode Barang Tidak Ditemukan!! </p>';
    echo '<a href="index.php?p=selectbarang" class="w3-button w3-blue w3-margin-bottom">Kembali!! </a>';
    echo '</div>';
    exit;
 }
 ?>
<form action="index.php?p=saveeditbarang" method="post">
    <center>
        <font size="6"> Edit Data Barang </font>
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
            <input type="submit" value="Save Edit" class="w3-button w3-blue w3-round-xxlarge">
            <input type="reset" value="Reset">
            </font>
        </font>
    </center>
</form>