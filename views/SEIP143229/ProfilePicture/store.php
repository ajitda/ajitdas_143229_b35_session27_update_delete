<?php
include_once('../../../vendor/autoload.php');
use App\ProfilePicture\ProfilePicture;

$objProfilePicture = new ProfilePicture();
$imageName = time().$_FILES['fileUpload']['name'];
$tmp_location = $_FILES['fileUpload']['tmp_name'];
$fileLocation = '../../../resources/assets/img/'.$imageName;
move_uploaded_file($tmp_location, $fileLocation);
$_POST['filepath']= $imageName;
$objProfilePicture->setData($_POST);


$objProfilePicture->store();