<?php
require_once("../../../vendor/autoload.php");
use App\Gender\Gender;

$bookTitle = new Gender();
$bookTitle->setData($_GET);
$bookTitle->delete();