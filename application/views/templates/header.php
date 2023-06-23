<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ny Tranoko</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script> -->


    <!-- Css header Styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/headercss/style.css" type="text/css">
    <!-- Css footer Styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/footercss/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/footercss/style.css">
    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/footercss/responsive.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->

    <link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/styles.css">

</head>


<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="<?php echo site_url('Welcome/index'); ?>">Acceuil</a></li>
                            <li><a href="<?php echo site_url('Welcome/mamaison'); ?>">Ma maison</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('Welcome/aboutus'); ?>">Chambre</a></li>
                                    <li><a href="<?php echo site_url('Welcome/nouscontacter'); ?>">Cuisine</a></li>
                                    <li><a href="<?php echo site_url('Welcome/servicesclient'); ?>">Garage</a></li>
                                </ul>
                            </li>
                            <li><a href="./shop.html">Dashboard</a></li>
                            <li><a href="#">Parametre</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('Welcome/vosappareils'); ?>">Vos appareils</a></li>
                                    <li><a href="<?php echo site_url('Welcome/moncompte'); ?>">Mon compte</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Contact</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('Welcome/aboutus'); ?>">Qui sommes nous ?</a></li>
                                    <li><a href="<?php echo site_url('Welcome/nouscontacter'); ?>">Nous contacter</a></li>
                                    <li><a href="<?php echo site_url('Welcome/servicesclient'); ?>">Service client</a></li>
                                    <li><a href="./blog-details.html">Signaler probleme</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a class="btn btn-light rounded-pill shadow fw-bold" href="<?php echo site_url('Welcome/seconnecter'); ?>" role="button">Se Connecter
                                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                                </svg></a>
                        </div>
                        <ul class="header__right__widget">
                            <!-- Profil -->
                            <li><span class="icon_search search-switch"></span></li>
                            <!-- Notification -->
                            <li><a href="<?php echo site_url('Welcome/notidications'); ?>"><span class="icon_heart_alt"></span>
                                    <div class="tip">2</div>
                                </a></li>
                            <!-- Panier / Nos produits -->
                            <li><a href="<?php echo site_url('Welcome/produits'); ?>"><span class="icon_bag_alt"></span>
                                    <div class="tip">2</div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->