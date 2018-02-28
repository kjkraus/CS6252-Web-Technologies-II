<?php
include_once 'model/MessageDB.php';
include_once 'model/Message.php';
include_once 'Smarty.class.php';

class Controller {
    private $action;
    private $view;
    private $message_db;
    private $error_msg;
    
    /**
     * Setup controller
     */
    public function __construct() {
        $this->message_db = new MessageDB();
        if ($this->message_db->isConnected()) {
            $this->action = '';
            $this->error_msg = '';
        }
        else {
            $this->action = 'error';
            $this->error_msg = 'There is a problem connecting to the database.';
        }
        $this->view = new Smarty();
    }
    
    /**
     * Determine the action
     */
    public function invoke() {
        
        // get the action to be processed
        $this->getAction();
        
        switch ($this->action) {
            case 'show_home_page':
                $this->showRecentCatalogPage();
                break;
            case 'show_catalog_page':
                $this->showCatalogPage();
                break;      
            case 'show_reviews_page':
                $this->view->display('reviews.tpl');
                break;
            case 'show_humor_page':
                $this->showHumorCatalogPage();
                break;
            case 'show_romance_page':
                $this->showRomanceCatalogPage();
                break;
            case 'show_birthdays_page':
                $this->showBirthdaysCatalogPage();
                break;
            case 'show_congratulations_page':
                $this->showCongratulationsCatalogPage();
                break;
            case 'show_apologies_page':
                $this->showApologiesCatalogPage();
                break;
            case 'show_addnew_page':
                $this->view->display('addnew.tpl');
                break;
            case 'update_message':
                $this->updateMessage();
                break;
            case 'remove_message':
                $this->removeMessage();
                break;
            case 'review_message':
                $this->reviewMessage();
                break;
            case 'show_visitors_page':
                $this->view->display('visitors.tpl');
                break;
            case 'show_credits_page':
                $this->view->display('credits.tpl');
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
    private function showCatalogPage() {
        $message_catalog = $this->message_db->getMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('catalog.tpl');
    }
    
    private function showRecentCatalogPage() {
        $message_catalog = $this->message_db->getRecentMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('home.tpl');
    }
    
    private function showHumorCatalogPage() {
        $message_catalog = $this->message_db->getHumorMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('humor.tpl');
    }
    
    private function showRomanceCatalogPage() {
        $message_catalog = $this->message_db->getRomanceMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('romance.tpl');
    }
    
    private function showBirthdaysCatalogPage() {
        $message_catalog = $this->message_db->getBirthdaysMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('birthdays.tpl');
    }
    
    private function showCongratulationsCatalogPage() {
        $message_catalog = $this->message_db->getCongratulationsMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('congratulations.tpl');
    }
    
    private function showApologiesCatalogPage() {
        $message_catalog = $this->message_db->getApologiesMessageCatalog();
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('apologies.tpl');
    }
    
    private function showReviewsPage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $message_catalog = $this->message_db->getReviewsMessageCatalog($message_id);
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('reviews.tpl');
    }
    
    private function updateMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $this->message_db->removeMessage($message_id);
        $this->showUpdatePage();
    }
    
    private function showUpdatePage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $message_catalog = $this->message_db->getUpdateMessageCatalog($message_id);
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->display('update.tpl');
    }
    
    private function removeMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);        
        $this->message_db->removeMessage($message_id);        
        $this->showCatalogPage();
    }
    
    private function reviewMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);        
        $this->message_db->getReviewsMessageCatalog($message_id);
        $this->showReviewsPage();
    }
    
    
    /**
     * Helper function
     */
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