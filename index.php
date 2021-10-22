<?php 
    class Shop {
        protected $shop_name;
        protected $shop_products; // array di oggetti

        public function __construct($_shop_name) {
            $this-> shop_name = $_shop_name;
        }

        public function setShop_name($_shop_name) {
            $this-> shop_name = $_shop_name;
        }
        public function getShop_name() {
            return $this-> shop_name;
        }
    }

    class Product {
        protected $category;

        public function __construct($_category) {
            $this-> category = $_category;
        }
        public function setCategory($_category) {
            $this-> category = $_category;
        }
        public function getCategory() {
            return $this-> category;
        }
    }

    class Lipstick extends Product {
        protected $lipstick_name;
        protected $lipstick_price;

        public function __construct($_lipstick_name) {
            $this-> lipstick_name = $_lipstick_name;
        }
        public function setLipstick_name($_lipstick_name) {
            $this-> lipstick_name = $_lipstick_name;
        }
        public function getLipstick_name() {
            return $this-> lipstick_name;
        }
    }

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
    }

    trait CreditCard {
        protected $creditCard_number;
        protected $creditCard_expiration_date;

        public function __construct($_creditCard_number, $_creditCard_expiration_date) {
            $this-> creditCard_number = $_creditCard_number;
            $this-> creditCard_expiration_date = $_creditCard_expiration_date;
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
    }

    $KIKO_shop = new Shop("KIKO");
    echo $KIKO_shop->getShop_name();
