<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\Gender\Gender;
$objBookTitle = new Gender();
$objBookTitle->setData($_POST);
$objBookTitle->update();