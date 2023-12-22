<?php

    class Article {

        public $id;
        public $title;
        public $description;
        public $date;
        public $insurerId;
        public $clientId;
        public $softDelete;

        public function __construct($id, $title, $description, $date, $insurerId, $clientId, $softDelete)
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->date = $date;
            $this->insurerId = $insurerId;
            $this->clientId = $clientId;
            $this->softDelete = $softDelete;
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

        public function getSoftDelete() 
        {
            return $this->softDelete;
        }
        
    }

?>