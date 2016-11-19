<?php
require_once("../../../vendor/autoload.php");
use App\ProfilePicture\ProfilePicture;

$bookTitle = new ProfilePicture();
$bookTitle->setData($_GET);
$bookTitle->delete();