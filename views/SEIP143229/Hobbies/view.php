<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>

<?php
require_once("../../../vendor/autoload.php");
use App\BookTitle\BookTitle;

$bookObject = new BookTitle();
$bookObject->setData($_GET);
$oneData = $bookObject->view("obj");
echo "<div class='book_elemet'>";
echo "ID : ".$oneData->id .'<br>';
echo "Book Title : " . $oneData->booktitle .'<br>';
echo "Author Name : " .$oneData->author .'<br>';
echo "</div>";

?>
</body>
</html>