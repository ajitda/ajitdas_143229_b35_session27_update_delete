<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/5/2016
 * Time: 11:06 AM
 */

include_once("../../../vendor/autoload.php");
use App\Hobbies\Hobbies;


$bookObject = new Hobbies();
$bookObject->index();