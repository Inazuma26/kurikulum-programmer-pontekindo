<?php

//CRUD 
// $array=[];
// while (true){
// echo "masukan data : ";
// $data = trim(fgets(STDIN));
// $array[count($array)+1] = $data;
// foreach($array as $key => $data){
    // echo "$key.".$data.PHP_EOL;
// }
// }

// echo "masukan data : ";
// $value = trim(fgets(STDIN));
// $array[count($array)+1]=$value;
// foreach($array as $key => $value){
    // echo "$key. $value". "\n";
// }
// echo "edit data y/n";
// $edit=trim(fgets(STDIN));
// if ($edit=="y"){
    // echo "masukan data yang akan di edit :";
    // $edit=trim(fgets(STDIN));
    // echo "anda akan mengedit $array[$edit]\n";
    // echo "masukan data baru :";
    // $update=trim(fgets(STDIN));
    // $array[$edit]=$update;
// }

//function
function sayHello(){
    echo "hello function\n";
}
sayHello();
sayHello();

//menggunakan pearmeter
function notif($nama){//parameter -> variable yang akan digunakan dalam function
    echo "$nama telah terdaftar\n";
}
notif("hanif");//value -> yang akan dikirimkan ke parameter

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