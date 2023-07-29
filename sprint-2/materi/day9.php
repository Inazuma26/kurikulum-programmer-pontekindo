<?php

// CRUD : Create, Read, Update, Delete
// 
$array = [];
do{
    //create
    echo "Masukkan Data : ";
    $input = trim(fgets(STDIN));
    $index = count($array)+1;
    $array[$index] = $input;
    foreach ($array as $key => $value) {
        echo "$key. $value \n";    
    }
    echo "Edit data (y/n) ? ";
    $e = trim(fgets(STDIN));
    if($e == "y"){
        //update
        echo "Pilih Data Yang Ingin Diedit : ";
        $edit = trim(fgets(STDIN));
        echo "Anda akan mengedit $array[$edit]\n";
        echo "Masukkan Data Baru : ";
        $update = trim(fgets(STDIN));
        $array[$edit] = $update;
    }
    echo "Hapus data (y/n) ? ";
    $h = trim(fgets(STDIN));
    if($h == "y"){
        //delete
        //menimpa data array terlebih dahulu 
        //barulah nanti akan dihapus data yang bagian akhir
        echo "Pilih Data Yang Ingin Dihapus : ";
        $delete = trim(fgets(STDIN));
        echo "Anda akan mengdelete $array[$delete]\n";
        for($i = $delete; $i < count($array); $i++){
            $array[$i] = $array[$i+1];           
        }
        unset($array[count($array)]);
    }
}while(true);

// function
function sayHello(){
    echo "hello function\n";
}
sayHello();
sayHello();

//menggunakan pearmeter
function notif($nama){//parameter -> variable yang akan digunakan dalam function
    echo "$nama telah terdaftar\n";
}
notif("hanif");// argumen ->value yang akan dikirimkan ke parameter

//menggunakan  kyword global
$dolar="hanif";
function notifikasi(){
    global $dolar;
    echo "$dolar telah terdaftar\n";
}
notifikasi();

//defult parameter
function sayhi($n,$greeting="good morning"){
    echo "hello $n! $greeting\n";
}
sayhi("hanif");

//type declaration
function harusAngka(int $angka){
    echo $angka . "\n";
}
harusAngka(2);

function sum(int $a, int $b ){
    $t = $a + $b;
    echo "$a + $b = $t\n";
}
sum("100","100");

//fariable line argument
function total(...$jumlah){
    $total = 0;
    foreach ($jumlah as $value){
        $total += $value;
    }

    echo "total : $total\n";
}
total(1,2,3,4,5,6);

function listname(...$list){
    foreach ($list as $val){
        echo $val. "\n";
    }
}
listname("danu","faqih","syfa");


//return
function sun(int $first, int $second):int{
    $t = $first + $second;
    return $t;
}
echo sun(100,100). "\n";

//buat function dengan parameternya  variable-leght-argument yang mana      function akan mengembalikan nilai array dengan nama variable  nya 'siswa'
//lalu ubah variable siswa menjadi string
//tampilkan menggunakn echo
function namaSiswa(...$siswa){
    return $siswa;
}
echo implode("\n",namaSiswa("hanif","faqih","danu","dimas","syfa","hafizt")). "\n"; 
