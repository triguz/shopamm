<?php

include_once './view/createView.php';

class guestController {

    public function __constructor() {
        
    }

    public function handler($cmd) {
        $view = new createView();
        $response = null; //output

        switch ($cmd) {
            case 'home': {
                    $this->setHome($view);
                    break;
                }

            case 'signup': {
                    $this->setSignUp($view);
                    break;
                }

            case 'registrated': {
                    $this->setRegistrated($view);
                    break;
                }

            case 'logout': {
                    $this->setLogout($view);
                    $newpage = 'http://spano.sc.unica.it/amm2014/boniniAlessandro/index.php?page=home';
                    header('Refresh: 5; url=' . $newpage);
                    break;
                }

            case 'contact': {
                    $this->setContact($view);
                    break;
                }

            case 'thestore': {
                    $this->setStore($view);
                    break;
                }

            case 'loginError':
                $this->setError($view, 'loginError');
                break;

            default:
                $this->setError($view, 'errorNotFound');
                break;
        }
    }

    public function setHome($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/home.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setSignUp($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/signup.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setRegistrated($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/registrated.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setLogout($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/logout.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setContact($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/contact.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setStore($view) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());
        $view->setContent('./view/guest/thestore.php');
        require_once($view->getContent());
        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

    public function setError($view, $error) {
        $view->setStartPage('./view/guest/startPage.php');
        require_once($view->getStartPage());
        $view->setHeader('./view/guest/header.php');
        require_once($view->getHeader());


        if ($error == 'loginError') {
            $view->setContent('./view/guest/loginError.php');
            require_once($view->getContent());
        } else if ($error == 'errorNotFound') {
            $view->setContent('./view/guest/errorNotFound.php');
            require_once($view->getContent());
        }

        $view->setSideBar('./view/guest/sidebar.php');
        require_once($view->getSideBar());
        $view->setSideFull('./view/guest/sidefull.php');
        require_once($view->getSideFull());
        $view->setFooter('./view/guest/footer.php');
        require_once($view->getFooter());
        $view->setEndPage('./view/guest/endPage.php');
        require_once($view->getEndPage());
    }

}

?>
