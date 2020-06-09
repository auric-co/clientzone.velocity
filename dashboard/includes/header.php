<?php
include_once dirname(__FILE__)."/../System/System.php";
$sys = new System();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" href="<?php echo $sys->domain(); ?>/images/icons/favicon.png" type="image/x-icon">

    <!-- Title Page-->
    <title>Velocity Clientzone</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo $sys->domain(); ?>/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo $sys->domain(); ?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo $sys->domain(); ?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain(); ?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

    <!-- Main CSS-->
    <link href="<?php echo $sys->domain(); ?>/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="<?php echo $sys->domain(); ?>/dashboard/">
                        <img src="<?php echo $sys->domain(); ?>/images/icons/logo.png" width="200" alt="Velocity" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="#">
                                <i class="fas fa-calendar-check-o"></i>
                                <span class="bot-line"></span>Attendance</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/zumba">Zumba</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/antenatal">Antenatal</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/bootcamp">Bootcamp</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/gym">Gym</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/step">Step</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain(); ?>/activities/taebo">Taebo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo $sys->domain(); ?>/images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $company['name']; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="<?php echo $sys->domain(); ?>/dashboard">
                                            <img src="<?php echo $sys->domain(); ?>/dashboard/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $company['name']; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $company['email']; ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo $sys->domain(); ?>/dashboard/account">
                                            <i class="zmdi zmdi-account"></i>Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo $sys->domain(); ?>/dashboard/account/change-password.php">
                                            <i class="zmdi zmdi-lock"></i>Change Password</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="<?php echo $sys->domain(); ?>/dashboard/logout.php">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?php echo $sys->domain(); ?>/">
                        <img src="<?php echo $sys->domain(); ?>/images/icons/logo.png" alt="Velocity" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">

                    <li>
                        <a href="<?php echo $sys->domain(); ?>/activities">
                            <i class="fas fa-chart-bar"></i>Attendance</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Account</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="<?php echo $sys->domain(); ?>/dashboard/account">Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo $sys->domain(); ?>/dashboard/account/change-password.php">Change Password</a>
                            </li>
                            <li>
                                <a href="<?php echo $sys->domain(); ?>/dashboard/logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">
            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <div class="image">
                        <img src="<?php echo $sys->domain(); ?>/images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="<?php echo $sys->domain(); ?>/images/icon/avatar-01.jpg" alt="" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#"><?php echo $company['name']; ?></a>
                                </h5>
                                <span class="email"><?php echo $company['email']; ?></span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="<?php echo $sys->domain(); ?>/dashboard/account/">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="<?php echo $sys->domain(); ?>/dashboard/account/change-password.php">
                                    <i class="zmdi zmdi-lock"></i>Change Password</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="<?php echo $sys->domain(); ?>/dashboard/logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->