<?php 
    class Produk{
        public $kategori = 'kategori',
               $judul = 'judul',
               $penulis = 'penulis',
               $penerbit = 'penerbit',
               $harga = 0;

        public function getLable(){
            echo 
                "<h3>Detail Produk: $this->judul</h3>
                    <ul>
                        <li> Kategori = $this->kategori </li>
                        <li> Penulis = $this->penulis </li>
                        <li> Penerbit = $this->penerbit </li>
                        <li> Harga = $this->harga </li>
                    </ul>";
        }
    }

    $produk1 = new Produk();
    $produk1->kategori = 'game';
    $produk1->judul = 'residen evil 4';
    $produk1->harga = 10000;
    $produk1->getLable();
?>