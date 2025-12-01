<?php 

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