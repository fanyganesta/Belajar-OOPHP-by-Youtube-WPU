<!DOCTYPE html>
<html>
<head> 
    <title> Introduction </title>
</head>
<body>
    <h2> Selamat datang di Object Oriented PHP </h2>
    <p> Ini adalah sebuah program yang menerapkan apa yang dijelaskan oleh Pak Sandhika Galih dari YOUTUBE WPU. Apa yang saya pelajari, akan saya terapkan disini. Terimakasih jika anda telah mengakses program ini, semoga bermanfaat untuk kita semua</p>

    <h3> Apa yang akan kita pelajari? </h3>
    <ol> 
        <li>
            <h4>Pembuatan Class dan Object (Pertemuan 2)</h4>
            <p>1. <b>Class</b> adalah sebuah blue print, gambaran, atau struktur pembentuk dari <b>Object</b> yang akan dibuat dari <b>Class</b> tersebut. Jika diibaratkan <b>Object</b> adalah rumah, maka <b>Class</b> adalah denah rumah yang akan dibuat menjadi rumah tersebut.</p>
            
            <p>2. <b>Object</b> adalah hasil dari apa yang dibentuk atu dibuat berdasarkan blue pirnt (<b>Class</b>) pembentuknya. Dari satu <b>Class</b> saja, kita bisa membuat banyak <b>Objek</b> dan tidak ada batasan jumlah.</p>
        </li>
        <li>
            <h4>Pembutan Property dan Method pada Class (Pertemuan 3)</h4>
            <p>1. <b>Property</b> adalah sebuah variabel yang berada di dalam sebuah <b>Class</b>.Jika diibaratkan <b>Object</b>-nya adalah sebuah mobil, maka <b>Property</b>-nya adalah: roda, warna, nama, kecepatan, pembuat.</p>

            <p>2. <b>Method</b> adalah sebuah fungsi yang berada di dalam sebuah <b>Class</b>. Jika diibaratkan <b>Object</b>-nya adalah mobil, maka <b>Method</b> yang dimilikinya bisa saja seperti: tambahKecepatan, belokKiri, belokKanan, mundurCepat, dan masih banyak lagi.</p>
        </li>
        <li> 
            <h4>Pembuatan Constructor (Pertemuan 4)</h4>
            <p><b>Contruct (__CONSTRUCT)</b> adalah sebuah method yang secara otomatis akan dijalankan ketika kita menginisiasi sebuah <b>Object</b>. Dengan kata lain, ketika kita membuat <b>Object</b> (berapa kalipun) maka method <b>Construct</b> ini akan otomatis dijalankan juga. <b>Construct</b> sangat efektif kita gunakan sebagai penerima variabel saat inisiasi <b>Object</b></p>
        </li>
        <li>
            <h4>Pengenalan Object Type (Pertemuan 5)</h4>
            <p>1. <b>Object Type</b> adalah tipe data yang bisa kita gunakan untuk nilai dari parameter dalam pemanggilan <b>Class</b> yang telah kita buat.</p>
            <p>2. Pengunaanya kita bisa memanggil <b>Object</b> dari <b>Class</b> yang kita buat sebelumnya sebagai parameter agar diproses didalam <b>Class</b> baru yang akan kita gunakan.</p>
        </li>
        <li> 
            <h4>Pengenalan Inheritance (Pertemuan 6-7)</h4>
            <p>1. <b>Inheritance</b> adalah proses perpanjangan (Extend) fitur,properti, ataupun method dari <b>class utama</b> (Parent Class) dengan pembuatan Child Class.
            <p>2. <b>Inheritance</b> efektif digunakan karena dalam 1 objek, sangat memungkinkan memiliki banyak variasi yang memiliki banyak fitur,fungsional, ataupun perilaku yang berbeda beda juga. Sehingga dengan <b>Child Class</b> yang mewarisi properti dan method dari <b>Parent Class</b>-nya kita akan mudh untuk menerapkan fitu/fungsionalitas lain yang sangat bergantung dari jenis <b>Object</b> yang akan dibuat.
        </li>
        <li>
            <h4>Penggunaan Overriding (Pertemuan 8)</h4>
            <p><b>Overriding</b> adalah sebuah cara dimana kita memanfaatkan properti atau method dari <b>Parent Class</b> untuk digunakan sekaligus menambah fungsionalitas lain melalui <b>Child Class</b>
        </li>
        <li>
            <h4>Pengenalan Visibilitas Properti dan Mehtod (Pertemuan 9)</h4>
            <p>1. <b>Visibilitas</b> adalah tentang membatasi penggunaan sebuah properti atau method dari <b>Parent Class</b> apakah diperbolehkan untuk diakses oleh <b>Child Class</b>.</p>
            <p>2. Terdapat 3 jenis visibility, yakni:</p>
            <ul>
                <li><b>Public:</b> Yakni suatu properti atau method bisa diakses diluar Class (Parent maupun Child) atau dengan kata lain dapat diakses langsung dari objek yang dibuat.</li>
                <li><b>Protected:</b> Yakni suatu properti atau method hanya bisa diakses oleh Parent maupun Child, tidak bisa dari luar (langsung dari objek).</li>
                <li><b>Private</b> Yakni sebuah properti atau method hanya bisa diakses oleh Class itu sendiri (tidak bisa diakses dari luar maupun dari class lain).</li>
            </ul>
        </li>
        <li>
            <h4>Access Modifier Setter dan Getter (Pertemuan 10)</h4>
            <p><b>Setter</b> dan <b>Getter</b> kita butuhkan untuk menghindari penggunaan properti atau method dari luar Class yang kita buat. 
            <p>1. <b>Setter</b> adalah sebuah method yang kita gunakan untuk memberikan nilai pada suatu properti yang memiliki visibilitas <b>Protected</b> atau <b>Private</b>.</p>
            <p>2. <b>Getter</b> adalah sebuah method yang kita gunakan untuk mengambil nilai dari sebuah properti yang memiliki visibilitas <b>Protected</b> atau <b>Private</b>. </p>
        </li>
        <li>
            <h4>Static Keyword (Pertemuan 11)</h4>
            <p><b>Static Keyword</b> adalah cara kita membuat sebuah properti pada suatu Class agar memiliki nilai yang tetap(tidak kembali ke awal instansiasi) walaupun digunakan pada objek objek lain.</p>
            <p> Misalnya ketika pada objek pertama, kita merubah sebuah properti agar memiliki nilai x + 1 dimana x adalah nilai awal. Maka, ketika kita gunakan properti ini di instansiasi objek ke-2 nilai properti ini adalah x + 1 (tidak kembali ke defaultnya yakni x).</p>
        </li>
        <li>
            <h4>Constanta (Pertemuan 12)</h4>
            <p><b>Constanta</b> adalah tipe variabel yang memungkinkan nilai variabel tersebut tidak berubah dan tidak dapat diubah kapan pun dan dimanapun selain ketika awal pembuatan</p>
            <p>Untuk pembuatannya ada 2 cara, yakni:</p>
            <ul>
                <li>1. define('NAMA_KONSTANTA', 'nilai_konstanta')</li>
                <li>2. const NAMA_KONSTANTA = 'nilai_konstanta'</li>
            </ul>
        </li>
        <li>
            <h4>Abstract Class (Pertemuan 13-14)</h4>
            <p><b>Abstract Class</b> adalah sebuah class yang mencerminkan ide atau struktur dasar dari class turunan yang mengimplementasikannya. Class ini tidak bisa diinstansiasi kecuali turunannya. Di dalam class abstrak ini minimal memiliki 1 method abstrak tanpa isi, hanya disediakan interfacenya saja.<p>
        </li>
        <li>
            <h4>Interface (Pertemuan 15)</h4>
            <p><b>Interface</b> adalah sebuah class yang tidak memiliki properti dan body method. Fungsinya adalah menetapkan method apa saja yang harus dibuat oleh <b>Class Implementasinya</b> di mana body dari method yang akan digunakan baru dibuat/dibentuk di class implementasi dari interface ini.</p>
        </li>
        <li>
            <h4>Autoloading (Pertemuan 16)</h4>
            <p><b>Autoloading</b> berguna untuk kita ketika menggunakan penulisan standard untuk class menggunakan satu file per-Class. Jika begini, maka kita perlu menggunakan 'require' sangat banyak dan berulang kali ketika file utama membutuhkan file class lain. Fungsi ini menggunakan library built_in PHP yakni spl_autoload_register();</p>
        </li>
        <li>
            <h4>Namespace (Pertemuan 17)</h4>
            <p><b>Namespace</b> adalah cara kita untuk mengelompokkan class-class yang telah dibuat agar PHP bisa memahami bahwa suatu class adalah milik kelompok tertentu. Maksudnya, PHP agar mengetahui seuatu class berasal dari kelompok yang mana. Karena, pada dasarnya PHP tidak memperbolehkan kita untuk membuat class dengan nama yang sama walaupun dengan fungsi yang berbeda.</p>
            <p> Misalnya, kita membuat <b>Class User</b> untuk sebuah fitur <b>Produk</b>. Di sisi lain, kita membuat sebuah <b>Class User</b> lain untuk fitur <b>Admin</b>. Maka agar PHP bisa menjalankan kedua class user (tergantung kita instansiasi yang mana), kita harus mengelompokkan masing masing <b>Class User</b> ini pada kelompok fiturnya masing masing.</p>
        </li>
    </ol>
    <ul>
        <li><a href="pertemuan2-3/">Pertemuan 2-3</a></li>
        <li><a href="pertemuan4/">Pertemuan 4</a></li>
        <li><a href="pertemuan5/">Pertemuan 5</a></li>
        <li><a href="pertemuan6-7/">Pertemuan 6-7</a></li>
        <li><a href="pertemuan8/">Pertemuan 8</a></li>
        <li><a href="pertemuan9-10/">Pertemuan 9-10</a></li>
        <li><a href="pertemuan11-12/">Pertemuan 11-12</a></li>
        <li><a href="pertemuan13-14/">Pertemuan 13-14</a></li>
        <li><a href="pertemuan15/">Pertemuan 15</a></li>
        <li><a href="pertemuan16/">Pertemuan 16</a></li>
        <li><a href="pertemuan17/">Pertemuan 17</a></li>
    </ul>

</body>
</html>