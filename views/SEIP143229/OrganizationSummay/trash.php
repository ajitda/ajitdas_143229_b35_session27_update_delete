<?php
require_once("../../../vendor/autoload.php");
use App\OrganizationSummary\OrganizationSummary;
$objBookTitle = new OrganizationSummary();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


