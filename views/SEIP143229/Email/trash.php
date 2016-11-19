<?php
require_once("../../../vendor/autoload.php");
use App\Email\Email;
$objBookTitle = new Email();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


