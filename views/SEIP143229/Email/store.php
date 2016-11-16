<?php
include_once('../../../vendor/autoload.php');
use App\Email\Email;

$objEmail = new Email();

$objEmail->setData($_POST);


$objEmail->store();