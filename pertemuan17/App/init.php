<?php 


// spl_autoload_register( function( $class ){
//     $paths = [
//         __DIR__ . '/Pegawai/',
//         __DIR__ . '/Produk/'
//     ];

//     foreach($paths as $path){
//         $file = $path . $class . '.php';
//         if(file_exists($file)){
//             require_once $file;
//             return;
//         }
//     }
// });

spl_autoload_register(function($class){
    $str = str_replace('\\', '/', $class) . '.php';
    require_once $str;
});

// require 'Produk/Admin.php';