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
            
        }

        public function getLabel(){
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

    class getLabelProduk{
        public function tampilDetail( Produk $produk ){
            echo 
                "
                    <h3>Detail Produk: $produk->judul</h3>
                    <ul>
                        <table>
                            <tr> 
                                <td> <li> Kategori: </li> </td>
                                <td>$produk->kategori</td>
                            </tr>
                            <tr>
                                <td> <li> Penulis: </li> </td>
                                <td>$produk->penulis</td>
                            </tr>
                            <tr>
                                <td> <li> Penerbit: </li> </td>
                                <td>$produk->penerbit</td>
                            </tr>
                            <tr>
                                <td> <li> Harga: </li> </td>
                                <td> $produk->harga</td>
                            </tr>
                        </table>
                    </ul>
                ";
        }

    }

    $produk1 = new Produk('game', 'residen evil 4','','', 10000);
    $produk2 = new Produk('Film', 'The Man', '','',300000);

    $cetak1 = new GetLabelProduk();
    $cetak1->tampilDetail($produk1); 

    $cetak2 = new GetLabelProduk();
    $cetak2->tampilDetail($produk2);

    
?>