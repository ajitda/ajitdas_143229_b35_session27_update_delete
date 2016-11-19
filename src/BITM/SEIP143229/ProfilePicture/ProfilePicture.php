<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:08 AM
 */
namespace App\ProfilePicture;
use App\Model\database as DB;
use App\Message\Message;
use App\Utility\Utility;
use PDO;
class ProfilePicture extends DB
{
    public $id="";
    public $name="";
    public $file_path="";

    public function __construct(){

        parent::__construct();
    }

    public function setData($postVaribaleData = NULL )
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('your_name', $postVaribaleData)) {
            $this->name = $postVaribaleData['your_name'];
        }
        if (array_key_exists('filepath', $postVaribaleData)) {

           $this->file_path = $postVaribaleData['filepath'];
        }
    }

    public function store()
    {
        $arrData = array($this->name, $this->file_path);
        $fsql = "Insert INTO profile_picture(name, file_path) VALUES (?,?)";

        // echo $fsql;die();
        $result = $this->DBH->prepare($fsql);

        $result->execute($arrData);
        if($result)
            Message::setMessage("Success ! Data has been inserted Successfully :)");
        else
            Message::setMessage("Failed ! Data has not been inserted Successfully ):");
        Utility::redirect('create.php');
    }
    public function index($fetchMode='ASSOC'){
        $STH = $this->DBH->query("SELECT * from profile_picture WHERE is_deleted='No'");
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, 'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrAllData = $STH->fetchAll();
        return $arrAllData;
    }//end of index();
    public function view($fetchMode='ASSOC'){
        $STH = $this->DBH->query('SELECT * from profile_picture where id='.$this->id);
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrOneData = $STH->fetch();
        return $arrOneData;
    }//end of view();

    public function update(){
        if(!empty($this->file_path)) {
            $arrData = array($this->name, $this->file_path);
            $sql = "UPDATE profile_picture set name=?, file_path=? WHERE id=" . $this->id;
        }else
        {
            $arrData = array($this->name);
            $sql = "UPDATE profile_picture set name=? WHERE id=" . $this->id;

        }


        $STH = $this->DBH->prepare($sql);



        $STH->execute($arrData);
        Utility::redirect('index.php');
    }
    public function delete(){
        $sql='DELETE FROM profile_picture WHERE id = '.$this->id;
        $STH = $this->DBH->prepare($sql);


        $result = $STH->execute();

        Utility::redirect('index.php');

    }
    public function trash($fetchMode ='ASSOC'){
        $query = "UPDATE profile_picture SET is_deleted=NOW() Where id=".$this->id;
        $stmt = $this->DBH->prepare($query);
        $stmt->execute();
        Utility::redirect('index.php');
    }
}