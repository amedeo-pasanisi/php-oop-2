<?php
    trait CreditCard {
        protected $creditCard_number;
        protected $creditCard_expiration_date;
        protected $credit_left;

        public function __construct($_creditCard_number, $_creditCard_expiration_date, $_credit_left) {
            $this-> creditCard_number = $_creditCard_number;
            $this-> creditCard_expiration_date = $_creditCard_expiration_date;
            $this-> credit_left = $_credit_left;
        }
        public function setCreditCard_number($_creditCard_number) {
            $this-> creditCard_number = $_creditCard_number;
        }
        public function getCreditCard_number() {
            return $this-> creditCard_number;
        }
        public function setCreditCard_expiration_date($_creditCard_expiration_date) {
            $this-> creditCard_expiration_date = $_creditCard_expiration_date;
        }
        public function getCreditCard_expiration_date() {
            return $this-> creditCard_expiration_date;
        }
        public function setCredit_left($_credit_left) {
            $this-> credit_left = $_credit_left;
        }
        public function getCredit_left() {
            return $this-> credit_left;
        }
    }