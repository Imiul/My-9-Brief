<?php

    class Insurer {

        public $id;
        public $name;
        public $address;
        public $pic;

        public function __construct($id, $pic, $name, $address)
        {
            $this->id = $id;
            $this->pic = $pic;
            $this->name = $name;
            $this->address = $address;
        }

        public function getId() 
        {
            return $this->id;
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