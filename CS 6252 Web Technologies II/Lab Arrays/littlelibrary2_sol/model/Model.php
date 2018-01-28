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
	    $book_catalog[] = new Book(array("author"=>"Dr. Seuss", "title"=>"Green Eggs and Ham", "image"=>"book_1.jpg", "publisher"=>"Random House"));
	    $book_catalog[] = new Book(array("author"=>"Dr. Seuss", "title"=>"The Cat in the Hat"));
	    $book_catalog[] = new Book(array("author"=>"J. K. Rowling", "title"=>"Harry Potter and the Chamber of Secrets", "image"=>"book_3.jpg"));
	    $book_catalog[] = new Book(array("author"=>"J. K. Rowling", "title"=>"Harry Potter and the Scorcerer's Stone", "image"=>"book_4.jpg"));
	    $book_catalog[] = new Book(array("author"=>"Stephen King", "title"=>"The Dark Tower", "image"=>"book_5.jpg", "pages"=>528, "publisher"=>"Pocket Books"));
	    $book_catalog[] = new Book(array("author"=>"Jane Austin", "title"=>"Sense and Sensibility", "image"=>"book_6.jpg"));
	    return $book_catalog;
	}
	
	/**
	 * return a list of libraries
	 * 
	 * @return string[]
	 */
	public function getLibraries() {
	    $libraries = array();
	    $libraries[] = "none";
	    $libraries[] = "Adamson Square";
	    $libraries[] = "City Schools";
	    $libraries[] = "Senior Center";
	    $libraries[] = "Water Park";
	    return $libraries;
	}
}
?>