<?php
session_start();
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

use PHPMailer\PHPMailer\PHPMailer;
include_once("../../../dashboard/includes/config.php");
include_once("../../../dashboard/includes/functions.php");
require_once("../../../dashboard/includes/encrt/lib/password.php");
include_once("../../../dashboard/includes/PHPMailer/PHPMailer.php");
include_once("../../../dashboard/includes/PHPMailer/Exception.php");
include_once("../../../dashboard/includes/PHPMailer/SMTP.php");

if (isset($_POST['save'])){
    $emtl = func::escape_data($dbc, $_POST['emtl']);
    $sql = "SELECT * FROM `ptnadmin` WHERE `emtl`='$emtl'";
    $qry = mysqli_query($dbc, $sql);
    if(mysqli_num_rows($qry) == 1){

        $tkn = func::createString(36);
        $rsql = "";
        $rqry = mysqli_query($dbc, $rsql);
        $subject = "Account Recovery - Velocity Clients Portal";
        $mail->addAddress($emtl);
        $mail->setFrom(noreplyEmail);
        $mail->Subject = $subject;
        $mail->isHTML(true);

        $body = func::recoveryEmail($tkn);
        $mail->Body = $body;

        if ($mail->send()) {
            echo "<script>alert('Please check your email, to complete account Recovery. If acount exist')</script>";
            func::deleteCookie();
            echo "<script>window.open('".$uri."', '_self')</script>";
        }else{
            echo "<script>alert('Action Failed. please contact Admin for further assistance.')</script>";
            echo "<script>window.open('".$uri."', '_self')</script>";
        }

    }else{
        echo "<script>alert('Account not found. Please enter valid email Address')</script>";
        echo "<script>window.open('".$uri."', '_self')</script>";
    }
}else{
    echo "Not Found";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Velocity - Change Password</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo $uri ?>/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo $uri ?>/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background: rgba(38,50,56,1);
        }

        .container {
            margin: 100px auto;
            height: 50vh;
            display: flex;
            background-color: rgba(236,239,241,1);
            box-shadow: 0 0 50px black;
        }

        .checkmark_ok {
            position: absolute;
            animation: grow 1.4s cubic-bezier(0.42, 0, 0.275, 1.155) both;
        }
        .checkmark_ok:nth-child(1) {
            width: 12px;
            height: 12px;
            left: 12px;
            top: 16px;
        }
        .checkmark_ok:nth-child(2) {
            width: 18px;
            height: 18px;
            left: 168px;
            top: 84px;
        }
        .checkmark_ok:nth-child(3) {
            width: 10px;
            height: 10px;
            left: 32px;
            top: 162px;
        }
        .checkmark_ok:nth-child(4) {
            width: 20px;
            height: 20px;
            left: 82px;
            top: -12px;
        }
        .checkmark_ok:nth-child(5) {
            width: 14px;
            height: 14px;
            left: 125px;
            top: 162px;
        }
        .checkmark_ok:nth-child(6) {
            width: 10px;
            height: 10px;
            left: 16px;
            top: 16px;
        }
        .checkmark_ok:nth-child(1) {
            animation-delay: 0.7s;
        }
        .checkmark_ok:nth-child(2) {
            animation-delay: 1.4s;
        }
        .checkmark_ok:nth-child(3) {
            animation-delay: 2.1s;
        }
        .checkmark_ok:nth-child(4) {
            animation-delay: 2.8s;
        }
        .checkmark_ok:nth-child(5) {
            animation-delay: 3.5s;
        }
        .checkmark_ok:nth-child(6) {
            animation-delay: 4.2s;
        }

        .checkmark {
            position: relative;
            padding: 30px;
            /*   animation: checkmark 5.6s cubic-bezier(0.42, 0, 0.275, 1.155) both; */
            animation: checkmark 60.6s cubic-bezier(0.42, 0, 0.275, 1.155) both;
        }

        .checkmark__check {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 10;
            transform: translate3d(-50%, -50%, 0);
            fill: #fff;
        }

        .checkmark__back {
            animation: rotate 35s linear both infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes grow {
            0%, 100% {
                transform: scale(0);
            }
            50% {
                transform: scale(1);
            }
        }

        @keyframes checkmark {
            0%, 100% {
                opacity: 0;
                transform: scale(0);
            }
            10%, 50%, 90% {
                opacity: 1;
                transform: scale(1);
            }
        }


    </style>
</head>

<body class="bg-gradient-primary">


<?php
if (func::checkLoginState($dbh)) {
    func::deleteCookie();
}
if (isset($_GET['id'])){

    $tkn = func::escape_data($dbc, $_GET['id']);
    $sql = "SELECT * FROM `revertPD` WHERE `id`='$tkn'";
    $qry = mysqli_query($dbc, $sql);
    if (mysqli_num_rows($qry) == 1){
        $rs = mysqli_fetch_assoc($qry);
        $emtl = $rs['emtl'];
        $hash = $rs['pd'];
        $acc = $rs['access_point'];//use this to select table
        $table = "";
        $usPD = "pwd";
        if ($acc == 3){
            $table = "ptnadmin";
        }elseif ($acc == 2){
            $table = "admn_tb";
        }elseif($acc == 1){
            $table = "lgt";
            $usPD = "ptwd";
        }
        $ssql = "SELECT * FROM `".$table."` WHERE `emtl` = '$emtl'";
        $ssqry = mysqli_query($dbc, $ssql);
        if(mysqli_num_rows($ssqry) == 1){
            $usql = "UPDATE `.$table.` SET `".$usPD."`='$hash' WHERE `emtl`='$emtl'";
            $uqry = mysqli_query($dbc, $sql);
            if ($uqry){
                ?>
          <div class="container">
              <div class="row m-auto">
                  <div class="checkmark">
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark_ok" height="19" viewBox="0 0 19 19" width="19" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z" fill="#5F4B8B">
                      </svg>
                      <svg class="checkmark__check" height="36" viewBox="0 0 48 36" width="48" xmlns="http://www.w3.org/2000/svg">
                          <path d="M47.248 3.9L43.906.667a2.428 2.428 0 0 0-3.344 0l-23.63 23.09-9.554-9.338a2.432 2.432 0 0 0-3.345 0L.692 17.654a2.236 2.236 0 0 0 .002 3.233l14.567 14.175c.926.894 2.42.894 3.342.01L47.248 7.128c.922-.89.922-2.34 0-3.23">
                      </svg>
                      <svg class="checkmark__back" height="115" viewBox="0 0 120 115" width="120" xmlns="http://www.w3.org/2000/svg">
                          <path d="M107.332 72.938c-1.798 5.557 4.564 15.334 1.21 19.96-3.387 4.674-14.646 1.605-19.298 5.003-4.61 3.368-5.163 15.074-10.695 16.878-5.344 1.743-12.628-7.35-18.545-7.35-5.922 0-13.206 9.088-18.543 7.345-5.538-1.804-6.09-13.515-10.696-16.877-4.657-3.398-15.91-.334-19.297-5.002-3.356-4.627 3.006-14.404 1.208-19.962C10.93 67.576 0 63.442 0 57.5c0-5.943 10.93-10.076 12.668-15.438 1.798-5.557-4.564-15.334-1.21-19.96 3.387-4.674 14.646-1.605 19.298-5.003C35.366 13.73 35.92 2.025 41.45.22c5.344-1.743 12.628 7.35 18.545 7.35 5.922 0 13.206-9.088 18.543-7.345 5.538 1.804 6.09 13.515 10.696 16.877 4.657 3.398 15.91.334 19.297 5.002 3.356 4.627-3.006 14.404-1.208 19.962C109.07 47.424 120 51.562 120 57.5c0 5.943-10.93 10.076-12.668 15.438z" fill="#5F4B8B">
                      </svg>
                  </div>
                  <div class="col-md-6" style="margin: 0 auto;">
                      <h3>SUCCESS!</h3>
                      <p>Password successfully reverted to previous one.</p>
                      <small class="text-muted">We sincerely apologise for any inconveniences caused. Please notify admin of the error. </small>
                      <button class="btn btn-success" href="<?php echo $uri; ?>">Login</button>

                  </div>
              </div>
          </div>

                <?php
                echo "<script>alert(' Password reverted to previous one successfully. Please Login Again')</script>";
                echo "<script>window.open('".$uri."', '_self')</script>";
            }else{
                include_once "account-recovery.php";
            }
        }else{
            echo "<script>alert('Fatal error! Token expired or broken. Account could not be found. Please contact Admin')</script>";
            echo "<script>window.open('".$uri."', '_self')</script>";
        }

    }else{
        echo "<script>alert('Token has already expired. If you cannot access account, try to recover account below')</script>";
        include_once "account-recovery.php";
    }

}else{
    header("location:".$uri);
    exit();
}
?>

</body>

</html>
