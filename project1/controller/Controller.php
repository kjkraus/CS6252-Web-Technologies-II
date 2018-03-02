<?php
include_once 'model/MessageDB.php';
include_once 'model/Message.php';
include_once 'model/Visitor.php';
include_once 'model/Review.php';
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
            case 'show_recent_page':
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
            case 'submit_update_message':
                $this->submitUpdateMessage();
                break;
            case 'remove_message':
                $this->removeMessage();
                break;
            case 'review_message':
                $this->reviewMessage();
                break;
            case 'sign_guest_book':
                $this->signGuestBook();
                break;
            case 'submit_review':
                $this->submitReview();
                break;
            case 'show_visitors_page':
                $this->showVisitorsPage();
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
        $this->view->display('recent.tpl');
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
        $review_catalog = $this->message_db->getReviewCatalog($message_id);
        $this->view->assign('message_catalog', $message_catalog);
        $this->view->assign('review_catalog', $review_catalog);
        $this->view->display('reviews.tpl');
    }
    
    private function showVisitorsPage() {
        $visitor_catalog = $this->message_db->getVisitorsCatalog();
        $this->view->assign('visitor_catalog', $visitor_catalog);
        $this->view->display('visitors.tpl');
    }
    
    private function updateMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $message = $this->message_db->getMessage($message_id);
        $this->message_db->getUpdateMessageCatalog($message_id);
        $this->showUpdatePage();
    }
    
    private function submitUpdateMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
        $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
        $category = trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
        $this->message_db->submitUpdateMessage($message_id, $message, $category, $author);
        $this->showCatalogPage();
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
        $this->message_db->removeReviews($message_id);
        $this->showCatalogPage();
    }
    
    private function reviewMessage() {
        $message_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);        
        $this->message_db->getReviewsMessageCatalog($message_id);
        $this->message_db->getReviewCatalog($message_id);
        $this->showReviewsPage();
    }
    
    private function submitReview() {
        $review = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING);
        $message_id = filter_input(INPUT_POST, 'message_id', FILTER_SANITIZE_STRING);
        $this->message_db->addReview($message_id, $review);
        $this->showReviewsPage();
    }
    
    private function signGuestBook() {
        $signature = filter_input(INPUT_POST, 'signature', FILTER_SANITIZE_STRING);
        $this->view->assign('signature', $signature);
        $this->message_db->signGuestBook($signature);
        $this->showVisitorsPage();
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
                    $this->action = 'show_catalog_page';
                }
            }
        }
    }    
}

?>