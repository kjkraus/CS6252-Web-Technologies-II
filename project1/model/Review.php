<?php
class Review {
    private $reviewId;
    private $messageId;
    private $review;
    private $date;
    
    /**
     * Constructor
     *
     * Optional argument: associative array with initial property value pairs
     */
    public function __construct() {
        $this->reviewId = NULL;
        $this->messageId = NULL;
        $this->review = NULL;
        $this->date = NULL;
        
        $args = func_get_args();
        if (count($args) >= 1) {
            foreach ($args[0] as $property => $value) {
                switch ($property) {
                    case "reviewID":
                        $this->reviewId = $value;
                        break;
                    case "messageID":
                        $this->messageId = $value;
                        break;
                    case "review":
                        $this->review = $value;
                        break;
                    case "date":
                        $this->date = $value;
                        break;

                }
            }
        }
    }
    
    /*--------------------------------------------------------------
     * Get methods
     *------------------------------------------------------------*/
    public function getID() {
        return $this->reviewId;
    }
    
    public function getReview() {
        return $this->review;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    /*--------------------------------------------------------------
     * Set methods
     *------------------------------------------------------------*/
    
    public function setReview($review) {
        $this->review = $review;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    /*
     * isset methods
     */

    // True if title is not NULL and not empty string
    public function issetReview() {
        return $this->signature != NULL;
    }
    
    // True if image is not NULL and not empty string
    public function issetDate() {
        return $this->date != NULL;
    }
}
?>