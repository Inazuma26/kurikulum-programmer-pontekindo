<?php
//meroja'ah pelajaran day6
//buat array assosiative berisi produk fashion  dengan disertai id, nama barang, harga, jumlah stock
//lalu tampilkan menggunakan foreach

// $peci=array(
//     "id"=>123321,
//     "nama barang"=>"peci",
//     "harga barang"=>20000,
//     "jumlah stock"=>1,
//     "deskripsi"=>"peci hanya satu di indo",
//     "tanggal_produksi"=>20
// );
// foreach ($peci as $k => $val){
//     echo "$k. ".$val .PHP_EOL;
// }

//manipulasi strink : mengubah/mengedit,menambah, menghapus tipe data strink
//strline() : menghitung panjang strink
// $strlen = "hello world coding";
// $number= 1_123_433;
// var_dump(strlen($strlen));

// var_dump(str_word_count($strlen));

// var_dump(number_format($number,0,"". "."));
// echo "Rp".number_format($number,0,"". ".");
// echo "\n";

$strink = "hello world coding\n";
$var = "INI ADALAH SANTRI BARU";
$vin = "saya suka kurma";
// var_dump(strtoupper($strink));

// var_dump(strtolower($var));

var_dump(ucwords($vin));

// echo str_repeat($strink,5);

// var_dump(substr($strink,6,12));

// $buku = "buku";

// echo "ini pem{$buku}an saya"." \nsaya beli buku baru\n";

//mengubah tipe data 
//menjadi strink
// $a = (string) 100;
// var_dump($a);

// //menjadi integer
// $b =(int) "220";
// var_dump($b);

// $c = (float)trim(fgets(STDIN));
// var_dump($c);

// $g=md5("lu asik bang");
// echo $g;
// echo "\n";

echo rand(0,9). "\n";