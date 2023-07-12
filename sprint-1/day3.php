<?php

//eperator perbandingan
//sama dengan -> == : nilai yang dibandingkan dengan nilai lainya itu memiliki nilai yang sama meskipun tipe data yang berbeda 
var_dump("1234"==1234);

// identik -> === : nilai dan tipe data harus sama agar outputnya true
var_dump(1234 === 1234);

//tidak sama dengan -> dengan simbol <> / != : berarti nilainya tidak sama maka hasilnya true
var_dump (21 != "2");

//nilai identik -> !== : nilai dan tipe data tidak sama maka hasilnya true
var_dump(100 !== "100");

//kurang dari -> <
var_dump(23 < 22);

//lebih dari -> >
var_dump(35 > 33);

//kurang dari sama dengan -> <=
var_dump(77<=77);

//lebih dari sama dengan -> >=
var_dump(44 >= 44);



//operator logika
// and -> && / and



//or -> || / or


//xor -> xor = kalau sama maka hasil nya false

//not -> ! : false


//operator Inkremen dan Deckremen
//post inkremen -> dikembalikan dulu variabel nya baru di tambah nilai 1
$angka = 22;
$angka++;
echo $angka .PHP_EOL;

//PRE inkremen  -> ditambah nilai 1 dulu baru dikembalikan ke var nya
$angka = 22;
++$angka;
echo $angka .PHP_EOL;
