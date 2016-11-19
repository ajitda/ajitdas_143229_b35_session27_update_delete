<?php
require_once("../../../vendor/autoload.php");
use App\Email\Email;

$bookTitle = new Email();
$bookTitle->setData($_GET);
$bookTitle->delete();