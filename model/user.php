<?php
    
    class user
    {
        private $_ID;
        private $_email;
        private $_username;
        private $_password;
        private $_name;
        private $_surname;
        private $_street;
        private $_number;
        private $_city;
        private $_postalCode;
        private $_state;
        
        function __construct()
        {
            
        }

        public function getID()
        {
            return $this->_ID;
        }
        
        public function setID($ID)
        {
            $this->_ID = $ID;
        }
        
        public function getEmail()
        {
            return $this->_email;
        } 
        
        public function setEmail($email)
        {
            $correct = filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE);
             
            if ($correct == false )
                return false;
             
            $this->_email = $email;
           
            return true;           
            
        }
        
        public function getUsername()
        {
            return $this->_username;
        }
        
        public function setUsername($username)
        {
            if (!filter_var($username, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z0-9_-]{4,50}$/"))))
                return false;
            
            $this->_username = $username;
            
            return true;
        }
        
        public function getPassword()
        {
            return $this->_password;
        }
        
        public function setPassword($password)
        {
            if (!filter_var($password, FILTER_VALIDATE_REGEXP, array ('options' =>  array('regexp' => '/^[a-zA-Z0-9_-]{4,50}$/'))))
                return false;
            
            $this->_password = $password;
            
            return true;
        }
        
        public function getName()
        {
            return $this->_name;
        }
        
        public function setName($name)
        {
            if (!filter_var($name, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{4,50}$/"))))
                return false;
            
            $this->_name = $name;
            
            return true;
        }
        
        public function getSurname()
        {
            return $this->_surname;
        }
        
        public function setSurname($surname)
        {            
            if (!filter_var($surname, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{4,50}$/"))))
                return false;
                
            $this->_surname = "ccciaoo".$surname;
            
            return true;
        }
        
        public function getStreet()
        {
            return $this->_street;
        }
        
        public function setStreet($street)
        {
            if (!filter_var($street, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{4,50}$/"))))
                return false;
            
            $this->_street = $street;
            
            return true;
        }
 
        public function getNumber()
        {
            return $this->_number;
        }

        public function setNumber($number)
        {
            $this->_number= $number;
            
            return true;
        }
        
        public function getCity()
        {
            return $this->_city;
        }

        public function setCity($city)
        {
            if (!filter_var($city, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{4,50}$/"))))
                return false;
            
            $this->_city = $city;
            
            return true;
        }
        
        public function getPostalCode()
        {
            return $this->_postalCode;
        }

        public function setPostalCode($postalCode)
        {
            if (!filter_var($postalCode, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[0-9]{4,50}$/"))))
                return false;
            
            $this->_postalCode = $postalCode;
            
            return true;
        }
        
        public function getState()
        {
            return $this->_state;
        }

        public function setState($state)
        {
            if (!filter_var($state, FILTER_VALIDATE_REGEXP, array('options' =>  array('regexp' => "/^[a-zA-Z]{4,50}$/"))))
                return false;
            
            $this->_state = $state;
            
            return true;
        }
        
        public function equals(User $user)
        {
            if( $this->ID == $user->_ID)
                return true;
            
            return false;         
        }
        
    }
    
?>
