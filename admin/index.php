<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grosir Online Raihan </title>
    <link rel="stylesheet" href="../assets/css/w3.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="w3-bar w3-blue-gray">
<button onclick="document.getElementById('id01').style.display='block'" class="w3-display-topright w3-button w3-blue-gray">
<img src="https://www.w3schools.com/w3css/img_avatar4.png" class="w3-circle" alt="Alps" width="20" height="20">

</button>
</div>
    <div id="header">
        <img src="../images/header.jpg" width="100%" height="300px" alt="">
    </div>
    <?php
    error_reporting(0);
    session_start();
    if($_SESSION['username']){
    ?>
     <div class="w3-bar w3-blue">
      <a href="index.php?p=home" class="w3-bar-item w3-button">Home</a>
      <a href="index.php?p=inputbarang" class="w3-bar-item w3-button">Insert</a>
      <a href="index.php?p=selectbarang" class="w3-bar-item w3-button">Select</a>
      <a href="index.php?p=updatebarang" class="w3-bar-item w3-button">Update</a>
      <a href="index.php?p=deletebarang" class="w3-bar-item w3-button">Delete</a>
      <a href="index.php?p=viewpenjualan" class="w3-bar-item w3-button">Penjualan</a>
    
      <div class="w3-dropdown-hover">
          <button class="w3-button">Dropdown</button>
          <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="index.php?p=inputbarang" class="w3-bar-item w3-button">Insert</a>
            <a href="index.php?p=selectbarang" class="w3-bar-item w3-button">Select</a>
            <a href="index.php?p=updatebarang" class="w3-bar-item w3-button">Update</a>
    		<a href="index.php?p=deletebarang" class="w3-bar-item w3-button">Delete</a>
    		<a href="index.php?p=viewpenjualan" class="w3-bar-item w3-button">Penjualan</a>
    		 <a href="index.php?p=logout" class="w3-bar-item w3-button">Logout</a> 
          </div>
      </div>
    </div>
    <?php
    }
    ?>
   
    <div id="konten">
        <?php 
            require '../db/koneksi.php';
            $pages_dir = 'pages';
            if(!empty($_GET['p'])) { 
                $pages = scandir($pages_dir,0);
                unset($pages[0], $pages[1]);
                $p = $_GET['p'];
              
                if(in_array($p.'.html',$pages)) {
                    include($pages_dir.'/'.$p.'.html');
                } else if(in_array($p.'.php', $pages)) {
                    include($pages_dir.'/'.$p.'.php');
                } else {
                    echo "$pages dir halaman tidak ditemukan :(";
                }
            } else {
                include($pages_dir.'/home.php');
            }
        ?>
    </div>
</body>
</html>