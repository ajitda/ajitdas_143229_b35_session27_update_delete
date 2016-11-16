<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:04 AM
 */

include_once("../../../vendor/autoload.php");
use App\Email\Email;


$bookObject = new Email();
$bookObject->index();