<?php
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