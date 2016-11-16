<?php
include_once('../../../vendor/autoload.php');
use App\Hobbies\Hobbies;

$objHobbies = new Hobbies();

$objHobbies->setData($_POST);


$objHobbies->store();