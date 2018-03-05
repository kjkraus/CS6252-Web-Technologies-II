<?php
include_once 'model/LibraryDB.php';
include_once 'model/Book.php';
include_once 'Smarty.class.php';

class Controller {
    private $action;
    private $view;
    private $library_db;
    private $error_msg;
    
    /**
     * setup the controller
     */
    public function __construct() {
        $this->library_db = new LibraryDB();
        if ($this->library_db->isConnected()) {
            $this->action = '';
            $this->error_msg = '';
        }
        else {
            $this->action = 'error';
            $this->error_msg = 'unable to connect to the database';
        }
        $this->view = new Smarty();
    }
    
    /**
     * determine which action to take
     */
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                $this->view->display('home.tpl');
                break;
            case 'place_hold':
                $this->placeHold();
                break;
            case 'submit_hold':
                $this->processSubmitHold();
                break;
            case 'show_catalog_page':
                $this->showCatalogPage();
                break;
            case 'show_login_page':
                $this->view->display('login.tpl');
                break;
            case 'show_contact_page':
                $this->showContactPage();
                break;
            case 'process_contact_form':
                $this->processContactpage();
                break;
            default:
                $this->view->assign('error_msg', $this->error_msg);
                $this->view->display('error.tpl');
                break;
        }
    }
    
    /*--------------------------------------------------------------
     *
     * Process requested page
     *
     *------------------------------------------------------------*/
    /**
     * 
     */
    private function placeHold() {
        $book_id = filter_input(INPUT_POST, 'book_id', FILTER_SANITIZE_STRING);
        
        // PART 1. add the book to the session array and pass all books in the
        // session array to the template holdlist.tpl for display
        session_start();
        if (! isset($_SESSION['holds'])) {
            $_SESSION['holds'] = array();
        }
        array_push($_SESSION['holds'], $book_id);
        
        $holds_catalog = $_SESSION['holds'];
        $this->view->assign('holds_catalog', $holds_catalog);
        $this->view->display('holdlist.tpl');
    }
    
    private function processSubmitHold() {
        // Here the application would process the list of holds. We won't worry about this.
        // You only need to clear all session data and end the session.
        
        //PART 3.
        //When the button “Submit hold request” is clicked, all books submitted for a hold should be
        //displayed and the corresponding confirmation message that the holds have been placed should
        //be displayed. All session data should be removed and the session should be terminated. Thus, if
        //a new book is selected for a hold from the catalog page after the hold request has been
        //submitted, the books previously submitted for a hold should not be listed again.
        
        $this->view->assign('confirmation', 'No books have been selected.');
        //$this->view->assign('confirmation', 'The holds for the above books have been placed succesfully.');
        $this->view->display('holdlist.tpl');
    }

    private function showCatalogPage() {
        $book_catalog = $this->library_db->getBookCatalog();
        $this->view->assign('book_catalog', $book_catalog);
        $this->view->display('catalog.tpl');
    }
    
    private function showContactPage() {
        $libraries = $this->library_db->getLibraries();
        $this->view->assign('libraries', $libraries);
        $this->view->display('contact.tpl');
    }
    
    private function processContactPage() {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $library_id = filter_input(INPUT_POST, 'library', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
        
        $this->library_db->addMessage($library_id, $name, $email, $phone, $date, $comments);
        
        $library = $this->library_db->getLibrary($library_id);
        $this->view->assign('name', $name);
        $this->view->assign('email', $email);
        $this->view->assign('phone', $phone);
        $this->view->assign('date', $date);
        $this->view->assign('library', $library['libraryName']);
        $this->view->assign('comments', $comments);
        $this->view->display('confirmcontact.tpl');
    }
    
    /*--------------------------------------------------------------
     *
     * Utility Functions
     *
     *------------------------------------------------------------*/
    private function getAction() {
        if ($this->action === '') {
            $this->action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if ($this->action === NULL) {
                $this->action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                if ($this->action === NULL) {
                    $this->action = 'show_home_page';
                }
            }
        }
    }
}

?>