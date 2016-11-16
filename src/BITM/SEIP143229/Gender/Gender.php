<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:05 AM
 */

namespace App\Gender;
use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;

class Gender extends DB
{
    public $id="";
    public $name="";
    public $gender="";

    public function __construct(){

        parent::__construct();
    }
    public function index(){
        echo "Genders will go here";
    }
    public function setData($postVaribaleData = NULL)
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('your_name', $postVaribaleData)) {
            $this->name = $postVaribaleData['your_name'];
        }
        if (array_key_exists('gender', $postVaribaleData)) {
            $this->gender = $postVaribaleData['gender'];
        }
    }

    public function store()
    {
        $arrData = array($this->name, $this->gender);
        $fsql = "Insert INTO gender(name, gender) VALUES (?,?)";

        // echo $fsql;die();
        $result = $this->DBH->prepare($fsql);

        $result->execute($arrData);
        if($result)
            Message::setMessage("Success ! Data has been inserted Successfully :)");
        else
            Message::setMessage("Failed ! Data has not been inserted Successfully ):");
        Utility::redirect('create.php');
    }
}