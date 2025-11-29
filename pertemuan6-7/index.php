<?php 
    class Produk{
        public $kategori = 'kategori',
               $judul = 'judul',
               $penulis = 'penulis',
               $penerbit = 'penerbit',
               $harga = 0;
        
       public function __CONSTRUCT($kategori = 'kategori', $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga', $time = 0){
            $this->kategori = $kategori;
            $this->judul = $judul;
            $this->penulis = ($penulis != null) ? $penulis : 'penulis';
            $this->penerbit = ($penerbit != null) ? $penerbit : 'penerbit';
            $this->harga = ($harga != null) ? $harga : 0;
            $this->time = ($harga != null) ? $time : 0;
            
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

    class Film extends Produk {

        public function tampilDetail(){
            echo 
                "
                    <h3>Detail Produk: $this->judul</h3>
                    <ul>
                        <table>
                            <tr> 
                                <td> <li> Kategori: </li> </td>
                                <td>$this->kategori</td>
                            </tr>
                            <tr>
                                <td> <li> Penulis: </li> </td>
                                <td>$this->penulis</td>
                            </tr>
                            <tr>
                                <td> <li> Penerbit: </li> </td>
                                <td>$this->penerbit</td>
                            </tr>
                            <tr>
                                <td> <li> Harga: </li> </td>
                                <td> $this->harga</td>
                            </tr>
                            <tr>
                                <td> <li> Durasi: </li> </td>
                                <td> $this->time Menit</td>
                            </tr>
                        </table>
                    </ul>
                ";
        }
    }

    class Game extends Produk{
        public $playTime = 0;

        public function tampilDetail(){
            echo"
                    <h3>Detail Produk: $this->judul</h3>
                    <ul>
                        <table>
                            <tr> 
                                <td> <li> Kategori: </li> </td>
                                <td>$this->kategori</td>
                            </tr>
                            <tr>
                                <td> <li> Penulis: </li> </td>
                                <td>$this->penulis</td>
                            </tr>
                            <tr>
                                <td> <li> Penerbit: </li> </td>
                                <td>$this->penerbit</td>
                            </tr>
                            <tr>
                                <td> <li> Harga: </li> </td>
                                <td> $this->harga</td>
                            </tr>
                            <tr>
                                <td> <li> Play Time: </li> </td>
                                <td>~ $this->time Menit</td>
                            </tr>
                        </table>
                    </ul>
                ";
        }
    }

    $produk1 = new Game('Game', 'Residen Evil 4','','', 10000, 300);
    $produk1->tampilDetail();
    $produk2 = new Film('Film', 'The Man', '','',300000, 120);
    $produk2->tampilDetail();

    
?>