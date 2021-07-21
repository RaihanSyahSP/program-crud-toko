<?php 
if(!isset($_POST['kodebarang'])) {
    header('location: index.php');
}

$kodebarang = $_POST['kodebarang'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

if(!$kodebarang) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Kode Barang Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
 } else if(!$nama) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Nama Barang Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
 } else if(!$harga) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Harga Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
} else if(!$stok) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Stok Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
 }


$sql = "SELECT * FROM barang where kodebarang = '$kodebarang' ";
$query = mysqli_query($conn, $sql);
 if(mysqli_num_rows($query) < 1) {
    header('location: index.php');
 }
 
 $update = "UPDATE `barang` SET `nama` = '$nama', `stok` = '$stok', `harga` = '$harga' WHERE `kodebarang` = '$kodebarang'";

 $dataUpdate = mysqli_query($conn, $update);
 if(!$dataUpdate) {
    die('Terjadi kesalahan pada database');
 }
 ?>

<center>
   <hr width="320">
   <div class="w3-panel w3-round-xxlarge w3-teal">
      <h3>
         <center>UPDATE SUKSES DATA BARANG</center>
      </h3>
   </div>
   <table>
      <tbody>
         <tr>
            <td>Kode Barang</td>
            <td><?php echo $kodebarang?></td>
         </tr>
         <tr>
            <td>Nama Barang</td>
            <td><?php echo $nama?></td>
         </tr>
         <tr>
            <td>Harga</td>
            <td>Rp <?php echo number_format($harga)?></td>
         </tr>
         <tr>
            <td>Stok</td>
            <td><?php echo number_format($stok)?></td>
         </tr>
      </tbody>
   </table>
   <hr width="320">
   <div class="w3-container w3-red">
      <h2 style="text-shadow:1px 1px 0 #444">Data Telah di Update</h2>
   </div>
</center>