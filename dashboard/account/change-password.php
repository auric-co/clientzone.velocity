<?php
include_once dirname(__FILE__)."/../System/header.php";
if(!$sys->checkLoginState()){
	header('location:'.$sys->domain());
}

$err = "";
if(isset($_POST['change'])){
    $old = $sys->escape_data($_POST['password']);
    $new = $sys->escape_data($_POST['newpassword']);
    $confirm = $sys->escape_data($_POST['confirmPassword']);
    
    if($new !== $confirm){
        $err = '<div class="alert alert-danger">
        			 <a href="#" class="close" data-dismiss="alert">&times;</a>
        			 <strong>Error!</strong> Passwords do not match!
        		  </div>';
    }elseif($old == $new){
        $err = '<div class="alert alert-danger">
        			 <a href="#" class="close" data-dismiss="alert">&times;</a>
        			 <strong>Error!</strong>New Passwords cannot be equal to old one. Please emter a new Password!
        		  </div>';
    }else{
        $sys->setPassword($old);
        $sys->setNewPassword($new);
        $sys->setConfirmPassword($confirm);
        $sys->setToken($sys->getUserToken());
        $change = $sys->updatePassword();
        
        
        
        if($change['success'] == true){
            $err = '<div class="alert alert-success">
            			 <a href="#" class="close" data-dismiss="alert">&times;</a>
            			 <strong>Success!</strong> Password changed successfully!
            		  </div>';
        }else{
            if($change['error']['message']){
                $err = '<div class="alert alert-danger">
            			 <a href="#" class="close" data-dismiss="alert">&times;</a>
            			 <strong>Error!</strong> '.$change['error']['message'].'!
            		  </div>';
            }else{
                $err = '<div class="alert alert-danger">
            			 <a href="#" class="close" data-dismiss="alert">&times;</a>
            			 <strong>Error!</strong> Resource ofline. Please contact admin if problem persist!
            		  </div>';
            }
        }
    }
}




?>

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
                                            <a href="<?php echo $sys->domain(); ?>/dashboard/">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item active">
                                            <a href="<?php echo $sys->domain(); ?>/dashboard/account/">Profile</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Change Password</li>
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
                            <h1 class="title-4">Welcome back
                                <span> <?php
                             echo $company['name'];
                            
                            ?></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
            
            <div class="section__content section__content--p30 my-5">
                    <div class="container-fluid">
                        <div class="row">
                            <?php if($err){ echo $err;} ?>
                            <div class="col-md-6" style="margin:0 auto;">
                                <div class="card">
                                    <div class="card-header">Update Password</div>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="password" class="control-label mb-1">Old Password</label>
                                                <input id="password" name="password" type="password" class="form-control" required placeholder="Old Password">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="newpassword" class="control-label mb-1">New Password</label>
                                                <input id="newpassword" name="newpassword" type="password" class="form-control valid" placeholder="Enter New Password" required>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="confirmPassword" class="control-label mb-1">Confirm Password</label>
                                                <input id="confirmPassword" name="confirmPassword" type="password" class="form-control" placeholder="Confirm password" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button id="cancel" type="reset" class="btn btn-danger btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp; Cancel
                                                </button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button id="change" type="submit" name="change" class="btn  btn-info btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp; Save
                                                </button>
                                                </div>
                                            </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

include_once dirname(__FILE__)."/../System/footer.php";


?>