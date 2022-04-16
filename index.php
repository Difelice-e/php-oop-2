<?php 

require_once __DIR__. '/product.php';

$prodotto1 = new product(
    'Monge',
    'Monge All Breeds Adult Salmone e Riso',
    'Cibo',
    'Crocchette per cani adulti con salmone e riso',
    45.90
);
$prodotto2 = new product(
    'Seresto',
    'Seresto Collare Antiparassitario per Cani',
    'Medicinali',
    'Collare antiparassitario per cani di grandi dimensioni',
    29.80
);
$prodotto3 = new product(
    'Disney',
    'Guinzaglio Disney Vader Star Wars',
    'Guinzaglieria',
    'Guinzaglio a tema Star Wars',
    11.95
);
  
var_dump($prodotto1, $prodotto2, $prodotto3);

?>