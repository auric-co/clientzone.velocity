<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER["HTTP_HOST"];

include_once 'dashboard/System/System.php';
$sys = new System();

if($sys->checkLoginState()){
	$sys->deleteCookie();
}

if(isset($_POST['emtl']) && isset($_POST['pwd'])){

    $u = $_POST['emtl'];
    $p = $_POST['pwd'];
	
	
	if($u && $p){
        $request = json_encode(array('email' => $u, 'password' => $p));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.velocityhealth.co.za/api/client/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $errr = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);

        if ($errr) {
            $err =  "Failed to connect to resource";
        } else {
            if ($data['success']){
                $sys->createRecord($u, $data['token']);
                header('location:dashboard');
            }
        }
	}
}
	

?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Client Portal | Velocity</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="http://velocityhealth.co.za/images/icons/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="http://clientzone.velocityhealth.co.za/css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="app">
	<div class="cam-img">
		<br/>
		 <a target="_blank" href="http://clientzone.velocityhealth.co.za/"><img src="http://velocityhealth.co.za/images/icons/logo.png" alt=""/></a>
	</div>
	<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="emtl" placeholder="Email"/>
		<input type="password" name="pwd" placeholder="Password"  />
		<input type="submit" value="Enter" />
	</form>
	<?php
        if(isset($err)){
        	echo "<hr/>";
        	echo '<div class="alert alert-danger">
			 <a href="#" class="close" data-dismiss="alert">&times;</a>
			 <strong>Error!</strong> '.$err.'!
		  </div>';
        }
        ?>
	<p>By logging in, you accept the<br><a href="http://velocityhealth.co.za/terms-of-use"> Terms of Service </a> and <a class="app-text" href="http://velocityhealth.co.za/privacy-policy">Privacy Policy</a></p>
</div>
<div class="copyright">
	<p>&copy; <?php echo date("Y") ?> Velocity</p>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
</body>
