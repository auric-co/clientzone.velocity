<?php
include_once dirname(__FILE__)."/../../System/System.php";
$sys = new System();
$page = "step";
?>
<!DOCTYPE html>
<base href="../../">
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Step</title>
    <link rel="icon" href="<?php echo $sys->domain() ?>/dashboard/images/icons/favicon.png" type="image/x-icon">
    <!-- Fontfaces CSS-->
    <link href="<?php echo $sys->domain() ?>/dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo $sys->domain() ?>/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"/>
    
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet" />
    <!-- Main CSS-->
    <link href="<?php echo $sys->domain() ?>/dashboard/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    
<?php include_once dirname(__FILE__)."/../../System/nav.php"; ?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Step
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- Begin Page Content -->
             <div class="container">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"></h1>
                <div class="dropdown no-arrow">
                   <!-- <button class="btn btn-primary btn-sm shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </button> -->
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Member Attendance Report</a>
                        <a class="dropdown-item" href="#">Class Attendance Report</a>
                        <a class="dropdown-item" href="#">Activity Popularity Reports</a>
                    </div>
                </div>        
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-40">Attendance (Monthly)</h3>
                            <canvas id="attendanceMonthly"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-40">Attendance (Yearly)</h3>
                            <canvas id="yearlyAttendance"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
            <!-- /.container-fluid -->
            
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Velocity Health © <?php echo date('Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>




<?php

include_once dirname(__FILE__)."/../../System/footer.php";


?>