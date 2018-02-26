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
}
?>
