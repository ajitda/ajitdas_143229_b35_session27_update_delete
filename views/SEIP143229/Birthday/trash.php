<?php
require_once("../../../vendor/autoload.php");
use App\Birthday\Birthday;
$objBookTitle = new Birthday();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


