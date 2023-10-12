<?php
//1
echo "masukan nama produk : ";
$nama=strtoupper(trim(fgets(STDIN)));
echo "masukan deskripsi produk : ";
$deskripsi=trim(fgets(STDIN));
echo "masukan kode produksi : ";
$kode=trim(fgets(STDIN));
echo "nama produk adalah : $nama\n";
if( str_word_count($deskripsi) > 4){
    echo "deskripsi terlalu panjang\n";
}else{
    echo "deskripsi : $deskripsi\n";
}
if(strlen($kode) > 8 || !is_numeric($kode)){
    echo "input invalid\n";
}else{ 
    echo "kode produksi : $kode\n";
}


//2
echo "Masukkan Kode Item: ";
$item = strtoupper(trim(fgets(STDIN)));
$kode2 = substr($item,0,2); //index 0 ambil 2 karakter // karakter no 1-2
$kode1 = substr($item,0,1); // index 0 ambil 1 karakter // karakter no 1
$kode12 = substr($item,1,1); // index 1 ambil 1 karakter // karakter no 2
if(is_numeric($kode2) && $kode2 < 50){
    echo "Item Rare\n";
}elseif(is_numeric($kode2) && $kode2 >= 50){
    echo "Item Super Rare\n";
}elseif($kode1 == 'A' || $kode1 == 'B' || $kode1 == 'C'){
    echo "Item Unique\n";
}elseif($kode1 == 'D' || $kode1 == 'E' || $kode1 == 'F'){
    echo "Item Legendary\n";
}elseif(is_numeric($kode1) && is_string($kode12) || is_string($kode1) && is_numeric($kode12)){
    echo "Item Ultra Rare\n";
}else{
    echo "Item Common\n";
}


//3
$string='Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab';
var_dump (explode("&",$string));


//4
$array = [-2,4,-18,9,0,21,-5];
echo "urutan besar ke kecil : ";
rsort($array);
foreach($array as $k => $val){
    echo "$val";
}
echo PHP_EOL;
echo "negatif : ";
sort($array);
foreach($array as $k1 => $val1){
    if ($val1 < 0){
        echo "$val1,";
    }
}
echo "\n";
echo "positif : ";
sort($array);
foreach($array as $k2 => $val2){
    if ($val2 > 0){
        echo "$val2,";
    }
}
echo "\n";


// 5, 6, 7.
$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
];
$data["nomor_telepon"] = "082182018305";
unset($data["pasword_confirmation"]);
$data["username"] = "hanif";
foreach ($data as $key => $value){
    echo "$key : $value \n";
}