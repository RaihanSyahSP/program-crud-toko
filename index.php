<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Balanja Store</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div id="header">
        <img src="./images/header.jpg" alt="" width="100%" height="30%">
    </div>

    <div class="w3-bar w3-blue">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="admin/index.php" class="w3-bar-item w3-button">Admin</a>
    </div>

    <div id="konten">
        <?php
            $pages_dir = 'pages';
            if(!empty($_GET['p'])) {
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);
                $p = $_GET['p'];

                if (in_array($p.'.html', $pages)) {
                    include($pages_dir.'/'.$p.'.html');
                } else if (in_array($p.'.php', $pages)) {
                    include($pages_dir.'/'.$p.'.php');
                } else {
                    echo "$pages_dir Halaman tidak ditemukan!";
                }
            } else {
                include($pages_dir.'/home.html');
            }
        ?>
    </div>
</body>
</html>