<?php
//variable function
function sum($a, $b){
    $t = $a + $b;
    return $t;
}
echo $penjumlahan = sum(55,45). "\n";


//buat variable function dengan tujuan untuk memanggil nama dan devisi dengan parameter nya di isi difault velue
function nama_divisi($nama="hanif",$devisi="programmer"){
    return "Nama : $nama\nDevisi : $devisi\n";
}
$tampil = "nama_divisi";
echo $tampil("hanifa","programmer");


//buat seperti ini tapa default velue dengan variable lenght-argument: Nama-Nama hewan
function nama_hewan(...$hewan){
    return implode(",",$hewan);
}
$tampilhewan = "nama_hewan";
echo $tampilhewan ("kucing\n"."bebek\n"."kambing").PHP_EOL;


//Anonymous function
$buah = function($fruit){
    echo "buah : $fruit\n";
};
$buah("apel");


//dan function ini bisa kita jadikan argumen juga
//menghitung jumlah kata dalam sebuah string
function jumlah_kata($string,$closure){
    echo "jumlah kata : ".$closure($string). "\n";
}
jumlah_kata("saya adalah seorang kapiten",function ($kalimat){return str_word_count($kalimat);});




$buah1 = "melon";
$tampilbuah = function($tunjuk) use($buah1){//use hanya untik closure
    echo "$tunjuk $buah1"."\n";
};
$tampilbuah("itu"); 