<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 9/13/2019
 * Time: 11:24 PM
 */
include_once dirname(__FILE__) . '/cntt.php';

class Database
{
    //Variable to store database link
    private $con;
    private $pdo;

    public function PDO() {
        try {
            $this->pdo = new  PDO('mysql:host='.DBHOST.';dbname='.DBNAMEL, DBUSERL, DBPWL);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\Exception $e) {
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }
    }

    public function mysqli()
    {
        try{
            $this->con = new mysqli(DBHOST, DBUSERL, DBPWL, DBNAMEL);
            return $this->con;
        }catch(\Exception $e){
            header("content-type: application/json");
            print_r(json_encode(array("error"=> array('type' => 'DATABASE ERROR', 'message' => $e->getMessage()))));
            exit();
        }

    }
}
