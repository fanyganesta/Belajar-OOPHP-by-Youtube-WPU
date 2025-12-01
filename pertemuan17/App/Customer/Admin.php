<?php
    namespace App\Customer;

    use App\Pegawai\Pegawai;
    use App\Pegawai\TampilPegawai;
    
    class Admin extends Pegawai implements TampilPegawai {
        protected $divisi, $tugas;

        public function __CONSTRUCT($nama, $ID, $jabatan, $divisi, $tugas){
            parent::__CONSTRUCT($nama, $ID, $jabatan);
            $this->divisi = $divisi;
            $this->tugas = $tugas;
        }

        public function DetailPegawai(){
            $str = "
            <h4> Detail Pegawai: </h4>
            <ul>
            <table>
                <tr>
                    <td> <li>Nama Pegawai </li></td>
                    <td>: $this->nama</td>
                </tr>
                <tr>
                    <td> <li>ID Pegawai </li></td>
                    <td>: $this->ID </td>
                </tr>
                <tr>
                    <td> <li>Jabatan Pegawai </li></td>
                    <td>: $this->jabatan</td>
                </tr>
                <tr>
                    <td> <li>Divisi </li></td>
                    <td>: $this->divisi </td>
                </tr>
                <tr>
                    <td> <li>Tugas </li></td>
                    <td>: $this->tugas</td>
                </tr>
            </table>
            </ul>
            ";
            return $str;
        }

        public function setTugas( $tugas ){
            return $this->tugas = $tugas;
        }


    }