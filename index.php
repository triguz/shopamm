<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

@ob_start();

// Include the controllers
include_once './controller/userController.php';
include_once './controller/guestController.php';

// Ask for the page
$Page = new Page();
$Page->getPage($_REQUEST);

class Page {

    // Returns the page requested 
    public function getPage(&$page) {
        // If the session is not setted, it will start a new session
        if (!isset($_SESSION['loggedIn']))
            session_start();

        // Default page
        if (!isset($page['page']) && !isset($page['action']) && !isset($page['print'])) {

            // Check if the user is logged
            if (Page::isLogged()) {
                $controller = new userController();
                $controller->handler('home');
            } else {
                $controller = new guestController();
                $controller->handler('home');
            }
        } else if (isset($page['print'])) {
            $controller = new userController();
            $controller->printImg($page['print']);
        }

        // If it has not been requested the default page
        else {
            if (isset($page['page'])) {
                if (Page::isLogged()) {
                    $controller = new userController();
                    $controller->handler($page['page']);
                } else {
                    $controller = new guestController();
                    $controller->handler($page['page']);
                }
            } else if (isset($page['action'])) {
                if ($page['action'] == "login") {
                    $userController = new userController();
                    $result = $userController->login();
                    //AL POSTO DI ECHO
                    //echo $result;
                    if ($result == 1) {
                        $userController->handler('home');
                    } else {
                        $controller = new guestController();
                        $controller->handler('loginError');
                    }
                } else if ($page['action'] == "signup") {
                    $userController = new userController();
                    $result = $userController->signUp();
                    echo $result;
                }
            }
        }
    }

    // Controls if the user is logged in
    static function isLogged() {
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true)
            return true;
        return false;
    }

}

@ob_end_flush();
?>