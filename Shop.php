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