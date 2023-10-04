<?php
require 'database/ConnectionDB.php';

class insertData
{
    private $id;
    private $title;
    private $author;
    private $price;
    private $isbn;
    private $publishData;
    protected $pdo;



    // constructor
    public function __construct($id = 0, $title = '', $author = '', $price = 0, $isbn = '', $publishData = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->isbn = $isbn;
        $this->publishData = $publishData;


        $this->pdo =
            new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }
    // set & get functions


    // 1 id
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
    // 2 title
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    // 3 author
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    // 4 price
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
    // 5 isbn
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
    // 6 published data
    public function setPubData($publishData)
    {
        $this->publishData = $publishData;
    }

    public function getPubData()
    {
        return $this->publishData;
    }
    // insert function
    public function insrtD()
    {
        try {
            $query = $this->pdo->prepare('INSERT INTO books(title,author,price,isbn,published) VALUES (?,?,?,?,?)');
            $query->execute([$this->title, $this->author, $this->price, $this->isbn, $this->publishData]);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
    // delete function
    public function deleteBook($bookId)
    {
        try {
            $query = $this->pdo->prepare('DELETE FROM books WHERE id = ?');
            $query->execute([$bookId]);
            return "Book deleted successfully.";
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
    // read

    public function readD()
    {
        try {
            $query = $this->pdo->prepare('SELECT * FROM books');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (\Exception $th) {
            $th->getMessage();
        }
    }
    // read for edit

    public function readE($clickId)
    {
        try {
            $query = $this->pdo->prepare('SELECT * FROM books WHERE id = ?');
            $query->execute([$clickId]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
    // update function
    public function updateD()
    {
        try {
            $query = $this->pdo->prepare('UPDATE books SET title=?, author=?, price=? , isbn=?, published=? WHERE id=?');
            $query->execute([$this->title, $this->author, $this->price, $this->isbn, $this->publishData, $this->id]);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}
