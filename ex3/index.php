<?php
    show_source(__FILE__);

    class User {
        public $name;
        public $age;

        public function __contructor($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
    }


    class ActionData {
        public $action;

        public function __toString()
        {
            system($this->action);
        }
    }

    $str = @$_GET["str"];
    
    $user = unserialize(base64_decode($str));
    
    echo "Hi $user->name\n";