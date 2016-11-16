<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:05 AM
 */

include_once("../../../vendor/autoload.php");
use App\Gender\Gender;


$bookObject = new Gender();
$bookObject->index();