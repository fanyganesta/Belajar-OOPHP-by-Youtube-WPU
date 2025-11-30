<?php

class Film extends Produk implements Survei {
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