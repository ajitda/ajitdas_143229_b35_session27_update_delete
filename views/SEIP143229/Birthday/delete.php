<?php
require_once("../../../vendor/autoload.php");
use App\Birthday\Birthday;

$bookTitle = new Birthday();
$bookTitle->setData($_GET);
$bookTitle->delete();