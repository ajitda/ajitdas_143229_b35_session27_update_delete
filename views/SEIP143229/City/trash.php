<?php
require_once("../../../vendor/autoload.php");
use App\City\City;
$objBookTitle = new City();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


