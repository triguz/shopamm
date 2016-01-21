<?php

    include_once './view/createView.php';
    include_once './model/userDB.php';

    class userController
    {
        public function __constructor()
        {
            
        }

        public function handler($cmd)
        {
            $view = new createView(); 
            $response = null; //output di un'operazione

            switch($cmd)
            {
               case 'home':
               {
                    $this->setHome($view);
                    break;
               }    
               
               case 'logout':
               {
                    $_SESSION['loggedIn'] = false;
                    $_SESSION['username'] = '';
                    $this->setLogout($view);
                    $newpage = 'http://spano.sc.unica.it/amm2014/boniniAlessandro/index.php?page=home';
                    header('Refresh: 5; url=' . $newpage);
                    break;
               }
               
               case 'contact':
               {
                  $this->setContact($view);   
                  break;
               }
               
               case 'myprofile':
               {
                  $this->setMyprofile($view);   
                  break;
               }
               
               case 'thestore':
               {
                  $this->setStore($view);   
                  break;
               }
               
              
            
                case 'errorNotLogged':
                   $this->setError($view, 'errorNotLogged');
               break;

                default:
                  $this->setError($view, 'errorNotFound');
                break;
            
            }  
        }

        public function setHome($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/home.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setSignUp($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/signup.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setRegistrated($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/registrated.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setLogout($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/logout.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setContact($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/contact.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setMyprofile($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/thestore.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
       }
        
        public function setStore($view)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            $view->setContent('./view/user/thestore.php');
            require_once($view->getContent());
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function setError($view, $error)
        {
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            
            if ($error == 'errorNotLogged')
            {
                $view->setContent('./view/user/errorNotLogged.php');
                require_once($view->getContent());
            }
            else if ($error == 'errorNotFound')
            {
                $view->setContent('./view/user/errorNotFound.php');
                require_once($view->getContent());
            }
            
            $view->setSideBar('./view/user/sidebar.php');
            require_once($view->getSideBar());
            $view->setSideFull('./view/user/sidefull.php');
            require_once($view->getSideFull());
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
            $view->setEndPage('./view/user/endPage.php');
            require_once($view->getEndPage());
        }
        
        public function login()
        {
            $exist = userDB::instance()->existUser($_POST['username'], $_POST['password']);

            if($exist)
            {
                 $_SESSION["loggedIn"] = true;
                 $_SESSION["username"] = $_POST['username'];
                 unset($_POST['username']);
                 unset($_POST['password']);
                 return true;
            }
            
            return false;
        }
        
        public function signUp()
        {
            $user = new user();            

            if ($this->checkFields() && $_POST['password'] == $_POST['confirm'])
            {
                $user->setEmail($_POST['email']);
                $user->setUsername($_POST['username']);
                $user->setPassword($_POST['password']);
                $user->setSurname($_POST['surname']);
                $user->setName($_POST['name']);
                $user->setSurname($_POST['surname']);
                $user->setStreet($_POST['street']);
                $user->setNumber($_POST['number']);
                $user->setCity($_POST['city']);
                $user->setPostalCode($_POST['postalCode']);
                $user->setState($_POST['state']);
            }
            else
                return false;
            
            if(userDB::instance()->insert($user))
                    return true;
            else
                return false;
        }
        
        public function checkFields()
        {                
               return 
                    isset($_POST['email']) && 
                    isset($_POST['username']) &&
                    isset($_POST['password']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['name']) && 
                    isset($_POST['surname']) && 
                    isset($_POST['street']) && 
                    isset($_POST['number']) && 
                    isset($_POST['city']) && 
                    isset($_POST['postalCode']) && 
                    isset($_POST['state']);
        }
    }

?>
