<div class="w3-panel w3-round-xxlarge w3-teal">
    <h3><center>Memasukan Data Barang</center></h3>
</div>
<hr>
<div class="w3-container">

<table class="w3-table-all w3-margin-bottom">
      <thead>
         <tr class="w3-red">
            <th>NO</th>
            <th>KODE BARANG</th>
            <th>NAMA BARANG</th>
		    <th>HARGA</th>
		    <th>STOK</th>
		    <th colspan="2" class="w3-center">ACTION</th>
         </tr>
      </thead>
      <tbody>
          <?php 
          $sql = "SELECT * FROM barang";
          $query = mysqli_query($conn, $sql);
          $i = 1;
          while($barang = mysqli_fetch_array($query)) {
          ?>
          <tr>
              <td><?php echo $i?></td>
              <td><?php echo $barang['kodebarang']?></td>
              <td><?php echo $barang['nama']?></td>
              <td>Rp <?php echo number_format($barang['harga'])?></td>
              <td><?php echo number_format($barang['stok'])?></td>
              <td><center><a href="index.php?p=editbarang&kodebarang=<?php echo $barang['kodebarang']?>">Edit</a></center></td>
              <td><center><a href="index.php?p=delete_barang&kodebarang=<?php echo $barang['kodebarang']?>">Delete</a></center></td>
          </tr>
          <?php 
          $i++;
          } 
          ?>
      </tbody>  
</table>
</div>