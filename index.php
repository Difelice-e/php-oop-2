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

$user1 = new user(
    'Fabrizio',
    'Tarducci',
    'doppiaeffe@gmail.com',
    '1976-asdf',
    'Via del quirinale 12',
    '3887203560'
);

$guest1 = new guest(
    'Pierfrancesco',
    'Botrugno',
    'sickmadman@gmail.com',
    'Via Brombeis 82',
    '3925684333'
);

$cart1 = new cart(
    [],
    0,
    0
);

$cart1->addProduct($product1);
$cart1->addProduct($product2);
$cart1->calcTot();
$cart1->countProducts();
  
var_dump($product1, $product2, $product3);
var_dump($user1);
var_dump($guest1);
var_dump($cart1);

?>