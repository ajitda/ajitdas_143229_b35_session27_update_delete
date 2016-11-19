<?php


namespace App\BookTitle;
use App\Message\Message;
use App\Model\Database as DB;
use App\Utility\Utility;
use PDO;

class BookTitle extends DB
{
    public $id = "";
    public $book_title = "";
    public $author_name = "";

    public function __construct()
    {

        parent::__construct();
    }

    public function setData($postVaribaleData = NULL)
    {
        if (array_key_exists('id', $postVaribaleData)) {
            $this->id = $postVaribaleData['id'];
        }
        if (array_key_exists('book_title', $postVaribaleData)) {
            $this->book_title = $postVaribaleData['book_title'];
        }
        if (array_key_exists('author_name', $postVaribaleData)) {
            $this->author_name = $postVaribaleData['author_name'];
        }
    }//end of setData

    public function store()
    {
        $arrData = array($this->book_title, $this->author_name);
        $fsql = "Insert INTO book_title(booktitle, author) VALUES (?,?)";

        $result = $this->DBH->prepare($fsql);

        $result->execute($arrData);
        if($result)
            Message::setMessage("Success ! Data has been inserted Successfully :)");
        else
            Message::setMessage("Failed ! Data has not been inserted Successfully ):");
        Utility::redirect('index.php');
    }//end of store

    public function index($fetchMode='ASSOC'){
        $STH = $this->DBH->query("SELECT * from book_title WHERE is_deleted='No'");
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, 'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrAllData = $STH->fetchAll();
        return $arrAllData;
    }//end of index();
    public function view($fetchMode='ASSOC'){
        $STH = $this->DBH->query('SELECT * from book_title where id='.$this->id);
        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode,'OBJ') > 0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);
        $arrOneData = $STH->fetch();
        return $arrOneData;
    }//end of view();

    public function update(){
        $arrData = array($this->book_title, $this->author_name);
        $sql = "UPDATE book_title set booktitle=?, author=? WHERE id=".$this->id;
        $STH = $this->DBH->prepare($sql);
        $STH->execute($arrData);
        Utility::redirect('index.php');
    }
    public function delete(){
        $sql='DELETE FROM book_title WHERE id = '.$this->id;
        $STH = $this->DBH->prepare($sql);


        $result = $STH->execute();

        Utility::redirect('index.php');



    }
    public function trash($fetchMode ='ASSOC'){
            $query = "UPDATE book_title SET is_deleted=NOW() Where id=".$this->id;
            $stmt = $this->DBH->prepare($query);
            $stmt->execute();
            Utility::redirect('index.php');
    }
}