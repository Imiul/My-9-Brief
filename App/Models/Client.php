<?php

    class Client {

        public $id;
        public $pic;
        public $firstName;
        public $lastName;
        public $cnie;
        public $address;
        public $date;

        public function __construct($id, $pic, $firstName, $lastName, $cnie, $address, $date)
        {
            $this->id = $id;
            $this->pic = $pic;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->cnie = $cnie;
            $this->address = $address;
            $this->date = $date;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getPic() 
        {
            return $this->pic;
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

    }

?>