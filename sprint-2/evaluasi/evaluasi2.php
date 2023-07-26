<?php
//1
echo "masukan nama siswa : ";
$siswa=ucwords(trim(fgets(STDIN)));
echo "masukan moto siswa : ";
$moto=(trim(fgets(STDIN)));
echo "masukan NIS siswa : ";
$NIS=(trim(fgets(STDIN)));
echo "====================================\n";
echo "nama siswa adalah : $siswa\n";
if(str_word_count($moto) < 3){
    echo "moto hidup terlalu pendek\n";
}else{
    echo "moto hidup siswa adalah : $moto \n";
}
if(!is_numeric($NIS) || strlen($NIS) > 6){
    echo "data tidak valid \n";
}else{
    echo "nomor induk siswa adalah : $NIS\n";
}

//2
echo "masukan karakter : "
$karakter=trim(fgets(STDIN));
$tes1 = substr($karater)


//3
$array=['tidak','semua','yang','tidak berhasil','itu','kegagalan'];
var_dump(implode(",",$array));


//4
$array1 = [5,26,79,4,63,22,17,9];
echo "urutan terkecil ke besar : ";
sort($array1);
foreach($array1 as $key => $val){
    echo "$val,";
}
echo "\n";
echo "Genap : ";
foreach($array1 as $genap){
    if($genap % 2 == 0 && $genap > 0){
        echo "$genap,";
    }
}
echo "\n";
echo "Ganjil : ";
foreach($array1 as $ganjil){
    if($ganjil % 2 == 1 && $ganjil > 0){
        echo "$ganjil,";
    }
}
echo "\n";

//5 ,6, 7
$data = [
    "id" => 582,
    "nama" => "pisang",
    "warna" => "kuning",
    "stok" => "51"
];
$data ["rasa"] = "manis";
unset($data["warna"]);
$data["stok"] = "32";
foreach($data as $k => $v){
    echo "$k : $v". "\n";
}