<?php   
//  foreach -> perulangan khusus untuk menampilkan data array

$array1 = ["Danu", "Dimas", "Faqih", "Hafidz", "Hanif", "Syifa", "Fandy"];
// var_dump(count($array1));
// echo $array1[2];

// for ($i = 2; $i < 6; $i++) {
//         echo "$no. ". $array1[$i].PHP_EOL;
//         $no++;
// }

foreach ($array1 as $k => $val) {
    echo "$k. ".$val .PHP_EOL;
}


// $array = [
//     "Danu" => [
//         "Nama" => "Danu",
//         "Umur" => 17,
//         "TTL" => "Jambi, 9 Oktober 2005",
//     ],
//     "Dimas" => [
//         "Nama" => "Dimas",
//         "Umur" => 20,
//         "TTL" => "Baturaja, 1 Desember 2002",
//     ],
//     "Faqih" => [
//         "Nama" => "Faqih",
//         "Umur" => 17,
//         "TTL" => "Yogyakarta, 31 Oktober 2005",
//     ],
//     "Hafidz" => [
//         "Nama" => "Hafidz",
//         "Umur" => 19,
//         "TTL" => "Pontianak, 19 Juni 2004",
//     ],
//     "Hanif" => [
//         "Nama" => "Hanif",
//         "Umur" => 17,
//         "TTL" => "Pagar Alam, 26 Oktober 2005",
//     ],
//     "Syifa" => [
//         "Nama" => "Syifa",
//         "Umur" => 22,
//         "TTL" => "Surakarta, 25 April 2001",
//     ],
//     "Fandy" => [
//         "Nama" => "Fandy",
//         "Umur" => 23,
//         "TTL" => "Sukoharjo, 10 Mei 2000",
//     ],
// ];

// // echo $array["hanif"]["Nama"].PHP_EOL;

// $no = 1;
// foreach ($array as $key => $value) {
//     echo "$no. $key\n";
//     foreach ($value as $key1 => $value1) {
//         echo "$key1 : " . PHP_EOL;
//     }
//     $no++;
// }