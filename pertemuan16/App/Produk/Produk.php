<?php 

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