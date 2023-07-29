<?php

//1
function tigaTertinggi($nilai){

}
tigaTertinggi([216, 769, 255, 512, 363, 121]);


//2
$menghitung = "luas : ";
$luas = fn($alas,$tinggi) => $menghitung. 1/2*$alas*$tinggi;
echo $luas(12,20). "\n";

//3
function ubahData(...$motor){
    $hasil = $motor;
    foreach ($motor as $value){
        $hasil == $value;
        echo "ubah data : ".implode(" | ",$motor). " : $hasil".PHP_EOL;
    }
}
ubahData("Vario","Supra","Revo","Vixion","Mio","Beat",);

//4
echo "masukan jumlah penduduk amigakure : ";
$jumlah = (int)trim(fgets(STDIN));
$var=function (){
    global $jumlah;
    if($jumlah > 200){
        echo "padat penduduk \n";
    }elseif($jumlah > 100){
        echo "cukup penduduk \n";
    }else{
        echo "kurang penduduk  \n";
    }
};
$var();


//5
// variable scope di php ada 3 jenis yaitu global scope, local scope, dan static scope.

///// contoh global scope ////
//global scope itu hanya bisa di akses di luar funtion
$scope_global = "hanif";
function global1(){
    // echo "$scope_global". "\n"; = eror
    // global $scope_global;// bisa juga menggunakan kata kunci global
}
global1();
echo "nama saya adalah : $scope_global\n";//bisa di akses di luar function

/////// contoh local scope //////
//local scope hanya bisa di akses da dalam function itu sendiri.
function local(){
    $local_scope = "Saya Adalah Inazuma";//ini adaalah local scope
    echo $local_scope. "\n";//hanya bisa di akses di dalam function itu sendiri
}
local();
// echo $local_scope. "\n";//jika di sini eror

/////// contoh static scope /////
//menggunakan kata kunci static saat pertama kali mendeklarasi funtion tersebut
function static1(){
    static $apa_aja = "nama kamu\n";//menggunakan kata kunci static
    echo $apa_aja;
}
static1();


//6
$nilaiSantri = [90, 85, 94, 77, 62, 88];
require_once "/program.php"
