<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\BookTitle\BookTitle;
$objBookTitle = new BookTitle();
$objBookTitle->setData($_POST);
$objBookTitle->update();