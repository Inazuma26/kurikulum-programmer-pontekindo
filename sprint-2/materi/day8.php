<?php
//buatlah sebuah inputan dinamis akan memunculkan nama setiap kata nya akan kapital lalu ditambah ada  prodak deskripsi harga dibawah harga harus int lalu ada format nya 

// echo "masukan nama prodak :";
// $prodak=trim(fgets(STDIN));
// echo "nama prodak :" ;
// echo $prodak. "\n";
// $prodak="barang langkah di indo\n";
// echo ucwords($prodak);
// $deskripsi="semua bisa pakai peci ini\n";
// echo ucwords($deskripsi);
// $harga=1000_000;
// echo "Rp".number_format($harga,0,"", ".");
// echo PHP_EOL;
// balik:
// echo "masukana nama prodak :";
// $prodak=ucwords(strtolower( trim(fgets(STDIN))));
// echo "masukan deskripsi produk :";
// $deskripsi=ucwords(strtolower( trim(fgets(STDIN))));
// harga:
// echo "masukan harga produk :";
// $harga=trim(fgets(STDIN));
// echo PHP_EOL;
// echo PHP_EOL;
// echo PHP_EOL;

// if (is_numeric ($prodak) || is_numeric($deskripsi)){
//     echo "masukan input yang benar\n";
//     goto balik;
// }

// echo "nama prodak : $prodak\n";
// echo "deskeripsi : $deskripsi\n";
// if (is_numeric ($harga)){
//     $harga=number_format($harga,0,"",".");
//     echo "harga prodak : RP.$harga\n";
// }else{
//     echo "masukan inputan yang benar\n";
//     goto harga;
// }

//manipulasi array
$array = ["luffy", "ace", "sabo", "garp", "dragon"];
$array1 = [
    "garp"=>"luffy",
    "roger"=>"ace",
    "dragon"=>"sabo"
];
echo implode("-", $array1). "\n";

$jankenpon = ['batu','kertas','gunting'];
shuffle($jankenpon);
echo $jankenpon[0];
echo "\n";