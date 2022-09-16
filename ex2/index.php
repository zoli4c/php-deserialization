<?php
    show_source(__FILE__);

    class Animal {
        public function __destruct() {
            $this->parent->cry();
        }
    }

    class AnimalParent {
        private $name;
        public function cry() {
            system("echo > " + $this->name);
        }
    }

    $str = @$_GET["str"];
    
    unserialize(base64_decode($str));