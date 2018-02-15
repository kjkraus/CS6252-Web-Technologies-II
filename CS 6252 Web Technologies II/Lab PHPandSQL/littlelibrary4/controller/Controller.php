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
            case 'edit_book_form':
                $this->showEditBookForm();
                break;
            case 'update_book':
                $this->updateBook();
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
    private function showEditBookForm() {
        $book_id = filter_input(INPUT_POST, 'book_id', FILTER_SANITIZE_STRING);
        
        $book = $this->library_db->getBook($book_id);
        $libraries = $this->library_db->getLibraries();
        $categories = $this->library_db->getCategories();
        
        $this->view->assign('id', $book->getID());
        $this->view->assign('title', $book->getTitle());
        $this->view->assign('author', $book->getAuthor());
        $this->view->assign('categoryID', $book->getCategoryID());
        $this->view->assign('libraryID', $book->getLibraryID());
        $this->view->assign('image', $book->getImage());
        $this->view->assign('pages', $book->getPages());
        $this->view->assign('publisher', $book->getPublisher());
        $this->view->assign('cost', $book->getCost());
       
        $this->view->assign('categories', $categories);
        $this->view->assign('libraries', $libraries);
        $this->view->display('editbook.tpl');
    }
    
    private function updateBook() {
        $book_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
        $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
        $category_id = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
        $library_id = filter_input(INPUT_POST, 'library', FILTER_SANITIZE_STRING);
        $pages = trim(filter_input(INPUT_POST, 'pages', FILTER_SANITIZE_STRING));
        $publisher = trim(filter_input(INPUT_POST, 'publisher', FILTER_SANITIZE_STRING));
        $cost = trim(filter_input(INPUT_POST, 'cost', FILTER_SANITIZE_STRING));
        
        $this->library_db->updateBook($book_id, $category_id, $library_id, $title, $author, $pages, $publisher, $cost);
        
        $this->showCatalogPage();
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
        
        $this->view->assign('name', $name);
        $this->view->assign('email', $email);
        $this->view->assign('phone', $phone);
        $this->view->assign('date', $date);
        $this->view->assign('library', $library_id);
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