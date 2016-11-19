<?php
require_once("../../../vendor/autoload.php");
use App\Gender\Gender;
$objBookTitle = new Gender();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


