<?php

    class Article {

        public $id;
        public $amount;
        public $date;
        public $claimId;
        public $softDelete;

        public function __construct($id, $amount, $date, $claimId, $softDelete)
        {
            $this->id = $id;
            $this->amount = $amount;
            $this->date = $date;
            $this->claimId = $claimId;
            $this->softDelete = $softDelete;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function getAmount() 
        {
            return $this->amount;
        }

        public function getDate() 
        {
            return $this->date;
        }

        public function getClaimId() 
        {
            return $this->claimId;
        }

        public function getSoftDelete() 
        {
            return $this->softDelete;
        }

    }

?>