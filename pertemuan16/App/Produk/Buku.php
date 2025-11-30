<?php 

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