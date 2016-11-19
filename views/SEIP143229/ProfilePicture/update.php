<?php
//var_dump($_POST); die();
require_once('../../../vendor/autoload.php');
use App\ProfilePicture\ProfilePicture;
$objBookTitle = new ProfilePicture();


if(!empty($_FILES['fileUpload']['name'])) {
    $imageName = time() . $_FILES['fileUpload']['name'];
    $tmp_location = $_FILES['fileUpload']['tmp_name'];
    $fileLocation = '../../../resources/assets/img/'.$imageName;
    move_uploaded_file($tmp_location, $fileLocation);
    $_POST['filepath'] = $imageName;
}

$objBookTitle->setData($_POST);
$objBookTitle->update();