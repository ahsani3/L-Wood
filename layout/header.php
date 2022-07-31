<?php 
$active = '<span class="line-active"></span>';

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <!-- Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css?v=<?= time(); ?>">

    <!-- icon.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/icon.css?v=<?= time(); ?>">
    <title>L-Wood | <?= $page ?></title>
  </head>
  <body>
    <div class="d-flex">
        <div class="sidebar">
            <a href="index.php" class="logo">
                <img src="../assets/img/logo.png">
            </a>
            <div class="toggle-bar">
                <div class="icon-menu"></div>
            </div>
            <div class="flex-justify-center">
                <div class="line"></div>
            </div>
            <a href="index.php" class="icon-sidebar mb-24">
                <?php 
                    if (@$page == 'Home') {
                        echo '<div class="icon-home active"></div>';
                        echo $active;
                    }else{
                        echo '<div class="icon-home"></div>';
                    }
                 ?>
            </a>
            <a href="product.php" class="icon-sidebar mb-24">
                <?php 
                    if (@$page == 'Produk' || @$page == 'Tambah Produk') {
                        echo '<div class="icon-buy active"></div>';
                        echo $active;
                    }else{
                        echo '<div class="icon-buy"></div>';
                    }
                 ?>
            </a>
            <a href="#" class="icon-sidebar mb-24">
                <div class="icon-activity"></div>
            </a>
            <a href="#" class="icon-sidebar mb-24">
                <div class="icon-category"></div>
            </a>
            <a href="#" class="icon-sidebar mb-24">
                <div class="icon-ticket"></div>
            </a>
            <a href="#" class="icon-sidebar mb-24">
                <div class="icon-setting"></div>
            </a>
            <a href="#" class="flex-justify-center">
                <div class="icon-logout drop-bottom"></div>
            </a>
        </div>
    </div>

    <div class="main">
        <div class="container-fluid">
            <div class="row mb-24">
                <div class="col">
                    <div class="welcome">
                        <p class="h3 text-color">Hallo, Ahsani</p>
                        <p class="p3 paragraph-color">Welcome back to Lwood</p>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="search">
                        <div class="icon-search"></div>
                        <input class="input-search" placeholder="Cari produk . . ." type="text" name="search">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="notif">
                        <div class="icon-notification position-notif"></div>
                        <span class="circle-notif p4 white">
                            9+
                        </span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="profile">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-md-none mb-24">
                    <div class="search">
                        <div class="icon-search"></div>
                        <input class="input-search" placeholder="Cari produk . . ." type="text" name="search">
                    </div>
                </div>
            </div>