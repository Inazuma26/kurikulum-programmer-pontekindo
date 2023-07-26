<?php
//menghitung jumlah karakter dalam suatu string menggunakan function anonymous dengn inputan dinamis
echo "masukan karekter : ";
$string=trim(fgets(STDIN));
function menghitung_karakter($string,$closure){
    echo "jumlah karakter : ".$closure($string). "\n";
}
menghitung_karakter($string,function($karakter){return strlen($karakter);});


$count = function(){
    echo "masukan data : ";
    $input =trim(fgets(STDIN));
    echo "jumlah kata : ".strlen($input)."\n";
};
$count();


//membuat program pemisah antara nilai ganjil dengan nilai genap (yang positifnya saja) menggunakan fariable function dengan input statis saja
function ganjil_genap(...$angka){
    echo "angka genap : ";
    foreach ($angka as $genap){
        if($genap % 2 == 0 && $genap > 0){
            echo "$genap,";
        }
    }
    echo "\n";
    echo "angka ganjil : ";
    foreach ($angka as $ganjil){
        if($ganjil % 2 == 1 $ganjil > 0)
    }
}
$hasil "ganjil_genap";
$hasil (-2,-4,-1,-5,2,3,8,15). "\n";