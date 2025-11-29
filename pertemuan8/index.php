<?php 
    class Produk{
        public $kategori, $judul, $penulis, $penerbit, $harga;
        
       public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga){
            $this->kategori = ($kategori != null) ? $kategori : 'kategori';
            $this->judul = ($judul != null) ? $judul : 'judul';
            $this->penulis = ($penulis != null) ? $penulis : 'penulis';
            $this->penerbit = ($penerbit != null) ? $penerbit : 'penerbit';
            $this->harga = ($harga != null) ? $harga : 0;
            
        }

        public function getStringLabel(){
            $strOpening = "<h3>Detail Produk: $this->judul</h3>
                    <ul>";

            $strList = "
                        <li> Kategori = $this->kategori </li>
                        <li> Penulis = $this->penulis </li>
                        <li> Penerbit = $this->penerbit </li>
                        <li> Harga = $this->harga </li>
                    ";

            $strClosing = "</ul>";
            return $str = [$strOpening, $strList, $strClosing];
        }

        public function gabungStr($datas){
            [$data1, $data2, $data3] = $datas;
            return $data1.$data2.$data3;
        }

        public function tampilDetail(){
            $datas = $this->gabungStr($this->getStringLabel());
            return $datas;
        }
    }

    // Object Type
    // Tidak diupdate karena kurang diperlukan
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
        public $durasi;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $durasi){
            $this->durasi = ($durasi != '') ? $durasi : 10;
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga);
        }


        public function stringFilm(){
            $strFilm =  
                "<li>Durasi: $this->durasi</li>";
            return $strFilm;
        }


        public function tampilDetail(){
            $datas = parent::getStringLabel();
            $datas[1] = $datas[1].$this->stringFilm();
            return $this->gabungStr($datas);

        }
    }

    class Game extends Produk {
        public $playTime;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $playTime){
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga);
            $this->playTime = ($playTime != '') ? $playTime : 0;
        }

        public function strGame(){
            $str = "<li> Durasi Permainan: ~ $this->playTime, menit </li>";
            return $str;
        }

        public function tampilDetail(){
            $datas = parent::getStringLabel();
            $datas[1] = $datas[1].$this->strGame();
            return $this->gabungStr($datas);
        }
    }


    class Buku extends Produk{
        public $halaman;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $halaman){
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga);
            $this->halaman = ($halaman != '') ? $halaman : 0;
        }

        public function strBook(){
            return $str = "<li>Halaman: $this->halaman halaman </li>";
        }

        public function tampilDetail(){
            $datas = parent::getStringLabel();
            $datas[1] = $datas[1].$this->strBook();
            return $this->gabungStr($datas);
        }
    }

    $produk1 = new Produk('Film', 'Contoh Aja','','','');
    echo $produk1->tampilDetail();
    $produk2 = new Film('Film', 'The Man', '','',300000, 120);
    echo $produk2->tampilDetail();
    $produk3 = new Game('Game', 'The Game', '', '', 100000, '');
    echo $produk3->tampilDetail();
    $produk4 = new Buku('Buku', 'The Book', '', '', 30000, 150);
    echo $produk4->tampilDetail();
?>

