<?php
    require_once 'Product.php';

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