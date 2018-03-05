<?php
class LibraryDB {
	private $db;

	/**
	 * connect to the database
	 */
	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=little_library';
		$username = 'librarian';
		$password = 'b00kw0rm';

		try {
			$this->db = new PDO($dsn, $username, $password);
		} catch (PDOException $e) {
			$db = Null;
		}
	}

	/**
	 * check the connection to the database
	 * 
	 * @return boolean - true if a connection to the database has been established
	 */
	public function isConnected() {
		return ($this->db != Null);
	}
	
	/**
	 * retrieve the book records form the database and return 
	 * an array of all book as objects of class Book
	 * 
	 * @return Book[] - array of books retrieved from the books table
	 */
	public function getBookCatalog() {
		// create the query
		$query = 'SELECT * FROM books';
		$statement = $this->db->prepare($query);
		$statement->execute();
		$books = $statement->fetchAll();
		$statement->closeCursor();

		// cset the image to the default image if it
		// doesn't exists or is not specified
		$book_catalog = array();
		foreach ($books as $book) {
			$book_catalog[] = new Book($book);
		}
		return $book_catalog;
	}
	
	/**
	 * retrieve the book with the specified id
	 * 
	 * @param $book_id id of book to be retrieved
	 * @return NULL|Book return Null upon failure, return the book object otherwise
	 */
	public function getBook($book_id) {
	    // create the query
	    $query = "SELECT * FROM books
				  WHERE bookId = :book_id";
        $statement = $this->db->prepare($query);
	    $statement->bindValue(':book_id', $book_id);
	    $statement->execute();
	    $book_record = $statement->fetch();
	    $statement->closeCursor();
	    // check if query was successfule
	    if ($book_record == False) {
	        return Null;
	    }
	    $book = new Book($book_record);    
	    return $book;
	}
	
	/**
	 * update the specified book record
	 * 
	 * @param $book_id
	 * @param $category_id
	 * @param $library_id
	 * @param $title
	 * @param $author
	 * @param $pages
	 * @param $publisher
	 * @param $cost
	 * @return boolean True if the update operation was successful, False otherwise
	 */
	public function updateBook($book_id, $category_id, $library_id, $title, $author, $pages, $publisher, $cost) {
	    $query = "UPDATE books
				  SET categoryID = :category_id,
                    libraryID = :library_id,
                    title = :title,
                    author = :author,
                    pages = :pages,
                    publisher = :publisher,
                    cost = :cost
				  WHERE bookId = :book_id";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':category_id', $category_id);
	    $statement->bindValue(':library_id', $library_id);
	    $statement->bindValue(':title', $title);
	    $statement->bindValue(':author', $author);
	    $statement->bindValue(':pages', $pages);
	    $statement->bindValue(':publisher', $publisher);
	    $statement->bindValue(':cost', $cost);
	    $statement->bindValue(':book_id', $book_id);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    if ($row_count == 0) {
	        var_dump("false");
	        return False;
	    }
	    return True;
	}
	
	/**
	 * delete the specified book
	 *
	 * @param $book_id
	 * @return boolean True if the book was successfully deleted
	 */
	public function deleteBook($book_id) {
	    $query = "DELETE FROM books
				  WHERE bookId = :book_id";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':book_id', $book_id);
	    $statement->execute();
	    $row_count = $statement->rowCount();
	    $statement->closeCursor();
	    if ($row_count == 0) {
	        return False;
	    }
	    // delete the image associated with the book
	    $imagefile = 'model/images/book_' . $book_id . '.jpg';
	    if (file_exists($imagefile)) {
	        unlink($imagefile);
	    }
	    return True;
	}
	
	/**
	 * retrieve all libraries
	 *
	 * @return array with libraries
	 */
	public function getLibraries() {
	    $query = "SELECT *
					FROM libraries";
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $library_records = $statement->fetchAll();
	    $statement->closeCursor();
	    
	    $libraries = array();
	    foreach($library_records as $library) {
	        $libraries[$library['libraryID']] = $library['libraryName'];
	    }
	    return $libraries;
	}
	
	/**
	 * retrieve the library record with the specified id
	 * 
	 * @param $library_id id of the library to be retrieved
	 * @return NULL|mixed return Null upon failure, return the library record otherwise
	 */
	public function getLibrary($library_id) {
	    // create the query
	    $query = "SELECT * FROM libraries
				  WHERE libraryId = :library_id";
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':library_id', $library_id);
	    $statement->execute();
	    $library_record = $statement->fetch();
	    $statement->closeCursor();
	    // check if query was successfule
	    if ($library_record == False) {
	        return Null;
	    }
	    return $library_record;
	}

	/**
	 * retrieve all categories
	 * 
	 * @return array with categories 
	 */
	public function getCategories() {
	    $query = "SELECT *
					FROM categories";
	    $statement = $this->db->prepare($query);
	    $statement->execute();
	    $category_records = $statement->fetchAll();
	    $statement->closeCursor();
	    
	    $cateories = array();
	    foreach($category_records as $category) {
	        $categories[$category['categoryID']] = $category['categoryName'];
	    }
	    return $categories;
	}
	
	/**
	 * insert a new mesage
	 * 
	 * @param $library_id
	 * @param $name
	 * @param $email
	 * @param $phone
	 * @param $date
	 * @param $comments
	 * @return boolean True if the update operation was successful, False otherwise
	 */
	public function addMessage($library_id, $name, $email, $phone, $date, $comments) {
	    $query = 'INSERT INTO messages	(libraryID, name, email, phone, messageDate, comments)
				VALUES (:library_id, :name, :email, :phone, :date, :comments)';
	    $statement = $this->db->prepare($query);
	    $statement->bindValue(':library_id', $library_id);
	    $statement->bindValue(':name', $name);
	    $statement->bindValue(':email', $email);
	    $statement->bindValue(':phone', $phone);
	    $statement->bindValue(':date', $date);
	    $statement->bindValue(':comments', $comments);
	    $statement->execute();
	    $success = ($statement->rowCount() == 1);
	    $statement->closeCursor();
	    return $success;
	}
}
?>