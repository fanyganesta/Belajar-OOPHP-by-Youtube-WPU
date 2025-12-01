<?php 
    require_once 'App/init.php';


    // $produk1 = new Film('Contoh Aja','','','','',5);
    // echo $produk1->tampilDetail();
    // $produk2 = new Film('The Film', '','',300000, 120,'');
    // echo $produk2->tampilDetail();;
    // $produk3 = new Game('The Game', '', '', 100000, '','');
    // echo $produk3->tampilDetail();
    // $produk4 = new Buku('The Book', '', '', 30000, 150);
    // echo $produk4->tampilDetail();
    // $produk5 = new Game('The Second Game','','', 10000, '',10);
    // echo $produk5->tampilDetail();
    // echo "<hr>";


    //1. Buat class admin yang merupakan child dari class abstract pegawai
    //2. abstrak pegawai, punya nama, id, jabatan, dan memiliki method tugas
    //3. Tugas yang dimaksud adalah
        //a. Mengurus Produk
        //b. Mengurus Customer
    //4. pada tugas Customer, bikin class Admin yang extend abstract pegawai
    //5. pada masing masing class admin, berikan namespace dan alias.
    //6. buat setter dan getter data admin, dan coba instansiasi class admin
    // require __DIR__ . '/../Pegawai/TampilPegawai.php';
    // require __DIR__ . '/../Pegawai/Pegawai.php';
    $pegawai1 = new \App\Produk\Admin('Nama Satu', '1900', 'Junior', 'Produk', 'Menata barang');
    echo $pegawai1->DetailPegawai();

    $pegawai2 = new \App\Customer\Admin('Nama Admin Customer', 1000, 'Junior', 'Customer Service', 'Confirmasi ke Pelanggan');
    echo $pegawai2->DetailPegawai();


?>

