<?php 
if(!isset($_POST['kodebarang'])) {
    header('location: index.php');
}

$kodebarang = $_POST['kodebarang'];

if(!$kodebarang) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Kode Barang Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
 } 


$sql = "SELECT * FROM barang where kodebarang = '$kodebarang' ";
$query = mysqli_query($conn, $sql);
$barang = mysqli_fetch_assoc($query);
 if(mysqli_num_rows($query) < 1) {
    header('location: index.php');
}

$sql_delete = "DELETE FROM `barang` WHERE `kodebarang` = '$kodebarang'";
$delete = mysqli_query($conn, $sql_delete);
if(!$delete) {
    die('Terjadi Kesalahan Pada Database');
}

?>

<center>
   <hr width="320">
   <div class="w3-panel w3-round-xxlarge w3-teal">
      <h3>
         <center>HAPUS DATA BARANG</center>
      </h3>
   </div>
   <table>
      <tbody>
         <tr>
            <td>Kode Barang</td>
            <td><?php echo $barang['kodebarang']?></td>
         </tr>
         <tr>
            <td>Nama Barang</td>
            <td><?php echo $barang['nama']?></td>
         </tr>
         <tr>
            <td>Harga</td>
            <td>Rp <?php echo number_format($barang['harga'])?></td>
         </tr>
         <tr>
            <td>Stok</td>
            <td><?php echo number_format($barang['stok'])?></td>
         </tr>
      </tbody>
   </table>
   <hr width="320">
   <div class="w3-container w3-red">
      <h2 style="text-shadow:1px 1px 0 #444">Data Telah di dihapus</h2>
   </div>
</center>