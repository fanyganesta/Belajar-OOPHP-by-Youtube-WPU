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
            $this->durasi = $durasi ?? 10;
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

    $produk2 = new Produk('Film', 'Contoh Aja','','','');
    echo $produk2->tampilDetail();
    $produk1 = new Film('Film', 'The Man', '','',300000, 120);
    echo $produk1->tampilDetail();
?>

