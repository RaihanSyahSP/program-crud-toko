<?php 
if(!isset($_GET['id'])) {
    header('location: index.php');
}

$id = $_GET['id'];

if(!$id) {
   echo '<div class="w3-panel w3-red">';
   echo '<h3>Info!</h3>';
   echo '<p>Kode penjualan Tidak Boleh Kosong </p>';
   echo '</div>';
   exit;
 } 


$sql = "SELECT * FROM penjualan where id = '$id' ";
$query = mysqli_query($conn, $sql);
$penjualan = mysqli_fetch_assoc($query);
 if(mysqli_num_rows($query) < 1) {
    header('location: index.php');
}

$sql_delete = "DELETE FROM `penjualan` WHERE `id` = '$id'";
$delete = mysqli_query($conn, $sql_delete);
if(!$delete) {
    die('Terjadi Kesalahan Pada Database');
}

?>

<center>
   <hr width="320">
   <div class="w3-panel w3-round-xxlarge w3-teal">
      <h3>
         <center>Hapus DATA Penjualan</center>
      </h3>
   </div>
   <table>
      <tbody>
         <tr>
            <td>ID Penjualan</td>
            <td><?php echo $penjualan['id']?></td>
         </tr>
         <tr>
            <td>Kode barang</td>
            <td><?php echo $penjualan['kodebarang']?></td>
         </tr>
         <tr>
            <td>Nama Pembeli</td>
            <td><?php echo $penjualan['nama_pembeli']?></td>
         </tr>
         <tr>
            <td>Jumlah</td>
            <td><?php echo number_format($penjualan['jumlah'])?></td>
         </tr>
         <tr>
            <td>Alamat</td>
            <td><?php echo $penjualan['alamat']?></td>
         </tr>
      </tbody>
   </table>
   <hr width="320">
   <div class="w3-container w3-red">
      <h2 style="text-shadow:1px 1px 0 #444">Data Telah di dihapus</h2>
   </div>
</center>