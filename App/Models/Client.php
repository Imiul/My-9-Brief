<?php

    class Client {

        public $id;
        public $firstName;
        public $lastName;
        public $cnie;
        public $address;
        public $date;
        protected $softDelete;

        public function __construct($id, $firstName, $lastName, $cnie, $address, $date, $softDelete)
        {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->cnie = $cnie;
            $this->address = $address;
            $this->date = $date;
            $this->softDelete = $softDelete;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getFirstName() 
        {
            return $this->firstName;
        }

        public function getLastName() 
        {
            return $this->lastName;
        }

        public function getCnie() 
        {
            return $this->cnie;
        }

        public function getAddress() 
        {
            return $this->address;
        }

        public function getDate() 
        {
            return $this->date;
        }

        public function getSoftDelete() 
        {
            return $this->softDelete;
        }

    }

?>