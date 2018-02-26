<?php
class Message {
    private $id;
    private $category;
    private $message;
    private $author;
    private $image;
    
    /**
     * Constructor
     *
     * Optional argument: associative array with initial property value pairs
     */
    public function __construct() {
        $this->id = NULL;
        $this->categoryID = NULL;
        $this->message = NULL;
        $this->author = NULL;
        $this->image = NULL;
        
        $args = func_get_args();
        if (count($args) >= 1) {
            foreach ($args[0] as $property => $value) {
                switch ($property) {
                    case "messageID":
                        $this->id = $value;
                        break;
                    case "category":
                        $this->category = $value;
                        break;
                    case "message":
                        $this->message = $value;
                        break;
                    case "author":
                        $this->author = $value;
                        break;
                    case "image":
                        if ($value == Null) {
                            $this->image = 'message_default.jpg';
                        }
                        else {
                            if (!file_exists('model/images/' . $value)) {
                                $this->image = 'message_default.jpg';
                            }
                            $this->image = $value;
                        }
                        break;

                }
            }
        }
    }
    
    /*--------------------------------------------------------------
     * Get methods
     *------------------------------------------------------------*/
    public function getID() {
        return $this->id;
    }
    
    public function getCategory() {
        return $this->category;
    }
    
    public function getMessage() {
        return $this->message;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getImage() {
        return "model/images/" . $this->image;
    }
    
    /*--------------------------------------------------------------
     * Set methods
     *------------------------------------------------------------*/
    public function setAuthor($author) {
        $this->author = $author;
    }
    
    public function setMessage($message) {
        $this->title = $message;
    }
    
    public function setImage($image) {
        $this->image = $image;
    }
    
    /*
     * isset methods
     */
    // True if author is not NULL and not empty string
    public function issetAuthor() {
        return $this->author != NULL;
    }
    // True if title is not NULL and not empty string
    public function issetMessage() {
        return $this->message != NULL;
    }
    // True if image is not NULL and not empty string
    public function issetImage() {
        return $this->image != NULL;
    }
}
?>