<?php
include_once 'model/Model.php';
include_once 'Smarty.class.php';

class Controller {
    private $model;
    private $action;
    private $view;
    
    public function __construct() {
        $this->action = '';
        $this->model = new Model();
        $this->view = new Smarty();
    }
    
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                $this->view->display("home.tpl");
                break;
            case 'show_catalog_page':
                $book_catalog = $this->model->getBookCatalog();
                $default_image = "model/images/book_default.jpg";
                $this->view->assign('book_catalog', $book_catalog); 
                $this->view->assign('default_image', $default_image); 
                $this->view->display("catalog.tpl");
                break;
            case 'show_login_page':
                $this->view->display("login.tpl");
                break;
            case 'show_contact_page':
                $libraries = $this->model->getLibraries();
                $this->view->assign('libraries', $libraries); 
                $this->view->display("contact.tpl");
                break;
            case 'process_contact_form':
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
                $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
                $library = filter_input(INPUT_POST, 'library', FILTER_SANITIZE_STRING);
                $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
                $this->view->assign('name', $name);
                $this->view->assign('email', $email);
                $this->view->assign('phone', $phone); 
                $this->view->assign('date', $date);
                $this->view->assign('library', $library); 
                $this->view->assign('comments', $comments);
                $this->view->display("confirmcontact.tpl");
                break;
            default:
                $this->view->display("error.tpl");
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