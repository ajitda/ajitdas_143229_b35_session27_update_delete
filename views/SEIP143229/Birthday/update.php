<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\Birthday\Birthday;
$objBookTitle = new Birthday();
$objBookTitle->setData($_POST);
$objBookTitle->update();