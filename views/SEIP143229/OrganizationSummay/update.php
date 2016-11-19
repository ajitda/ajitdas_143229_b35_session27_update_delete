<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\OrganizationSummary\OrganizationSummary;
$objBookTitle = new OrganizationSummary();
$objBookTitle->setData($_POST);
$objBookTitle->update();