<?php
class Visitor {
    private $visitorId;
    private $signature;
    private $date;
    
    /**
     * Constructor
     *
     * Optional argument: associative array with initial property value pairs
     */
    public function __construct() {
        $this->visitorId = NULL;
        $this->signature = NULL;
        $this->date = NULL;
        
        $args = func_get_args();
        if (count($args) >= 1) {
            foreach ($args[0] as $property => $value) {
                switch ($property) {
                    case "visitorID":
                        $this->visitorId = $value;
                        break;
                    case "signature":
                        $this->signature = $value;
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
        return $this->visitorId;
    }
    
    public function getSignature() {
        return $this->signature;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    /*--------------------------------------------------------------
     * Set methods
     *------------------------------------------------------------*/
    
    public function setSignature($signature) {
        $this->signature = $signature;
    }
    
    public function setDate($date) {
        $this->date = $date;
    }
    
    /*
     * isset methods
     */

    // True if title is not NULL and not empty string
    public function issetSignature() {
        return $this->signature != NULL;
    }
    // True if image is not NULL and not empty string
    public function issetDate() {
        return $this->date != NULL;
    }
}
?>