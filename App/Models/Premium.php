<?php

    class Premium {

        public $id;
        public $amount;
        public $date;
        public $claimId;

        public function __construct($id, $amount, $date, $claimId)
        {
            $this->id = $id;
            $this->amount = $amount;
            $this->date = $date;
            $this->claimId = $claimId;
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

    }

?>