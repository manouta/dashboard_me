<?php

 require 'test.php';
 session_verify();
 require('connecter.php');

 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="discounter app">
    <meta name="author"      content="amina chouarfa">
    <meta name="keywords"    content="au theme template">

<!-- Title Page-->
<title>Dashboard Admin</title>

<!-- Fontfaces CSS-->
<link href="../css/font-face.css" rel="stylesheet" media="all">
<link href="../css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="../css/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="../css/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="../css/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="../css/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="../css/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<link href="../css/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                
                    <img src="../images/icon/logo-white.png" alt="Cool Admin" />
                
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="../images/icon/avatar-big-01.jpg" alt="Abdelaziz Yasser" />
                    </div>
                    <h4 class="name">Abdelaziz Yasser</h4>
                    <a href="logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard

                            </a>
                           
                        </li>
                        <li>
                            <a href="#" style="color: #4272d7;">
                               <i class="fa fa-list-alt " ></i>Categories</a>
                           
                        </li>
                        <li>
                            <a href="coupons.php">
                                <i class="fa fa-tags " ></i>Coupons</a>
                        </li>
                        
                       
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="../images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                               
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
          

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="home.php">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Categories</li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>

                                            <tr>
                                                <th>category_id</th>
                                                <th>category_title</th>
                                                <th>category_img_url</th>
                                              
                                            </tr>

                                        </thead>
                                        <tbody>

                                             <?php
                                             $req=$bd->query('SELECT * FROM  category ');
                                             while($res = $req->fetch()) {
                                             ?>

                                            <tr>
                                                <td><?php echo ($res['category_id'] ) ?></td>
                                                <td><?php echo ($res['category_title'] )?> </td>
                                                <td> <?php echo ($res['category_img_url'] )?></td>
                                                
                                            </tr>
                                            <?php }  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2020 Amina. All rights reserved. Template by <a href="https://manouta.github.io/ITengeener/">amina CHR</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

     <!-- Jquery JS-->
     <script src="../css/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../css/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../css/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../css/vendor/slick/slick.min.js">
    </script>
    <script src="../css/vendor/wow/wow.min.js"></script>
    <script src="../css/vendor/animsition/animsition.min.js"></script>
    <script src="../css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../css/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../css/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../css/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../css/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../css/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../css/vendor/select2/select2.min.js">
    </script>
    <script src="../css/vendor/vector-map/jquery.vmap.js"></script>
    <script src="../css/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="../css/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="../css/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
</body>

</html>
<!-- end document-->
