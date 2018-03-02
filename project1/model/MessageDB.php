<?php
class MessageDB {
    private $db;
    
    /**
     * connect to the database
     */
    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=top_line_communications';
        $username = 'tlccurator';
        $password = 'm0rem3ssag3s';
        
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
     * retrieve the messages the database and return
     * an array of all messages as objects of class Message
     *
     * @return Message[] - array of messages retrieved from the message table
     */
    public function getMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    /**
     * remove the specified message record
     *
     * @param $message_id
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function removeMessage($message_id) {
        $query = "DELETE FROM messages
				  WHERE id = :message_id";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
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
     * removes all reviews for the specified message record
     *
     * @param $message_id
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function removeReviews($message_id) {
        $query = "DELETE FROM reviews
				  WHERE messageId = :message_id";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
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
     * adds the message, category, and author to the messages table
     *
     * @param $message, $category, $author
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function addMessage($category, $author, $message) {
        $query = "INSERT INTO messages (category, message, author)
				 VALUES (:category,  :message, :author)";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':category', $category);
        $statement->bindValue(':message', $message);
        $statement->bindValue(':author', $author);
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
     * adds the review and date to the reviews table
     *
     * @param $review, $message_id
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function addReview($message_id, $review) {
        $query = "INSERT INTO reviews (messageId, date, review)
				 VALUES (:message_id,  NOW(), :review)";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
        $statement->bindValue(':review', $review);
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
     * adds the signature and date to the visitors table
     *
     * @param $signature
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function signGuestBook($signature) {
        $query = "INSERT INTO visitors (signature, date)
				 VALUES (:signature, NOW())";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':signature', $signature);
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
     * retrieve the most recent 3 messages from the database and return
     * an array of the messages as objects of class Message
     *
     * @return Message[] - array of messages retrieved from the message table
     */
    public function getRecentMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages ORDER BY id DESC LIMIT 3';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    /**
     * retrieve the various category messages the database and return
     * an array of all category messages as objects of class Message
     *
     * @return Message[] - array of messages retrieved from the message table
     */
    public function getHumorMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages WHERE category = "Humor"';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getRomanceMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages WHERE category = "Romance"';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getBirthdaysMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages WHERE category = "Birthdays"';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getCongratulationsMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages WHERE category = "Congratulations"';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getApologiesMessageCatalog() {
        // create the query
        $query = 'SELECT * FROM messages WHERE category = "Apologies"';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getReviewsMessageCatalog($message_id) {
        // create the query
        $query = 'SELECT * FROM messages WHERE id = :message_id';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    public function getReviewCatalog($message_id) {
        // create the query
        $query = 'SELECT * FROM reviews WHERE messageId = :message_id';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
        $statement->execute();
        $reviews = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $review_catalog = array();
        foreach ($reviews as $review) {
            $review_catalog[] = new Review($review);
        }
        return $review_catalog;
    }
    
    public function getUpdateMessageCatalog($message_id) {
        // create the query
        $query = 'SELECT * FROM messages WHERE id = :message_id';
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();
        
        // set the image to the default image if it
        // doesn't exists or is not specified
        $message_catalog = array();
        foreach ($messages as $message) {
            $message_catalog[] = new Message($message);
        }
        return $message_catalog;
    }
    
    /**
     * retrieve the message with the specified id
     *
     * @param $message_id of book to be retrieved
     * @return NULL|Message return Null upon failure, return the message object otherwise
     */
    public function getMessage($message_id) {
        // create the query
        $query = "SELECT * FROM messages
				  WHERE messageId = :message_id";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':message_id', $message_id);
        $statement->execute();
        $message_record = $statement->fetch();
        $statement->closeCursor();
        // check if query was successfule
        if ($message_record == False) {
            return Null;
        }
        $message = new Message($book_record);
        return $message;
    }
    
    /**
     * updates the specified message record
     *
     * @param $message_id
     * @param $author
     * @param $category
     * @param $message
     * @return boolean True if the update operation was successful, False otherwise
     */
    public function submitUpdateMessage($message_id, $category, $author, $message) {
        $query = "UPDATE messages
				  SET category = :category,
                    message = :message,
                    author = :author
				  WHERE id = :message_id";
        $statement = $this->db->prepare($query);
        $statement->bindValue(':category', $category);
        $statement->bindValue(':message_id', $message_id);
        $statement->bindValue(':message', $message);
        $statement->bindValue(':author', $author);
        $statement->execute();
        $row_count = $statement->rowCount();
        $statement->closeCursor();
        if ($row_count == 0) {
            var_dump("false");
            return False;
        }
        return True;
    }
    
    public function getVisitorsCatalog() {
        // create the query
        $query = 'SELECT * FROM visitors';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $visitors = $statement->fetchAll();
        $statement->closeCursor();
        
        $visitor_catalog = array();
        foreach ($visitors as $visitor) {
            $visitor_catalog[] = new Visitor($visitor);
        }
        return $visitor_catalog;
    }
}
?>
