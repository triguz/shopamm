<?php

    class CreateView
    {
        private $startPage;
        private $header;
        private $content;
        private $footer;
        private $endPage;
        private $sideBar;
        private $sideFull;

        public function __construct()
        {
            
        }        
 
        public function getStartPage()
        {
            return $this->startPage;
        }
        
        public function setStartPage($startPage)
        {
            $this->startPage = $startPage;
        }
        
        public function getHeader()
        {
            return $this->header;
        }

        public function setHeader($header)
        {
            $this->header = $header;
        }
        
        public function getSideBar()
        {
            return $this->sideBar;
        }

        public function setSideBar($sideBar)
        {
            $this->sideBar = $sideBar;
        }

        public function getContent()
        {
            return $this->content;
        }

        public function setContent($content)
        {
            $this->content = $content;
        }

        public function getFooter()
        {
            return $this->footer;
        }

        public function setFooter($footer)
        {
            $this->footer = $footer;
        }
        
        public function getEndPage()
        {
            return $this->endPage;
        }

        public function setEndPage($endPage)
        {
            $this->endPage = $endPage;
        }
        
        public function getSideFull()
        {
            return $this->sideFull;
        }

        public function setSideFull($sideFull)
        {
            $this->sideFull = $sideFull;
        }
    }
    
?>
