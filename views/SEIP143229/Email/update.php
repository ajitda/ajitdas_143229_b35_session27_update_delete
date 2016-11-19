<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\Email\Email;
$emailObject = new Email();
$emailObject->setData($_POST);
$emailObject->update();