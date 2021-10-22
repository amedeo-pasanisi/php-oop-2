<?php
    require_once 'Shop.php';
    require_once 'Product.php';
    require_once 'Lipstick.php';
    require_once 'User.php';
    require_once 'CredirCard.php';

    $KIKO_shop = new Shop("KIKO");
    $user1 = new User('Amedeo');
    echo 'Benvenuto in ' . $KIKO_shop-> getShop_name() . ' '. $user1-> getUser_name() . '</br>';

    $user1_card1 = new CreditCard(185036500039286, '20/30', 20);

    try {
        $user1-> useCreditCard($user_card1->getCredit_left());
    } catch (Exception $e) {
        echo $e-> getMessage();
    }
