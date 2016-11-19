<?php
require_once("../../../vendor/autoload.php");
use App\City\City;

$bookTitle = new City();
$bookTitle->setData($_GET);
$bookTitle->delete();