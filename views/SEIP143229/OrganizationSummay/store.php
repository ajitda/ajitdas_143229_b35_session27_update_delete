<?php
include_once('../../../vendor/autoload.php');
use App\OrganizationSummary\OrganizationSummary;

$objOraganizationSummary = new OrganizationSummary();

$objOraganizationSummary->setData($_POST);


$objOraganizationSummary->store();