<?php
include_once dirname(__FILE__)."/../../System/System.php";
$sys = new System();
$coEm = $_COOKIE['username'];
$session = $_GET['session'];
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

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"/>
    
    <link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">

<?php include_once dirname(__FILE__)."/../../System/nav.php"; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Class Session Attendance Register</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h4 class="m-0 font-weight-bold text-info">Members</h4> <br>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>
                            <img src="http://teamvelocity.co.zw/wpv-content/2018/img/logo.png" width="200px"/>
                        </th>
                        <th>
                            <h6 class="m-0 font-weight-bold text-info">Activity: <?php

                                $clql = "SELECT * FROM `class_sessions` WHERE `id`= '$session' ";
                                $clqry = mysqli_query($sys->con, $clql);
                                if(mysqli_num_rows($clqry) == 0){

                                }else
                                    $clrs = mysqli_fetch_assoc($clqry);
                                $clss = $clrs['classID'];
                                $clql = "SELECT * FROM `classes` WHERE `id`='$clss'";
                                $clqry = mysqli_query($sys->con, $clql);
                                if(mysqli_num_rows($clqry) == 0){

                                }else
                                    $cllrs = mysqli_fetch_assoc($clqry);
                                $type = $cllrs['type'];
                                $tsql ="SELECT * FROM `activitiz` WHERE `id`='$type'";
                                $tqry = mysqli_query($sys->con, $tsql);
                                if(mysqli_num_rows($tqry) == 0){

                                }else
                                    $trs = mysqli_fetch_assoc($tqry);
                                echo $trs['nmt'];
                                ?><br>
                                <span class="m-0 text-danger">Session Date:  <?php echo date("j, M Y", strtotime($clrs['dt'])) ?></span>
                            </h6>
                        </th>
                        <th>
                            <?php
                            $emtl = $_COOKIE['username'];
                            $sql = "SELECT * FROM `company` WHERE `email`='$emtl'";
                            $qry = mysqli_query($sys->con, $sql);
                            $rs = mysqli_fetch_assoc($qry);
                            $logo = $rs["logo_thumbn"];

                            ?>
                            <img class=" rounded" src="<?php echo $uri; ?>/images/client-photos/<?php echo $logo; ?>" alt="" width="200">
                        </th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Member ID</th>
                        <th>Contact</th>
                        <th>Attendance</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Member ID</th>
                        <th>Contact</th>
                        <th>Attendance </th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php

                    $sys->getAllMembers($coEm, $session);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
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
<?php

include_once dirname(__FILE__)."/../../System/footer.php";


?>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        } );    });
</script>
