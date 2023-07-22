<?php
echo "masukan nama produk : ";
$nama=strtoupper(trim(fgets(STDIN)));
echo "masukan deskripsi produk : ";
$deskripsi=trim(fgets(STDIN));
echo "masukan kode produksi : ";
$kode=(int)trim(fgets(STDIN));
echo "nama produk adalah : $nama\n";
if( str_word_count($deskripsi) > 4){
    echo "deskripsi terlalu panjang\n";
}else{
    echo "deskripsi : $deskripsi\n";
}
if(strlen($kode) > 8){
    echo "inpud invalid\n";
}else{
    echo "kode produksi : $kode\n";
}

$string='Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab'. "\n";
var_dump (explode("&",$string));

$array = [-2,4,-18,9,0,21,-5];
arsort($array);
var_dump($array);
if($array < 0){
    echo "bilangan negatif nya : $array\n";
}


$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
];
array_push($data,"nomor_telepon");
foreach ($data as $k => $val){
    echo "$k. ".$val.PHP_EOL;
}
