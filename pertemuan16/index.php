<?php 
    require_once 'App/init.php';


    $produk1 = new Film('Contoh Aja','','','','',5);
    echo $produk1->tampilDetail();
    $produk2 = new Film('The Film', '','',300000, 120,'');
    echo $produk2->tampilDetail();;
    $produk3 = new Game('The Game', '', '', 100000, '','');
    echo $produk3->tampilDetail();
    $produk4 = new Buku('The Book', '', '', 30000, 150);
    echo $produk4->tampilDetail();
    $produk5 = new Game('The Second Game','','', 10000, '',10);
    echo $produk5->tampilDetail();
?>

