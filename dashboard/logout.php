<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16/1/2020
 * Time: 15:53
 */
include_once dirname(__FILE__)."/System/System.php";
 
 $sys = new System();
 $sys->deleteCookie();
 header("location:".$sys->domain());
 exit();