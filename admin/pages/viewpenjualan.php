<style>
  a {
    text-decoration: none;
  }
</style>

<div class="w3-panel w3-round-xxlarge w3-teal">
    <h3><center>Menampilkan Seluruh Data Penjualan</center></h3>
</div>
<div class="w3-container">

<table class="w3-table-all">
      <thead>
         <tr class="w3-red">
            <th>NO</th>
            <th>ID</th>
            <th>KODE BARANG</th>
            <th>JUMLAH</th>
            <th>NAMA PEMBELI</th>
            <th>ALAMAT</th>
		    <th>KOTA</th>
		    <th>KODEPOS</th>
		    <th>TELP</th>
		    <th>EMAIL</th>
		    <th class="w3-center">ACTION</th>
         </tr>
      </thead>
      <tbody>
        <?php 
         $sql = "SELECT * FROM penjualan";
         $query = mysqli_query($conn, $sql);
         $i = 1;
         while($penjualan = mysqli_fetch_array($query)) {
        ?>
          <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $penjualan['id'] ?></td>
              <td><?php echo $penjualan['kodebarang'] ?></td>
              <td><?php echo $penjualan['jumlah'] ?></td>
              <td><?php echo $penjualan['nama_pembeli'] ?></td>
              <td><?php echo $penjualan['alamat'] ?></td>
              <td><?php echo $penjualan['kota'] ?></td>
              <td><?php echo $penjualan['kode_pos'] ?></td>
              <td><?php echo $penjualan['telp'] ?></td>
              <td><?php echo $penjualan['email'] ?></td>
              <td>
                <center>
                  <button class="w3-btn w3-red w3-round-xxlarge">
                    <a href="index.php?p=deletepenjualan&id=<?php echo $penjualan['id'] ?>">Delete</a>
                  </button>
                </center>
              </td>
          </tr>
        <?php 
        $i++;
            }
         ?>
      </tbody>  
</table>
</div>