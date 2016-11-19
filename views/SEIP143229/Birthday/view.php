<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>

<?php
require_once("../../../vendor/autoload.php");
use App\Birthday\Birthday;

$bookObject = new Birthday();
$bookObject->setData($_GET);
$oneData = $bookObject->view("obj");
echo "<div class='book_elemet'>";
echo "ID : ".$oneData->id .'<br>';
echo "Name : " . $oneData->name .'<br>';
echo "Birthday : " .$oneData->birthday .'<br>';
echo "</div>";

?>
</body>
</html>