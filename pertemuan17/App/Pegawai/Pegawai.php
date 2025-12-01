<?php
    namespace App\Pegawai;
    
    abstract class Pegawai{
        protected $nama,
                    $ID,
                    $jabatan;

        protected function __CONSTRUCT($nama, $ID, $jabatan){
            $this->nama = $nama;
            $this->ID = $ID;
            $this->jabatan = $jabatan;
        }

        public abstract function setTugas ( $tugas );
    }