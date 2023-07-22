<?php
echo "list dan harga barang bangunan yang ada 
- batu : 30000
- semen : 20000
- pasir : 40000
- keramik : 50000
- besi : 10000\n";

echo "menghitung total belanjaan\n";
echo "masukan nama barang :";
$barang1 = trim(fgets(STDIN));
echo "masukan nama barang :";
$barang2 = trim(fgets(STDIN));
echo "masukan nama barang :";
$barang3 = trim(fgets(STDIN));
$batu = 30000;
$semen = 20000;
$pasir = 40000;
$keramik = 50000;
$besi = 10000;
$korting1 = 1000;
$korting2 = 2000;
$korting3 = 3000;
$korting4 = 4000;
if($barang1=="batu"){
    echo "batu : $batu\n";
    echo "mendapat korting :$korting2 \n";
    $total =$batu -= $korting2;
    echo "total = 30000 - $korting2 = $total";
}elseif($barang1=="semen"){
    echo "semen : $semen\n";
    echo "menfapat korting:$korting1\n";
    $total=$semen-=$korting1;
    echo "total : 20000 - $korting1 : $total";
}elseif($barang1=="pasir"){
    echo "pasir : $pasir\n";
    echo "mendapatkan korting : $korting3\n";
    $total =$pasir-=$korting3;
    echo "total : 40000 - $korting3 : $total";
}elseif ($barang1=="keramik"){
    echo "keramik : $keramik\n";
    echo "mendapat korting : $korting4\n";
    $total=$keramik-=$korting4;
    echo "total : 50000 - $korting4 : $total";
}elseif ($barang1=="besi"){
    echo "tidak mendapatkan korting :(\n";
    echo "besi : $besi";
    $barang1=$besi;
    echo "\n";
}echo PHP_EOL;
if($barang2=="batu"){
    echo "batu : $batu\n";
    echo "mendapat korting :$korting2 \n";
    $total =$batu -= $korting2;
    echo "total = 30000 - $korting2 = $total";
}elseif($barang2=="semen"){
    echo "semen : $semen\n";
    echo "menfapat korting:$korting1\n";
    $total=$semen-=$korting1;
    echo "total : 20000 - $korting1 : $total";
}elseif($barang2=="pasir"){
    echo "pasir : $pasir\n";
    echo "mendapatkan korting : $korting3\n";
    $total =$pasir-=$korting3;
    echo "total : 40000 - $korting3 : $total";
}elseif ($barang2=="keramik"){
    echo "keramik : $keramik\n";
    echo "mendapat korting : $korting4\n";
    $total=$keramik-=$korting4;
    echo "total : 50000 - $korting4 : $total";
}elseif ($barang2=="besi"){
    echo "tidak mendapatkan korting :(\n";
    echo "besi : $besi";
    $barang2=$besi;
    echo PHP_EOL;;
}echo "\n";
if($barang3=="batu"){
    echo "batu : $batu\n";
    echo "mendapat korting :$korting2 \n";
    $total =$batu -= $korting2;
    echo "total = 30000 - $korting2 = $total";
}elseif($barang3=="semen"){
    echo "semen : $semen\n";
    echo "menfapat korting:$korting1\n";
    $total=$semen-=$korting1;
    echo "total : 20000 - $korting1 : $total";
}elseif($barang3=="pasir"){
    echo "pasir : $pasir\n";
    echo "mendapatkan korting : $korting3\n";
    $total =$pasir-=$korting3;
    echo "total : 40000 - $korting3 : $total";
}elseif ($barang3=="keramik"){
    echo "keramik : $keramik\n";
    echo "mendapat korting : $korting4\n";
    $total=$keramik-=$korting4;
    echo "total : 50000 - $korting4 : $total";
}elseif ($barang3=="besi"){
    echo "tidak mendapatkan korting :(\n";
    echo "besi : $besi";
    $barang3=$besi;
    echo PHP_EOL;
}echo "\n";