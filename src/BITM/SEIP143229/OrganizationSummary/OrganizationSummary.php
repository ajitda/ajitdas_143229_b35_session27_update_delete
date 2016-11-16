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

class OrganizationSummary extends DB
{
    public $id="";
    public $name="";
    public $organization_summary="";

    public function __construct(){

        parent::__construct();
    }
    public function index(){
        echo "Organization Summary will go here";
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
}