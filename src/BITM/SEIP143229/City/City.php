<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:03 AM
 */

namespace App\City;
use App\Model\database as DB;
use App\Message\Message;
use App\Utility\Utility;

class City extends DB
{
    public $id="";
    public $name="";
    public $city="";

    public function __construct(){

        parent::__construct();
    }
    public function index(){
        echo "Cities will go here";
    }
    public function setData($postVaribaleData = NULL)
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('your_name', $postVaribaleData)) {
            $this->name = $postVaribaleData['your_name'];
        }
        if (array_key_exists('your_city', $postVaribaleData)) {
            $this->city = $postVaribaleData['your_city'];
        }
    }

    public function store()
    {
        $arrData = array($this->name, $this->city);
        $fsql = "Insert INTO city(name, city) VALUES (?,?)";

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