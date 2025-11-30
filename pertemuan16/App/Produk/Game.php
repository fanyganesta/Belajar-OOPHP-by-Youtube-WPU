<?php 

class Game extends Produk implements Survei {
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