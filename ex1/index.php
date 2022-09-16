<?php
    show_source(__FILE__);

    class Animal {
        public function __destruct() {
            $this->die();
        }

        public function die() {
            system("echo > " + $this->name);
        }
    }

    $str = @$_GET["str"];
    
    unserialize(base64_decode($str));