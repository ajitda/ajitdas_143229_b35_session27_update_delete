<?php
include_once('../../../vendor/autoload.php');
use App\Birthday\Birthday;

$objBirthday = new Birthday();

$objBirthday->setData($_POST);


$objBirthday->store();