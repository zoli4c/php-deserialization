<?php
    class User {
        public $name;
        public $age;

        public function __contructor($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __destruct()
        {
            $this->close($this->name);
        }

        private function close($name)
        {
            if ($this->age > 10) {
                echo "We will destroy user $name!!\n";
            }
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
    
    unserialize(base64_decode($str));