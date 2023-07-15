<?php

// //tipe data array
// //array numerik -> indexnya berupa angka yang dimana dimulai dari anka 0

// $array = ["string", 321, true,false,null,-12.1];
// //var_dump($array)
// echo $array[0];
// echo PHP_EOL;

// // //array assosiatif -> index nya dapat kita atur sendiri
// $arrayAssoc = array(
//     "pertama" => "awaludin",
//     "kedua" => "akhirudin"
// );

// echo $arrayAssoc["pertama"];
// echo PHP_EOL;

// // //array di dalam array
// $hanif =array(
//     "id" => "hanif",
//     "nama" => "nur hanifa siddiq",
//     "age" => 30,
//     "address" => [

//         "city" => "pagaralam",
//         "country" => "indonesia"
//     ]
//     );

// echo $hanif["nama"];
// echo PHP_EOL;

// // //macam macam operator pada php
// // //operator aritmatika -> seperti matematika misal penjumlahan,pengurangan
// // //operand -> yang dioprasikan
// // //maka nanti operand dari aritmatika adalah tipe number

// // //penjumlahan -> +
// echo "penjumlahan :";
// echo 10 + 5;
// echo PHP_EOL;

// // //pengurangan -> -
// echo "pengurangan :";
// echo  10 - 5;
// echo PHP_EOL;

// // //perkalian -> *
// echo "perkalian :";
// echo 20 * 2;
// echo PHP_EOL;

// // //pembagian -> /
// echo "pembagian :";
// echo 45 / 5;
// echo PHP_EOL;

// // //pangkat -> **
// echo "pangkat :";
// echo 12 ** 4;
// echo "\n";

// // //sisah dari pembagian -> %
// echo "modulus :";
// echo 45 % 5;
// echo "\n";

// // //eperator penugasan
// // //titambah -> =+
// $angka1 = 2;
// $angka2 = 7;

// $angka1 += $angka2;
// echo $angka1;
// echo "\n";

// // //dikali
// $angka1 *=$angka1;
// echo $angka1;
// echo "\n";

// // // ambil input dari cli / terminal
// // // trim adalah fungsi bawaan php untuk menghapus spasi pada awal dan akhir data

// // $misal = "  hanif";
// // echo trim ($misal);
// // echo = "\n";

// //fgets adalah fungsi untuk mengambil inputan dari cli/terminal
// //STDIN adalah standar input -> tempat untuk menimpan data sebelum di tampilkan

// echo "--------luas persegi---------" . PHP_EOL;
// echo "ketikan sisi persegi :";
// $sisi = trim(fgets(STDIN));
// $luas = $sisi * $sisi;
// echo PHP_EOL;
// echo "luas = sisi * sisi \n 
// luas = $sisi * $sisi = $luas".PHP_EOL;

// echo PHP_EOL;
$students = array(
    array("John", "Doe", 20),
    array("Jane", "Smith", 22),
    array("Mike", "Johnson", 21)
);

// Mengakses elemen array di dalam array
echo $students[2][2];
echo "\n";
echo $students[0][1];
echo "\n";
echo $students[2][2];
echo "\n";