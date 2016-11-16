<?php
namespace App\Model;
use PDO;
use PDOException;
class Database{
    public $host = "localhost";
    public $db_name = "atomic_project_b35";
    public $user ="root";
    public $password ="";
    public $DBH;

    public function __construct(){
       try {
           $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->password);
            //echo "database connected successfully..........";
        }catch(PDOException $e){
            echo "failed to connect database";
           echo $e->getMessage();

        }
    }
}
