<?php 
    class Shop {
        protected $shop_name;
        protected $shop_products;

        public function __construct($_shop_name) {
            $this-> shop_name = $_shop_name;
        }

        public function setName($_shop_name) {
            $this-> shop_name = $_shop_name;
        }
        public function getName() {
            return $this-> shop_name;
        }
    }

    $KIKO_shop = new Shop("KIKO");
    echo $KIKO_shop->getName();
