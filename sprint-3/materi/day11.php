<?php
//arrow function

//contoh arrow function
$identitas = "wibu";
$arrow = fn($s) => "faqih seorang $identitas yang $s\n";
echo $arrow("sejati");


//menghitung luas persegi pakai arrow persegi
$s1=2;
$s2=2;
$arrow = fn($hasil) => "luas persegi dari $s1 dikali $s2 adalah $hasil \n";
echo $arrow(2*2);

$keterangan = "luas : ";
$luas = fn ($sisi) => $keterangan. $sisi*$sisi;
echo $luas(10). "\n";