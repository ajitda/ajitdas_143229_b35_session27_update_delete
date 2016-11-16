<?php
include_once('../../../vendor/autoload.php');
use App\Gender\Gender;

$objEmail = new Gender();

$objEmail->setData($_POST);


$objEmail->store();