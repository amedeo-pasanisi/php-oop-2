<?php
    require_once 'CredirCard.php';

    class User{
        use CreditCard;
        protected $user_name;

        public function __construct($_user_name) {
            $this-> user_name = $_user_name;
        }
        public function setUser_name($_user_name) {
            $this-> user_name = $_user_name;
        }
        public function getUser_name() {
            return $this-> user_name;
        }

        public function useCreditCard($_credit_left) {
            if ($_credit_left > 0 ) {
                echo 'Grazie per l\' acquisto!';
            } else {
                throw new Exception('Siamo spiacenti, hai terminato il credito');
            }
        }
    }