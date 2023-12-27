<?php

    class Insurer {

        public $id;
        public $name;
        public $password;
        public $address;
        public $pic;

        public function __construct($id, $pic, $name, $address, $password)
        {
            $this->id = $id;
            $this->pic = $pic;
            $this->name = $name;
            $this->address = $address;
            $this->password = $password;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getPassword() 
        {
            return $this->password;
        }

        public function getPic() 
        {
            return $this->pic;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getAddress() 
        {
            return $this->address;
        }

    }

?>