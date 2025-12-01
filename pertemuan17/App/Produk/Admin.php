<?php 
    namespace App\Produk;

    use App\Pegawai\Pegawai;
    use App\Pegawai\TampilPegawai;

    class Admin extends Pegawai implements TampilPegawai{
        protected $divisi, $tugas;

        public function __CONSTRUCT($nama, $ID, $jabatan, $divisi, $tugas){
            parent::__CONSTRUCT($nama, $ID, $jabatan);
            $this->divisi = $divisi;
            $this->tugas = $tugas;
        }

        public function DetailPegawai(){
            $nama = $this->nama;
            $ID = $this->ID;
            $jabatan = $this->jabatan;
            $divisi = $this->divisi;
            $tugas = $this->tugas;
            $str = "
                <h4> Data Detail Pegawai:</h4>
                    <ul>
                    <table>
                        <tr>
                            <td> <li>Nama Pegawai</li></td>
                            <td>: $nama </td>
                        </tr>
                        <tr>
                            <td> <li>ID Pegawai</li></td>
                            <td>: $ID </td>
                        </tr>
                        <tr>
                            <td> <li>Jabatan Pegawai</li></td>
                            <td>: $jabatan</td>
                        </tr>
                        <tr>
                            <td> <li>Divisi Pegawai</li></td>
                            <td>: $divisi </td>
                        </tr>
                        <tr>
                            <td> <li>Tugas Pegawai</li></td>
                            <td>: $tugas </td>
                        </tr>
                    </table>
                    </li>
                    </ul>
            ";
            return $str;
        }

        public function setTugas($tugas){
            $this->tugas = $tugas;
            return $this->tugas;
        }


    }