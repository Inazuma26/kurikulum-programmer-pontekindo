<?php

echo "--------menghitung persegi panjang--------". PHP_EOL;
echo "ketikan panjang persegi panjang :";
$panjang = trim(fgets(STDIN));
echo "ketikan lebar persegi panjang :";
$lebar = trim(fgets(STDIN));
$luas = $panjang * $lebar;
echo "luas = panjang * lebar 
luas = $panjang * $lebar = $luas ";
echo PHP_EOL;
$keliling = $panjang + $lebar;
echo "keliling = panjang + lebar 
keliling = $panjang + $lebar =$keliling".PHP_EOL;
echo PHP_EOL;

echo "--------menghitung segitiga-------". PHP_EOL;
echo "ketikan alas segitiga ;";
$alas  = trim(fgets(STDIN));
echo "ketikan tinggi segitiga :";
$tinggi = trim(fgets(STDIN));
$luas = 1/2 * $alas * $tinggi;
echo "luas = (1/2) * alas * tinggi
luas =(1/2) * $alas * $tinggi = $luas".PHP_EOL;
echo "ketikan sisi_a segitiga :";
$sisi_a = trim(fgets(STDIN));
echo "ketikan sisi_b segitiga :";
$sisi_b = trim(fgets(STDIN));
echo "ketikan sisi_c segitiga :";
$sisi_c = trim(fgets(STDIN));
$keliling = $sisi_a + $sisi_b + $sisi_c;
echo "keliling = sisi_a + sisi_b + sisi_c
keliling = $sisi_a + $sisi_b + $sisi_c = $keliling".PHP_EOL;
echo PHP_EOL;

echo "--------menghitung lingkaran---------".PHP_EOL;
echo "ketikan jari jari lingkaran :";
$jari_jari =trim(fgets(STDIN));
$luas = Pi() * $jari_jari;
echo "luas = pi() * jari_jari
luas =pi() * $jari_jari = $luas".PHP_EOL;
echo "ketikan jari jari lingkaran :";
$jari_jari  =trim(fgets(STDIN));
$keliling = 2 * pi() * $jari_jari;
echo "keliling = 2 * pi() * jari_jari
keliling = 2 * pi() * $jari_jari = $keliling".PHP_EOL;
