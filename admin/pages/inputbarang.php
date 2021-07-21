<div class="w3-panel w3-round-xxlarge w3-teal">
    <h3><center>Memasukan Data Barang</center></h3>
</div>
<hr>
<center>
    <form action="index.php?p=savebarang" method="POST">
    <table border="0">
        <tr>
            <td>KODE BARANG</td>
            <td><input type="text" name="kodebarang" placeholder="Masukan Kode Barang"></td>
        </tr>
        <tr>
            <td>NAMA BARANG</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama Barang"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="number" name="harga" placeholder="Masukan Harga Barang"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="number" name="stok" placeholder="Masukan Stok"></td>
        </tr>
    </table>
    <hr>
    <button type="submit" class="w3-button w3-blue w3-round-xxlarge w3-margin-bottom">SAVE BARANG</button>
    </form>
    <div class="w3-container w3-teal">
        <p>Masukan data dengan benar, kemudian Click Tombol Save</p>
    </div>
</center>