<?php 
    class Produk{
        public $kategori = 'kategori',
               $judul = 'judul',
               $penulis = 'penulis',
               $penerbit = 'penerbit',
               $harga = 0;
        
       public function __CONSTRUCT($kategori = 'kategori', $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga'){
            $this->kategori = $kategori;
            $this->judul = $judul;
            $this->penulis = ($penulis != null) ? $penulis : 'penulis';
            $this->penerbit = ($penerbit != null) ? $penerbit : 'penerbit';
            $this->harga = ($harga != null) ? $harga : 0;
            $this->getLable();
        }

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

    $produk1 = new Produk('game', 'residen evil 4','','', 10000);
    echo "<br>";
    $produk2 = new Produk('Film', 'The Man', '','',300000);
?>