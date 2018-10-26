<?php

    class AJAXPageTemplate extends BasePage {

        public function __construct(){
            parent::__construct(); // load all the parent classes first

            $this->__arrJavaScript_Early[] = '';
       
        $this->__arrJavaScript_Late[] = '';
                }

        protected function HEAD(){
            parent::HEAD();
       
        }

        public function __destruct(){
            parent::__destruct();
        }


        protected function BODY(){
            parent::BODY();

        }

    }
