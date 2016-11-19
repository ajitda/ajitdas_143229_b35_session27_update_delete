<?php
include_once('../../../vendor/autoload.php');
use App\Email\Email;

$emailObject = new Email();

$emailObject->setData($_POST);


$emailObject->store();