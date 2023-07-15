<?php

//1. perbedaan (!=) dan (!==) dalam operator perbandingan beserta contoh dan praktek nya 

// (!=) -> jika nilai nya tidak sama maka akan menghasilkan true
//contoh nya seperti ini
var_dump ("44" != 41); //akan menghasilkan true

// (!==) -> juka nilai dan tipe nya tidak sama maka akan menghasilkan nilai true
//contohnya sepertin ini
var_dump (50!==0.50);//akan menghasilkan true

//2. jelaskan perbedan variable dan constanta! buatkan contohnya
// perbedaaan nya adalah jika variable itu dapat kita rubah rubah semaunya dan jika constanta, dia tidak bisa dirubah seemaunya
//contoh dari variable 
$nama="hanif";//isi dari varibale ini bisa kita rubah
$alamat="pagar alam";
echo "nama saya adalah : $nama\n";
echo "dan saya tinggal di : $alamat\n";

//contoh dari constanta
const NAMA = "hanif";
const ALAMAT = "pagar alam";
echo NAMA . ALAMAT;
echo PHP_EOL;

// 3. buatlah daftar teman 1 divisi beserta nama umur, dan ttl nya (value nya) dalam bentuk array multidimensi / array didalam array dengan keynya beruma nama nama dari teman 1 divisi!
$programmer = array (
    array("1","hanif", "pagar alam", 17),
    array("2","syfa", "solo", 22),
    array("3","danu", "jambi", 17),
    array("4","faqih", "sumatra", 17),
    array("5","dimas", "batu raja", 20),
    array("6","hafizd", "ponti anak", 19)
);
echo $programmer [0][1];
echo "\n";
echo $programmer [1][1];
echo "\n";
echo $programmer [2][1];
echo "\n";
echo $programmer [3][1];
echo "\n";
echo $programmer [4][1];
echo "\n";
echo $programmer [5][1];
echo "\n";

//4. operator penugasan => budi punya uang = 50000, dian ingin jajan senilai =20000, lalu ibunya lalu ibunya kasih uang 5000 berapakah uang saat ini yang di pegang budi
$uang1=50000;
$uang2=20000;
$uang3=5000;
$sisah_jajan=$uang1-=$uang2;
$uang_yang_dipegang_budi=$sisah_jajan+=$uang3;
echo "uanga yang di pegang budi saat ini adalah :$uang_yang_dipegang_budi\n";

//5. $a = 7 $b = 3
//buatlah dengan menggunakan operator aretmtika dengan jenis pangkat....
//dimana variable a pangkat variable b
$a=7;
$b=3;
$pangkat=$a**$b;
echo "jika 7 dan 3 dipangkatkan maka hasilnya : $pangkat\n";

//6.buatlah dengn operator logika dan pengkondisian soal cerita di bawah ini:
//ayu akan menerima seseorang sebagai suaminya apabila memenui kreteria berikut ini : ahlaknya baik dan salah satu entah itu good looking atau good rekening.
//lalu budi melamarnya, dia memiliki ahlak yang baik namun tidak good loking dan tidak good rekening
echo "ayu akan menerima seseorng sebagai suaminya jika memenui kreteria berikut ini
- ahlak nya baik
- good looking
- good rekening\n";
echo "budi melamarnya, dia memiliki ahlak yang baik namun tidak
- good looking
- good rekening\t"; 
echo "\n";




//7. buatlah switch untuk menampilkan tingkatan berat suatu barang! dengan expression / expressi didalam nya ada operator perbandingan misal kurang dari 10kg maka output nya ringan, antara 10-20kg agak ringan dan seterus nya
