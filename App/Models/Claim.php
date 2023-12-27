<?php

    class Claim {

        public $id;
        public $description;
        public $pic;
        public $date;
        public $articleId;

        public function __construct($id, $pic, $description, $date, $articleId)
        {
            $this->id = $id;
            $this->pic = $pic;
            $this->description = $description;
            $this->date = $date;
            $this->articleId = $articleId;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getPic() 
        {
            return $this->pic;
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

    }

?>