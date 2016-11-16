<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 10:55 AM
 */
include_once("../../../vendor/autoload.php");
use App\Birthday\Birthday;


$bookObject = new Birthday();
$bookObject->index();