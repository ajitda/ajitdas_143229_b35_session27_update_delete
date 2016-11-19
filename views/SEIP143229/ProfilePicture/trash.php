<?php
require_once("../../../vendor/autoload.php");
use App\ProfilePicture\ProfilePicture;
$objBookTitle = new ProfilePicture();
$objBookTitle->setData($_GET);
$objBookTitle->trash();


