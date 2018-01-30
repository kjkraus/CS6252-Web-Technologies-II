<?php
class Book {
	private $title;
	private $author;
	private $image;
	private $pages;
	private $publisher;
	
	/*
	 * constructor
	 * 
	 * Optional argument: associative array with initial property value pairs
	 */
	public function __construct() {
		$this->title = NULL;
		$this->author = NULL;
		$this->image = NULL;
		$this->pages = NULL;
		$this->publisher = NULL;
		
		$args = func_get_args();
		if (count($args) >= 1) {
			foreach ($args[0] as $property => $value) {
				switch ($property) {
					case "title":
						$this->title = $value;
						break;
					case "author":
						$this->author = $value;
						break;
					case "image":
						$this->image = $value;
						break;
					case "pages":
						$this->pages = $value;
						break;
					case "publisher":
						$this->publisher = $value;
						break;
				}
			}
		}
	}
	
	/*
	 * get methods
	 */
	public function getAuthor() {
		return $this->author;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getImage() {
	    return "model/images/" . $this->image;
	}
	
	public function getPages() {
		return $this->pages;
	}
	
	public function getPublisher() {
		return $this->publisher;
	}
	/*
	 * set methods
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function setImage($image) {
	    $this->image = $image;
	}
	
	public function setPages($pages) {
		$this->pages = $pages;
	}
	
	public function setPublisher($publisher) {
		$this->publisher = $publisher;
	}
	
	/*
	 * isset methods
	 */
	// True if author is not NULL and not empty string
	public function issetAuthor() {
		return $this->author != NULL;
	}
	// True if title is not NULL and not empty string
	public function issetTitle() {
		return $this->title != NULL;
	}
	// True if image is not NULL and not empty string
	public function issetImage() {
		return $this->image != NULL;
	}
	// True if pages is not NULL
	public function issetPages() {
		return $this->pages !== NULL;
	}
	// True if publisher is not NULL and not empty string
	public function issetPublisher() {
		return $this->publisher != NULL;
	}
}
?>