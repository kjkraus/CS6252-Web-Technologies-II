<?php
include_once 'model/Model.php';

class Controller {
    private $model;
    private $action;
    
    public function __construct() {
        $this->action = '';
        $this->model = new Model();
    }
    
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                include('./view/home.php');
                break;
            case 'show_catalog_page':
                $book_catalog = $this->model->getBookCatalog();
                $default_image = "model/images/book_default.jpg";
                include('./view/catalog.php');
                break;
            case 'show_login_page':
                include('./view/login.php');
                break;
            case 'show_contact_page':
                $libraries = $this->model->getLibraries();
                include('./view/contact.php');
                break;
            case 'process_contact_form':
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
                $library = filter_input(INPUT_POST, 'library', FILTER_SANITIZE_STRING);
                $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
                include('./view/confirmcontact.php');
                break;
            default:
                include('./view/error.php');
                break;
        }
    }
    
    /****************************************************************
     *
     * Utility Function
     *
     ***************************************************************/
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