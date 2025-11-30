<?php 

    interface survei{
        public function setRating( $rating );
    }

    abstract class Produk{
        public $kategori, $judul, $penulis, $penerbit, $harga;
        
        public static $index = 1;

        public function __CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga){
            $this->kategori = ($kategori != null) ? $kategori : 'kategori';
            $this->judul = ($judul != null) ? $judul : 'judul';
            $this->penulis = ($penulis != null) ? $penulis : 'penulis';
            $this->penerbit = ($penerbit != null) ? $penerbit : 'penerbit';
            $this->harga = ($harga != null) ? $harga : 0;
            
        }

        public function getStringLabel(){
            $index = self::$index;
            $strOpening = "<h3>Detail Produk$index: $this->judul</h3>
                    <ul>";

            $strList = "
                        <li> Kategori = $this->kategori </li>
                        <li> Penulis = $this->penulis </li>
                        <li> Penerbit = $this->penerbit </li>
                        <li> Harga = $this->harga </li>
                    ";

            $strClosing = "</ul>";
            self::$index++;
            return $str = [$strOpening, $strList, $strClosing];
        }

        public function gabungStr($datas){
            [$data1, $data2, $data3] = $datas;
            return $data1.$data2.$data3;
        }

        abstract public function tampilDetail();
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

    class Film extends Produk implements survei {
        protected $durasi, $rating = 0; 

        const KATEGORI = 'Film';

        public function __CONSTRUCT($judul, $penulis, $penerbit, $harga, $durasi, $rating){
            $this->durasi = ($durasi != '') ? $durasi : 10;
            $kategori = self::KATEGORI;
            $this->rating = ($rating == '') ? $this->rating : $rating;
            parent::__CONSTRUCT($kategori, $judul, $penulis, $penerbit, $harga);
        }


        public function stringFilm(){
            $strFilm =  
                "<li>Durasi: $this->durasi</li>";
            return $strFilm;
        }


        public function tampilDetail(){
            $datas = parent::getStringLabel();
            $rating = $this->rating;
            $datas[1] = $datas[1].$this->stringFilm().$this->setRating($rating);
            return $this->gabungStr($datas);
        }

        public function setRating( $rating ){
            $rating = $this->rating;
            if($rating == '0'){
                $strRating = "<li> Belum terdapat rating </li>";
            }else{
                $strRating = "<li> Rating users: $rating/10</li>";
            }
            return $strRating;
        }
    }

    class Game extends Produk {
        protected $playTime, $rating = 0;

        const KATEGORI = 'Game';

        public function __CONSTRUCT($judul, $penulis, $penerbit, $harga, $playTime, $rating){
            $this->rating = ($rating == null) ? $this->rating : $rating;
            parent::__CONSTRUCT(self::KATEGORI, $judul, $penulis, $penerbit, $harga);
            $this->playTime = ($playTime != '') ? $playTime : 0;
        }

        public function strGame(){
            $str = "<li> Durasi Permainan: ~ $this->playTime, menit </li>";
            return $str;
        }

        public function tampilDetail(){
            $datas = parent::getStringLabel();
            $datas[1] = $datas[1].$this->strGame().$this->setRating($this->rating);
            return $this->gabungStr($datas);
        }        

        public function setRating( $rating ){
            $rating = $this->rating;
            if($rating == '0'){
                $strRating = "<li> Belum terdapat rating </li>";
            }else{
                $strRating = "<li> Rating users: $rating/10</li>";
            }
            return $strRating;
        }
    }


    class Buku extends Produk{
        public $halaman;

        const KATEGORI = 'Buku';

        public function __CONSTRUCT($judul, $penulis, $penerbit, $harga, $halaman){
            parent::__CONSTRUCT(self::KATEGORI, $judul, $penulis, $penerbit, $harga);
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

