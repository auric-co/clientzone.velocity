<?php $company = $sys->co($_COOKIE['username']); ?>
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="<?php $sys->domain() ?>/dashboard/images/icons/logo.png" width="200" alt="Velocity" />
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
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/zumba">Zumba</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/hiit">HIIT</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/antenatal">Antenatal</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/bootcamp">Bootcamp</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/gym">Gym</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/step">Step</a>
                                </li>
                                <li>
                                    <a href="<?php echo $sys->domain() ?>/dashboard/activities/taebo">Taebo</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo $sys->domain() ?>/dashboard/images/client-photos/<?php echo $company['logo_thumbn'] ?>" alt="" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $company['name'];?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="/">
                                            <img src="<?php echo $sys->domain() ?>/dashboard/images/client-photos/<?php echo $company['logo_thumbn'] ?>" alt="<?php echo $company['name'];?>" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $company['name'] ?></a>
                                        </h5>
                                        <span class="email"><?php echo $company['email'] ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo $sys->domain() ?>/dashboard/account">
                                            <i class="zmdi zmdi-account"></i>Profile</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo $sys->domain() ?>/dashboard/account/change-password.php">
                                            <i class="zmdi zmdi-lock"></i>Change Password</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="dashboard/logout.php">
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
                    <a class="logo" href="/">
                        <img src="<?php echo $sys->domain() ?>/dashboard/images/icons/logo.png" alt="Velocity" width="200" />
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
                        <a href="<?php echo $sys->domain() ?>/dashboard/activities">
                            <i class="fas fa-chart-bar"></i>Attendance</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Account</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="<?php echo $sys->domain() ?>/dashboard/account">Profile</a>
                            </li>
                            <li>
                                <a href="<?php echo $sys->domain() ?>/dashboard/account/change-password.php">Change Password</a>
                            </li>
                            <li>
                                <a href="<?php echo $sys->domain() ?>/dashboard/logout.php">Logout</a>
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
                        <img src="<?php echo $sys->domain() ?>/dashboard/images/client-photos/<?php echo $company['logo_thumbn'] ?>" alt="<?php echo $company['name'];?>" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#"><?php echo $company['name'] ?></a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="<?php echo $sys->domain() ?>/dashboard/images/client-photos/<?php echo $company['logo_thumbn'] ?>" alt="<?php echo $company['name'];?>" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#"><?php echo $company['name']; ?></a>
                                </h5>
                                <span class="email"><?php echo $company['email'] ?></span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="<?php echo $sys->domain() ?>/dashboard/account-dropdown__item">
                                <a href="dashboard/account/">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="<?php echo $sys->domain() ?>/dashboard/dashboard/account/change-password.php">
                                    <i class="zmdi zmdi-lock"></i>Change Password</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <a href="<?php echo $sys->domain() ?>/dashboard/dashboard/logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->