<?php
require_once("../../../vendor/autoload.php");
use App\OrganizationSummary\OrganizationSummary;

$bookTitle = new OrganizationSummary();
$bookTitle->setData($_GET);
$bookTitle->delete();