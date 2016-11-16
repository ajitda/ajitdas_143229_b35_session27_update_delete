<?php
include_once('../../../vendor/autoload.php');
use App\City\City;

$objCity = new City();

$objCity->setData($_POST);


$objCity->store();