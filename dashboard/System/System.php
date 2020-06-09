<?php

/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/24/2019
 * Time: 12:07 PM
 */
include_once dirname(__FILE__) . '/Database.php';
include_once "vendor/autoload.php";
use PHPMailer\PHPMailer;
use Firebase\JWT\JWT;
class System
{

    public $pdo;
    public $con;
    protected $token;
    protected $email;
    protected $msisdn;
    protected $countryCode;
    protected $country;
    protected $name;
    protected $lastName;
    protected $category;
    protected $mode;
    protected $model;
    protected $type;
    protected $transmission;
    protected $fuel;
    protected $brand;
    protected $desc;
    protected $bedrooms;
    protected $dateStart;
    protected $dob;
    protected $code;
    protected $thumbnail;
    protected $address;
    protected $town;
    protected $gender;
    protected $nationID;
    protected $id;
    protected $serial;
    protected $password;
    protected $newPassword;
    protected $confirmPassword;
    protected $price;
    protected $level;
    protected $field;
    protected $qualification;
    protected $deadline;

    /**
     * @param mixed $newPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }


    /**
     * @return mixed
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @param mixed $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @param mixed $bedrooms
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;
    }


    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @return mixed
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }
    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $deadline
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    }

    /**
     * @return mixed
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return mixed
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }

    /**
     * @param mixed $qualification
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;
    }
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @param mixed $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }


    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $msisdn
     */
    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    /**
     * @return mixed
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }


    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }


    /**
     * @param mixed $nationID
     */
    public function setNationID($nationID)
    {
        $this->nationID = $nationID;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


    /**
     * @return mixed
     */
    public function getNationID()
    {
        return $this->nationID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * @return mixed
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * @param mixed $confirmPassword
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }


    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    public function __construct()
    {
        session_start();
        $db = new Database();
        $this->pdo = $db->PDO();
        $this->con = $db->mysqli();

    }

    public function domain(){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }

        $uri .= $_SERVER['HTTP_HOST'];
        return $uri;
    }

    public function escape_data ($data) {
        if (function_exists('mysql_real_escape_string')) {
            $data = mysqli_real_escape_string ($this->con, trim($data));
            $data = strip_tags($data);
        } else {
            $data = mysqli_escape_string ($this->con, trim($data));
            $data = strip_tags($data);
        }
        return $data;

    }

   public  function getUserToken(){
      
        if($this->checkLoginState()){

            $u = $_COOKIE['token'];

            $query = "SELECT * FROM `ptn_sess` WHERE  `sess_srl` =  :serial;";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute(array(':serial' =>$u));

            $row = $stmt-> fetch(PDO::FETCH_ASSOC);

            if($row['sess_id'] > 0){
                return $row['sess_tkn'];
            }else{
                header("location:".$this->domain()."?error=token-not-found");
                exit();
            }

        }
   }
    
    

    public function checkLoginState(){

        try{
            if(!isset($_SESSION)){

                session_start();
            }
            
            if(isset($_COOKIE['username']) && isset($_COOKIE['token'])){
			
    			$userid = $_COOKIE['username'];
    			$serial = $_COOKIE['token'];
    							
    			$query = "SELECT * FROM `ptn_sess` WHERE `sess_us_id` = :userid AND `sess_srl` = :serial;";
    			
    			$stmt = $this->pdo ->prepare($query);
    			$stmt->execute(array(':userid' =>$userid, ':serial' =>$serial));
    			
    			$row = $stmt-> fetch(PDO::FETCH_ASSOC);
                $payload = JWT::decode($row['sess_tkn'], SECRETE_KEY, ['HS256']);
                $company = $payload->userId;
                if($company > 0){
                    return true;
                }else{
                    return false;
                }
    
    		}else{
    		    return false;
    		    
            }
        }catch (\Exception $e){
            return false;
        }

    }

   public  function createRecord($admin_name, $userToken){

		$serial = $this->createString(30);

       $this-> createSession($admin_name, $serial);
       $this-> createCookie($admin_name,$serial);
	
        $this->pdo->prepare('DELETE FROM `ptn_sess` WHERE `sess_us_id` = :sess_us_id;') ->execute(array(':sess_us_id' =>$admin_name));

        $query ="INSERT INTO `ptn_sess`(`sess_id`,`sess_us_id`, `sess_tkn`, `sess_srl`,  `sess_dt`) VALUES ('',:admin_id,:token,:sserial, now())";
        $stmt = $this->pdo->prepare($query);

        if($stmt->execute(array(':admin_id' =>$admin_name, ':token' => $userToken, ':sserial' => $serial))){

            return true;

        }else{
            return false;
        }
			
	}

   public  function createSession($admin_name,$serial){
		if(!isset($_SESSION)){
			session_start();
		}
		$_SESSION['username'] = $admin_name;
		$_SESSION['serial'] = $serial;

	}

	public  function createCookie($admin_name, $token){
		setcookie('username', $admin_name, time() + (86400) * 30, "/");
		setcookie('token', $token, time() + (86400) * 30, "/");
	}

	public  function deleteCookie(){
		setcookie('username', '', time() -1, "/");
		setcookie('serial', '', time() -1, "/");
		session_destroy();
	}

	public function createString($len){
		$string = "1qay2wsx3edc4rfv5tgb6zhn7ujm8ik9ollpAQWSXEDCVFRTGBNHYZUJMKILOP";
		
		return substr(str_shuffle($string), 0, $len);
	}

    public function login(){

        $request = json_encode(array('email' => $this->getEmail(), 'password' => $this->getPassword()));
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
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);

        if ($err) {
            return "Failed to connect to resource";
        } else {
            if($data['success'] == true){
                return $data;

            }else{
               return "Login Unsuccessful";
            }
        }


    }
    
    public function updatePassword(){
         $request = json_encode(
             array(
                 'password' => $this->getPassword(), 
                 'newPassword' => $this->getNewPassword(),
                 "confirmPassword" => $this->getConfirmPassword(),
                 "token" => $this->getUserToken()
                )
             );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.velocityhealth.co.za/api/client/update/password",
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
        $err = curl_error($curl);
        $data = json_decode($response, true);
        curl_close($curl);

        if ($err) {
            return "Failed to connect to resource";
        } else {
            if($data['success'] == true){
                return $data;

            }else{
               return "Password Update Unsuccessful";
            }
        }
    }

    public function getAttendance($session){
        $sql = "SELECT * FROM `attendance` WHERE `class_sess`='$session' AND `attend`= '1' ";
        $qry =  mysqli_query($this->con, $sql);
        $count =  mysqli_num_rows($qry);
        if($count != 0 && $count > 0){
            return $count;
        }else{
            return 0;
        }
    }

    public function getSession($dt, $class){
        $sess = "SELECT * FROM `class_sessions` WHERE `classID`='$class' AND `dt`='$dt' ";
        $ssesql =mysqli_query($this->con, $sess);

        $sessrr = mysqli_fetch_assoc($ssesql);
        if (mysqli_num_rows($ssesql) == 1){
            return $sessrr['id'];
        }else{
            return 0;
        }

    }

    public  function co($co){
        $sql = "SELECT `id`, `name`, `email`, `logo_thumbn` FROM `company` WHERE `email`='$co' ";
        $qry = mysqli_query($this->con, $sql);
        if(mysqli_num_rows($qry) == 1){
            return mysqli_fetch_assoc($qry);
        }else{
            return false;
        }
    }

    public  function companyID(){
        $id = $_COOKIE["username"];
        $csql = "SELECT * FROM `company` WHERE `email`= '$id'";
        $cqry = mysqli_query($this->con, $csql);
        $crs = mysqli_fetch_assoc($cqry);
        return $crs['id'];
    }

    public static function recoveryEmail($idToken){

        $body = '
        <!doctype html>
        <html>
          <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width" />
            
            <title>Recover Account - Velocity</title>
            <link href="http://clients.teamvelocity.co.zw/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            
              <!-- Custom styles for this template-->
            <link href="http://clients.teamvelocity.co.zw/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
            <style>
              /* -------------------------------------
                  GLOBAL RESETS
              ------------------------------------- */
              
              /*All the styling goes here*/
              
              img {
                border: none;
                -ms-interpolation-mode: bicubic;
                max-width: 100%; 
              }
        
              body {
                background-color: #00a652;
                font-family: sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 14px;
                line-height: 1.4;
                margin: 0;
                padding: 0;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%; 
              }
        
              table {
                border-collapse: separate;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                width: 100%; }
                table td {
                  font-family: sans-serif;
                  font-size: 14px;
                  vertical-align: top; 
              }
        
              /* -------------------------------------
                  BODY & CONTAINER
              ------------------------------------- */
        
              .body {
                background-color: #00a652;
                width: 100%; 
                font-family:;
              }
        
              /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
              .container {
                display: block;
                margin: 0 auto !important;
                /* makes it centered */
                max-width: 580px;
                padding: 10px;
                width: 580px; 
              }
        
              /* This should also be a block element, so that it will fill 100% of the .container */
              .content {
                box-sizing: border-box;
                display: block;
                margin: 0 auto;
                max-width: 580px;
                padding: 10px; 
              }
        
              /* -------------------------------------
                  HEADER, FOOTER, MAIN
              ------------------------------------- */
              .main {
                background: #ffffff;
                border-radius: 3px;
                width: 100%; 
              }
        
              .wrapper {
                box-sizing: border-box;
                padding: 20px; 
              }
        
              .content-block {
                padding-bottom: 10px;
                padding-top: 10px;
              }
        
              .footer {
                clear: both;
                margin-top: 10px;
                text-align: center;
                width: 100%; 
              }
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                  color: #ffffff;
                  font-size: 12px;
                  text-align: center; 
              }
        
              /* -------------------------------------
                  TYPOGRAPHY
              ------------------------------------- */
              h1,
              h2,
              h3,
              h4 {
                color: #000000;
                font-family: sans-serif;
                font-weight: 400;
                line-height: 1.4;
                margin: 0;
                margin-bottom: 30px; 
              }
        
              h1 {
                font-size: 35px;
                font-weight: 300;
                text-align: center;
                text-transform: capitalize; 
              }
        
              p,
              ul,
              ol {
                font-family: sans-serif;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                margin-bottom: 15px; 
              }
                p li,
                ul li,
                ol li {
                  list-style-position: inside;
                  margin-left: 5px; 
              }
        
              a {
                color: #3498db;
                text-decoration: underline; 
              }
        
              /* -------------------------------------
                  BUTTONS
              ------------------------------------- */
              
              .btn {
                box-sizing: border-box;
                width: 100%; }
                .btn > tbody > tr > td {
                  padding-bottom: 15px; }
                .btn table {
                  width: auto; 
              }
                .btn table td {
                  background-color: #ffffff;
                  border-radius: 5px;
                  text-align: center; 
              }
                .btn a {
                  background-color: #ffffff;
                  border: solid 1px #3498db;
                  border-radius: 5px;
                  box-sizing: border-box;
                  color: #3498db;
                  cursor: pointer;
                  display: inline-block;
                  font-size: 14px;
                  font-weight: bold;
                  margin: 0;
                  padding: 12px 25px;
                  text-decoration: none;
                  text-transform: capitalize; 
              }
        
              .btn-primary table td {
                background-color: #3498db; 
              }
        
              .btn-primary a {
                background-color: #3498db;
                border-color: #3498db;
                color: #ffffff; 
              }
        
              /* -------------------------------------
                  OTHER STYLES THAT MIGHT BE USEFUL
              ------------------------------------- */
              .last {
                margin-bottom: 0; 
              }
        
              .first {
                margin-top: 0; 
              }
        
              .align-center {
                text-align: center; 
              }
        
              .align-right {
                text-align: right; 
              }
        
              .align-left {
                text-align: left; 
              }
        
              .clear {
                clear: both; 
              }
        
              .mt0 {
                margin-top: 0; 
              }
        
              .mb0 {
                margin-bottom: 0; 
              }
        
              .preheader {
                color: transparent;
                display: none;
                height: 0;
                max-height: 0;
                max-width: 0;
                opacity: 0;
                overflow: hidden;
                mso-hide: all;
                visibility: hidden;
                width: 0; 
              }
        
              .powered-by a {
                text-decoration: none; 
              }
        
              hr {
                border: 0;
                border-bottom: 1px solid #f6f6f6;
                margin: 20px 0; 
              }
        
              /* -------------------------------------
                  RESPONSIVE AND MOBILE FRIENDLY STYLES
              ------------------------------------- */
              @media only screen and (max-width: 620px) {
                table[class=body] h1 {
                  font-size: 28px !important;
                  margin-bottom: 10px !important; 
                }
                table[class=body] p,
                table[class=body] ul,
                table[class=body] ol,
                table[class=body] td,
                table[class=body] span,
                table[class=body] a {
                  font-size: 16px !important; 
                }
                table[class=body] .wrapper,
                table[class=body] .article {
                  padding: 10px !important; 
                }
                table[class=body] .content {
                  padding: 0 !important; 
                }
                table[class=body] .container {
                  padding: 0 !important;
                  width: 100% !important; 
                }
                table[class=body] .main {
                  border-left-width: 0 !important;
                  border-radius: 0 !important;
                  border-right-width: 0 !important; 
                }
                table[class=body] .btn table {
                  width: 100% !important; 
                }
                table[class=body] .btn a {
                  width: 100% !important; 
                }
                table[class=body] .img-responsive {
                  height: auto !important;
                  max-width: 100% !important;
                  width: auto !important; 
                }
              }
        
              /* -------------------------------------
                  PRESERVE THESE STYLES IN THE HEAD
              ------------------------------------- */
              @media all {
                .ExternalClass {
                  width: 100%; 
                }
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                  line-height: 100%; 
                }
                .apple-link a {
                  color: inherit !important;
                  font-family: inherit !important;
                  font-size: inherit !important;
                  font-weight: inherit !important;
                  line-height: inherit !important;
                  text-decoration: none !important; 
                }
                .btn-primary table td:hover {
                  background-color: #34495e !important; 
                }
                .btn-primary a:hover {
                  background-color: #34495e !important;
                  border-color: #34495e !important; 
                } 
              }
              
              .btn-success {
                    position: relative;
                    display: inline-block;
                    padding: 1.2em 2em;
                    text-decoration: none;
                    text-align: center;
                    cursor: pointer;
                    user-select: none;
                    color: white;
                    
                    &::before {
                        content: \'\';
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0;
                        background: linear-gradient(135deg, #6e8efb, #a777e3);
                        border-radius: 4px;
                        transition: box-shadow .5s ease, transform .2s ease; 
                        will-change: transform;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
                        transform:
                            translateY(var(--ty, 0))
                            rotateX(var(--rx, 0))
                            rotateY(var(--ry, 0))
                            translateZ(var(--tz, -12px));
                    }
                    
                    &:hover::before {
                        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
                    }
                    
                    &::after {
                        position: relative;
                        display: inline-block;
                        content: attr(data-title);
                        transition: transform .2s ease; 
                        font-weight: bold;
                        letter-spacing: .01em;
                        will-change: transform;
                        transform:
                            translateY(var(--ty, 0))
                            rotateX(var(--rx, 0))
                            rotateY(var(--ry, 0));
                    }
                }
        
            </style>
          </head>
          <body class="">
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
              <tr>
                <td>&nbsp;</td>
                <td class="container">
                  <div class="content">
        
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">
        
                      <!-- START MAIN CONTENT AREA -->
                      <tr>
                        <td class="wrapper">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>
                                <h2 align=\'center\'>Account Recovery</h2>
                                <p>To complete account Recovery, press the link below</p>
                                <hr>
                                <p>Please ignore this message if you did not initiate this action. However this would mean someone tried to change your account password. Please secure your email Address, for Your account is as secure as your email account is.</p>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                  <tbody>
                                    <tr>
                                      <td align="left">
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td> <a class="btn btn-primary btn-user btn-block" href="http://clients.teamvelocity.co.zw/account/recovery/?id='.$idToken.'" target="_blank">Recover Account</a> </td>
                                            </tr>
                                         
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <hr>
                                <p>Please be advised the above link will expire in 12hours from now</p>
                                <p>Regards! </p>
                                <p style="color: lime; font-weight: 500; font-style: italic; font-size: 15px;">Admin! </p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
        
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
        
                    <!-- START FOOTER -->
                    <div class="footer">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="content-block">
                            <span class="apple-link">Velocity Health, 22 Maiden Drive, Newlands. Harare</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block powered-by">
                            Copyright &copy; Velocity '.date("Y").'
                          </td>
                        </tr>
                      </table>
                    </div>
                    <!-- END FOOTER -->
        
                  </div>
                </td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </body>
        </html>
        
        ';
        return $body;

    }

    public static function clientEmail($idToken){

        $body = '
        <!doctype html>
        <html>
          <head>
            <meta name="viewport" content="width=device-width" />
            
            <title>Client Company - Velocity</title>
            <style>
              /* -------------------------------------
                  GLOBAL RESETS
              ------------------------------------- */
              
              /*All the styling goes here*/
              
              img {
                border: none;
                -ms-interpolation-mode: bicubic;
                max-width: 100%; 
              }
        
              body {
                background-color: #00a652;
                font-family: sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 14px;
                line-height: 1.4;
                margin: 0;
                padding: 0;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%; 
              }
        
              table {
                border-collapse: separate;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                width: 100%; }
                table td {
                  font-family: sans-serif;
                  font-size: 14px;
                  vertical-align: top; 
              }
        
              /* -------------------------------------
                  BODY & CONTAINER
              ------------------------------------- */
        
              .body {
                background-color: #00a652;
                width: 100%; 
              }
        
              /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
              .container {
                display: block;
                margin: 0 auto !important;
                /* makes it centered */
                max-width: 580px;
                padding: 10px;
                width: 580px; 
              }
        
              /* This should also be a block element, so that it will fill 100% of the .container */
              .content {
                box-sizing: border-box;
                display: block;
                margin: 0 auto;
                max-width: 580px;
                padding: 10px; 
              }
        
              /* -------------------------------------
                  HEADER, FOOTER, MAIN
              ------------------------------------- */
              .main {
                background: #ffffff;
                border-radius: 3px;
                width: 100%; 
              }
        
              .wrapper {
                box-sizing: border-box;
                padding: 20px; 
              }
        
              .content-block {
                padding-bottom: 10px;
                padding-top: 10px;
              }
        
              .footer {
                clear: both;
                margin-top: 10px;
                text-align: center;
                width: 100%; 
              }
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                  color: #ffffff;
                  font-size: 12px;
                  text-align: center; 
              }
        
              /* -------------------------------------
                  TYPOGRAPHY
              ------------------------------------- */
              h1,
              h2,
              h3,
              h4 {
                color: #000000;
                font-family: sans-serif;
                font-weight: 400;
                line-height: 1.4;
                margin: 0;
                margin-bottom: 30px; 
              }
        
              h1 {
                font-size: 35px;
                font-weight: 300;
                text-align: center;
                text-transform: capitalize; 
              }
        
              p,
              ul,
              ol {
                font-family: sans-serif;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                margin-bottom: 15px; 
              }
                p li,
                ul li,
                ol li {
                  list-style-position: inside;
                  margin-left: 5px; 
              }
        
              a {
                color: #3498db;
                text-decoration: underline; 
              }
        
              /* -------------------------------------
                  BUTTONS
              ------------------------------------- */
              
              .btn {
                box-sizing: border-box;
                width: 100%; }
                .btn > tbody > tr > td {
                  padding-bottom: 15px; }
                .btn table {
                  width: auto; 
              }
                .btn table td {
                  background-color: #ffffff;
                  border-radius: 5px;
                  text-align: center; 
              }
                .btn a {
                  background-color: #ffffff;
                  border: solid 1px #3498db;
                  border-radius: 5px;
                  box-sizing: border-box;
                  color: #3498db;
                  cursor: pointer;
                  display: inline-block;
                  font-size: 14px;
                  font-weight: bold;
                  margin: 0;
                  padding: 12px 25px;
                  text-decoration: none;
                  text-transform: capitalize; 
              }
        
              .btn-primary table td {
                background-color: #3498db; 
              }
        
              .btn-primary a {
                background-color: #3498db;
                border-color: #3498db;
                color: #ffffff; 
              }
        
              /* -------------------------------------
                  OTHER STYLES THAT MIGHT BE USEFUL
              ------------------------------------- */
              .last {
                margin-bottom: 0; 
              }
        
              .first {
                margin-top: 0; 
              }
        
              .align-center {
                text-align: center; 
              }
        
              .align-right {
                text-align: right; 
              }
        
              .align-left {
                text-align: left; 
              }
        
              .clear {
                clear: both; 
              }
        
              .mt0 {
                margin-top: 0; 
              }
        
              .mb0 {
                margin-bottom: 0; 
              }
        
              .preheader {
                color: transparent;
                display: none;
                height: 0;
                max-height: 0;
                max-width: 0;
                opacity: 0;
                overflow: hidden;
                mso-hide: all;
                visibility: hidden;
                width: 0; 
              }
        
              .powered-by a {
                text-decoration: none; 
              }
        
              hr {
                border: 0;
                border-bottom: 1px solid #f6f6f6;
                margin: 20px 0; 
              }
        
              /* -------------------------------------
                  RESPONSIVE AND MOBILE FRIENDLY STYLES
              ------------------------------------- */
              @media only screen and (max-width: 620px) {
                table[class=body] h1 {
                  font-size: 28px !important;
                  margin-bottom: 10px !important; 
                }
                table[class=body] p,
                table[class=body] ul,
                table[class=body] ol,
                table[class=body] td,
                table[class=body] span,
                table[class=body] a {
                  font-size: 16px !important; 
                }
                table[class=body] .wrapper,
                table[class=body] .article {
                  padding: 10px !important; 
                }
                table[class=body] .content {
                  padding: 0 !important; 
                }
                table[class=body] .container {
                  padding: 0 !important;
                  width: 100% !important; 
                }
                table[class=body] .main {
                  border-left-width: 0 !important;
                  border-radius: 0 !important;
                  border-right-width: 0 !important; 
                }
                table[class=body] .btn table {
                  width: 100% !important; 
                }
                table[class=body] .btn a {
                  width: 100% !important; 
                }
                table[class=body] .img-responsive {
                  height: auto !important;
                  max-width: 100% !important;
                  width: auto !important; 
                }
              }
        
              /* -------------------------------------
                  PRESERVE THESE STYLES IN THE HEAD
              ------------------------------------- */
              @media all {
                .ExternalClass {
                  width: 100%; 
                }
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                  line-height: 100%; 
                }
                .apple-link a {
                  color: inherit !important;
                  font-family: inherit !important;
                  font-size: inherit !important;
                  font-weight: inherit !important;
                  line-height: inherit !important;
                  text-decoration: none !important; 
                }
                .btn-primary table td:hover {
                  background-color: #34495e !important; 
                }
                .btn-primary a:hover {
                  background-color: #34495e !important;
                  border-color: #34495e !important; 
                } 
              }
              
              .btn-success {
                    position: relative;
                    display: inline-block;
                    padding: 1.2em 2em;
                    text-decoration: none;
                    text-align: center;
                    cursor: pointer;
                    user-select: none;
                    color: white;
                    
                    &::before {
                        content: \'\';
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0;
                        background: linear-gradient(135deg, #6e8efb, #a777e3);
                        border-radius: 4px;
                        transition: box-shadow .5s ease, transform .2s ease; 
                        will-change: transform;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
                        transform:
                            translateY(var(--ty, 0))
                            rotateX(var(--rx, 0))
                            rotateY(var(--ry, 0))
                            translateZ(var(--tz, -12px));
                    }
                    
                    &:hover::before {
                        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
                    }
                    
                    &::after {
                        position: relative;
                        display: inline-block;
                        content: attr(data-title);
                        transition: transform .2s ease; 
                        font-weight: bold;
                        letter-spacing: .01em;
                        will-change: transform;
                        transform:
                            translateY(var(--ty, 0))
                            rotateX(var(--rx, 0))
                            rotateY(var(--ry, 0));
                    }
                }
        
            </style>
          </head>
          <body class="">
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
              <tr>
                <td>&nbsp;</td>
                <td class="container">
                  <div class="content">
        
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">
        
                      <!-- START MAIN CONTENT AREA -->
                      <tr>
                        <td class="wrapper">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>
                                <h2 align=\'center\'>Account Credentials Change Notice</h2>
                                <p>Your Velocity Clients Portal Account password has been changed. If you did not initiate this change, please click on the link below to revert to old account credentials.</p>
                                <p>Please ignore this message if account password change was intended</p>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                  <tbody>
                                    <tr>
                                      <td align="left">
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td> <a class="btn-primary" href="http://clients.teamvelocity.co.zw/revert/account/password?id='.$idToken.'" target="_blank">It was\'nt me!</a> </td>
                                              <td> <a class="btn btn-success" href="http://clients.teamvelocity.co.zw/" target="_blank">It was Me!</a> </td>
                                            </tr>
                                         
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <hr>
                                <p>Please be advised the above link will expire in 12hours from now</p>
                                <p>Regards! </p>
                                <p style="color: lime; font-weight: 500; font-style: italic; font-size: 15px;">Admin! </p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
        
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
        
                    <!-- START FOOTER -->
                    <div class="footer">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="content-block">
                            <span class="apple-link">Velocity Health, 22 Maiden Drive, Newlands. Harare</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block powered-by">
                            Copyright &copy; Velocity '.date("Y").'
                          </td>
                        </tr>
                      </table>
                    </div>
                    <!-- END FOOTER -->
        
                  </div>
                </td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </body>
        </html>
        
        ';
        return $body;

    }

    public   function getAllMembers($coEm, $session){

        $id = $this->getId();
        $sql = "SELECT * FROM `users` WHERE `company`='$id'";
        $query = mysqli_query($this->con, $sql);
        if(mysqli_num_rows($query) == 0){
            echo '<tr>
                        <td>-</td>
                        <td>-</td>
                        <td>No Members found</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>';
        }else{

            while($rs = mysqli_fetch_assoc($query)){
                ?>
                <tr>

                    <td><?php echo $rs['surname']." ".$rs['name']; ?></td>
                    <td>
                        <?php echo $rs['member_number']; ?>
                    </td>
                    <td><?php echo $rs['msisdn']; ?></td>
                    <td>
                        <?php
                        $mID = $rs['id'];
                        $gaSql = "SELECT * FROM `attendance` WHERE `member`='$mID' AND `class_sess` = '$session'";
                        $gqry = mysqli_query($this->con, $gaSql);
                        if (mysqli_num_rows($gqry) == 0){
                            echo '<span class="text-danger">Register not Marked</span>';
                        }else{
                            $grs = mysqli_fetch_assoc($gqry);
                            if ($grs['attend'] == 1){
                                echo '<span class="text-success font-weight-bold fs-18">X</span>';
                            }elseif($grs['attend'] == 2){
                                echo '<span class="text-danger"></span>';
                            }else{
                                echo '<span class="text-warning"> Register Not Updated Yet</span>';
                            }
                        }

                        ?>
                    </td>

                </tr>

                <?php
            }
        }
    }

}