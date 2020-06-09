<?php
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
$mail = new PHPMailer();
$mail->SMTPAuth = true;
$mail->Username = noreplyEmail;
$mail->Password = norplyPass;
$mail->SMTPSecure = "TLS"; //ssl
$mail->Port = 587; //465

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
            <div class="card o-hidden border-0 shadow-lg my-5" style="margin: 0 auto;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Account Recovery</h1>
                                    <p class="mb-4">Please enter your account access email address to start the recovery process!</p>
                                </div>
                                <form class="user" method="post" action="account-recovery.php">
                                    <div class="form-group">
                                        <input type="email" required class="form-control form-control-user" name="emtl" id="emtl" aria-describedby="emailHelp" placeholder="Enter Account Email ...">
                                    </div>
                                    <hr>

                                    <button type="submit" name="save" class="btn btn-primary btn-user btn-block">
                                        Recover Account
                                    </button>
                                </form>
                                <hr>
                                <ul class="row list-inline">
                                    <li class="list-inline-item">
                                        <a href="<?php echo $uri; ?>" class="btn btn-success">Cancel and Go to Login</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

