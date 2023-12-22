<?php

    class Claim {

        public $id;
        public $description;
        public $date;
        public $articleId;
        public $softDelete;

        public function __construct($id, $title, $description, $date, $articleId, $softDelete)
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->date = $date;
            $this->articleId = $articleId;
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

        public function getArticleId() 
        {
            return $this->articleId;
        }

        public function getSoftDelete() 
        {
            return $this->softDelete;
        }

    }

?>