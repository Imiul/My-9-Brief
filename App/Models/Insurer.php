<?php

    class Insurer {

        public $id;
        public $name;
        public $address;
        public $softDelete;

        public function __construct($id, $name, $address, $softDelete)
        {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->softDelete = $softDelete;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getName() 
        {
            return $this->name;
        }

        public function getAddress() 
        {
            return $this->address;
        }

        public function getSoftDelete() 
        {
            return $this->softDelete;
        }

    }

?>