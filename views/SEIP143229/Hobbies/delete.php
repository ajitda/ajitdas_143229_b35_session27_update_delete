<?php
require_once("../../../vendor/autoload.php");
use App\BookTitle\BookTitle;

$bookTitle = new BookTitle();
$bookTitle->setData($_GET);
$bookTitle->delete();