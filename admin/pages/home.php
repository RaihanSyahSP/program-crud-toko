<?php 
if($_SESSION['username']){
?>
<div class="w3-container link">
  <h2>Home</h2>
   <div class="w3-container w3-center w3-animate-top">
  <h1>Belajar Membuat Program Toko Online</h1>
  <p>Mata Kuliah  Pemrograman Web 2</p>
  <p>Prodi Teknik Informatika</p>
  <p>Universitas Komputer Indonesia</p>
</div>
</div>
<?php 
}else {
?>

<div class="w3-container w3-teal">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button">Login</button>
</div>

<div class="w3-container w3-center w3-animate-zoom">
  <div class="w3-card-4 w3-margin-top w3-blue">
  <img src="../images/login_background.jpg" width="50%" alt="login">
      <div class="w3-container w3-center">
        <p>Selamat Datang Di Grosir Online Raihan</p>
      </div>
  </div>
</div>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="https://www.w3schools.com/w3css/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="index.php?p=login" method="POST">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" name="username" value="raihan" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" name="password" value="raihan123" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        Masukan Username dan Password Anda
      </div>

    </div>
</div>
<?php 
}
?>