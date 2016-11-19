<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:07 AM
 */

namespace App\OrganizationSummary;
use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;
use PDO;
class OrganizationSummary extends DB
{
    public $id="";
    public $name="";
    public $organization_summary="";

    public function __construct(){

        parent::__construct();
    }

    public function setData($postVaribaleData = NULL)
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('company_name', $postVaribaleData)) {
            $this->name = $postVaribaleData['company_name'];
        }
        if (array_key_exists('summary', $postVaribaleData)) {
            $this->organization_summary = $postVaribaleData['summary'];
        }
    }

    public function store()
    {
        $arrData = array($this->name, $this->organization_summary);
        $fsql = "Insert INTO summary_of_organization(name, summary) VALUES (?,?)";

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
        $STH = $this->DBH->query("SELECT * from summary_of_organization WHERE is_deleted='No'");
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, 'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrAllData = $STH->fetchAll();
        return $arrAllData;
    }//end of index();
    public function view($fetchMode='ASSOC'){
        $STH = $this->DBH->query('SELECT * from summary_of_organization where id='.$this->id);
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrOneData = $STH->fetch();
        return $arrOneData;
    }//end of view();

    public function update(){
        $arrData = array($this->name, $this->organization_summary);
        $sql = "UPDATE summary_of_organization set name=?, summary=? WHERE id=".$this->id;
        $STH = $this->DBH->prepare($sql);
        $STH->execute($arrData);
        Utility::redirect('index.php');
    }
    public function delete(){
        $sql='DELETE FROM summary_of_organization WHERE id = '.$this->id;
        $STH = $this->DBH->prepare($sql);


        $result = $STH->execute();

        Utility::redirect('index.php');



    }
    public function trash($fetchMode ='ASSOC'){
        $query = "UPDATE summary_of_organization SET is_deleted=NOW() Where id=".$this->id;
        $stmt = $this->DBH->prepare($query);
        $stmt->execute();
        Utility::redirect('index.php');
    }

}