<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\City\City;
$objBookTitle = new City();
$objBookTitle->setData($_POST);
$objBookTitle->update();