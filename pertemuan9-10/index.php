<?php 
    class Produk{
        private $kategori, $judul, $penulis, $penerbit, $harga, $diskon;
        
        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon = 0){
            $this->kategori = ($kategori != null) ? $kategori : 'kategori';
            $this->judul = ($judul != null) ? $judul : 'judul';
            $this->penulis = ($penulis != null) ? $penulis : 'penulis';
            $this->penerbit = ($penerbit != null) ? $penerbit : 'penerbit';
            $this->harga = ($harga != null) ? $harga : 0;
            $this->diskon = $diskon;
        }

        protected function getStringLabel(){
            $harga = $this->getharga();

            $strOpening = "<h3>Detail Produk: $this->judul</h3>
                    <ul>";

            $strList = "
                        <li> Kategori = $this->kategori </li>
                        <li> Penulis = $this->penulis </li>
                        <li> Penerbit = $this->penerbit </li>
                        <li> Harga = $harga </li>
                    ";

            $strClosing = "</ul>";
            return $str = [$strOpening, $strList, $strClosing];
        }

        protected function gabungStr($datas){
            [$data1, $data2, $data3] = $datas;
            return $data1.$data2.$data3;
        }

        public function tampilDetail(){
            $datas = $this->gabungStr($this->getStringLabel());
            return $datas;
        }

        protected function setHarga( $diskon ){
            return $this->harga = $this->harga - $this->harga * $diskon / 100;
        }

        protected function getHarga(){
            $this->harga = $this->setHarga($this->diskon);
            return $this->harga;
        }

        protected function getDiskon(){
            return $this->diskon;
        }

        protected function setDiskon( $diskon ){
            return $this->diskon = $diskon;
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
        protected $durasi;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon, $durasi){
            $diskon = ($diskon != '') ? $diskon : 0;
            $this->durasi = ($durasi != '') ? $durasi : 10;
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon);
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
        protected $playTime;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon, $playTime){
            $this->playTime = ($playTime != '') ? $playTime : 0;
            $diskon = ($diskon != '') ? $diskon : 0;
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon);
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
        protected $halaman;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon, $halaman){
            $this->halaman = ($halaman != '') ? $halaman : 0;
            $diskon = ($diskon != '') ? $diskon : 0;
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga, $diskon);
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

    $produk1 = new Produk('Film', 'Contoh Aja','','',100000, 90);
    echo $produk1->tampilDetail();
    $produk2 = new Film('Film', 'The Film', '','',300000,10, 120);
    echo $produk2->tampilDetail();
    $produk3 = new Game('Game', 'The Game', '', '', 100000,10, '');
    echo $produk3->tampilDetail();
    $produk4 = new Buku('Buku', 'The Book', '', '', 30000,10, 150);
    echo $produk4->tampilDetail();
?>

