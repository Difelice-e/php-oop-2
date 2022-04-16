<?php 

require_once __DIR__. '/product.php';
require_once __DIR__. '/user.php';
require_once __DIR__. '/guest.php';
require_once __DIR__. '/cart.php';

$product1 = new product(
    'Monge',
    'Monge All Breeds Adult Salmone e Riso',
    'Cibo',
    'Crocchette per cani adulti con salmone e riso',
    45.90
);
$product2 = new product(
    'Seresto',
    'Seresto Collare Antiparassitario per Cani',
    'Medicinali',
    'Collare antiparassitario per cani di grandi dimensioni',
    29.80
);
$product3 = new product(
    'Disney',
    'Guinzaglio Disney Vader Star Wars',
    'Guinzaglieria',
    'Guinzaglio a tema Star Wars',
    11.95
);

$cart1 = new cart(
    [],
    0,
    0
);

$cart1->addProduct($product1);
$cart1->addProduct($product1);
$cart1->addProduct($product2);
$cart1->addProduct($product3);
$cart1->calcTot();
$cart1->countProducts();

$cart2 = new cart(
    [],
    0,
    0
);

$cart2->addProduct($product2);
$cart2->addProduct($product2);
$cart2->addProduct($product3);
$cart2->calcTot();
$cart2->countProducts();

$card1 = new creditCard(
    5333848564200053,
    '10/27', 
    884
);

$card2 = new creditCard(
    5493847104205563,
    '11/25', 
    851
);

$user1 = new user(
    'Fabrizio',
    'Tarducci',
    'doppiaeffe@gmail.com',
    '1976-asdf',
    'Via del quirinale 12',
    '3887203560',
    $card1,
    $cart1,
);

$user1->getDiscount();

$guest1 = new guest(
    'Pierfrancesco',
    'Botrugno',
    'sickmadman@gmail.com',
    'Via Brombeis 82',
    '3925684333',
    $card2,
    $cart2
);
  
var_dump($product1, $product2, $product3);
var_dump($user1);
var_dump($guest1);
var_dump($cart1);

?>