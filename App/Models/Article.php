<?php

    class Article {

        public $id;
        public $title;
        public $description;
        public $date;
        public $insurerId;
        public $clientId;

        public function __construct($id, $title, $description, $date, $insurerId, $clientId)
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->date = $date;
            $this->insurerId = $insurerId;
            $this->clientId = $clientId;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getTitle() 
        {
            return $this->title;
        }

        public function getDescription() 
        {
            return $this->description;
        }

        public function getDate() 
        {
            return $this->date;
        }

        public function getInsurerId() 
        {
            return $this->insurerId;
        }

        public function getClientId() 
        {
            return $this->clientId;
        }

    }

?>