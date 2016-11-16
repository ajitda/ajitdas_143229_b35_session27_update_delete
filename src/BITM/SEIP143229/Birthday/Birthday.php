<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 10:55 AM
 */

namespace App\Birthday;
use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;

class Birthday extends DB
{
    public $id="";
    public $name="";
    public $birthday="";

    public function __construct(){

        parent::__construct();
    }
    public function index(){
        echo "Birthdays will go here";
    }
	 public function setData($postVaribaleData = NULL)
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('your_name', $postVaribaleData)) {
            $this->name = $postVaribaleData['your_name'];
        }
        if (array_key_exists('your_birthday', $postVaribaleData)) {
            $this->birthday = $postVaribaleData['your_birthday'];
        }
    }

    public function store()
    {
        $arrData = array($this->name, $this->birthday);
        $fsql = "Insert INTO birthday(name, birthday) VALUES (?,?)";

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