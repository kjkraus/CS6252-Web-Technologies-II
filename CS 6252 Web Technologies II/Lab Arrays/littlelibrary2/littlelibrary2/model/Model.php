<?php
require_once 'Book.php';

class Model {
	
	public function __construct() {
	}
	
	public function getBook() {
		$book = new Book(array("author"=>"Dr. Seuss", "title"=>"Green Eggs and Ham", "image"=>"book_1.jpg", "publisher"=>"Random House"));
		return $book;
	}
	
	/**
	 * returns an array of book objects
	 * 
	 * @return Book[]
	 */
	public function getBookCatalog() {
	    $book_catalog = array();
	    return $book_catalog;
	}
}
?>