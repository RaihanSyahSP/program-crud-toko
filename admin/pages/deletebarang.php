<center>
   <div class="w3-panel w3-round-xxlarge w3-teal">
      <h3>
         <center>DELETE DATA BARANG</center>
      </h3>
   </div>
   <form action="index.php?p=hapus_barang" method="POST">
      <table>
         <tbody>
            <tr>
               <td>KODE BARANG</td>
               <td><input name="kodebarang" placeholder="Masukan Kode Barang" size="10"></td>
            </tr>
         </tbody>
      </table>
      <hr>
      <input class="w3-button w3-green" type="reset" value="RESET">
      <input class="w3-button w3-red" type="submit" value="DELETE">
   </form>
   <div class="w3-container w3-teal w3-margin-top">
      <p>Masukkan Kode Barang Yang Akan Dihapus</p>
   </div>
</center>