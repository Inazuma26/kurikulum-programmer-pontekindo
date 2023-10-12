<?php

echo "---------menghitung jajar genjang---------".PHP_EOL;
echo "ketikan alas jajar genjang :";
$alas = trim(fgets(STDIN));
echo "ketikan tinggi jajar genjang :";
$tinggi = trim(fgets(STDIN));
$luas = $alas * $tinggi ;
echo "luas = alas * tinggi
luas = $alas * $tinggi = $luas";
echo PHP_EOL;
echo "ketikan sisi_1 jajar genjang :";
$sisi_1 = trim(fgets(STDIN));
echo "ketikam sisi_2 jajar genjang :";
$sisi_2 = trim(fgets(STDIN));
$keliling = 2 * ($sisi_1 + $sisi_2);
echo "keliling = 2 * (sisi_1 + sisi_2)
keliling = 2 * ($sisi_1 + $sisi_2 ) = $keliling".PHP_EOL;
echo PHP_EOL;

echo "--------menghitung belah ketupat-------".PHP_EOL;
echo "ketikan diagonal1 belah ketupat :";
$diagonal1 = trim(fgets(STDIN));
echo "ketikan diagonal2 belah ketupat :";
$diagonal2 = trim(fgets(STDIN));
$luas = $diagonal1 * $diagonal2 /2;
echo "luas = diagonal1 * diagonal2 /2
luas = $diagonal1 * $diagonal2  /2= $luas".PHP_EOL;
echo "ketikan sisi belah ketupat :";
$sisi = trim(fgets(STDIN));
$keliling = 4 * $sisi;
echo "keliling = 4 * sisi 
keliling = 4 * $sisi = $keliling".PHP_EOL;
echo PHP_EOL;

echo "---------menghitung layangan--------".PHP_EOL;
echo "ketikan alas layangan :";
$alas = trim(fgets(STDIN));
echo "ketikan tinggi layangan :";
$tinggi = trim(fgets(STDIN));
$luas = (1/2) * $alas *$tinggi;
echo "luas = (1/2) * alas * tinggi
luas = (1/2) * $alas * $tinggi = $luas".PHP_EOL;
echo "ketikan sisi_1 lingkaran :";
$sisi_1 = trim(fgets(STDIN));
echo "ketikan sisi_2 lingkaran :";
$sisi_2 = trim(fgets(STDIN));
echo "ketikan sisi_3 lingkaran :";
$sisi_3 = trim(fgets(STDIN));
echo "ketikan sisi_4 lingkaran :";
$sisi_4 = trim(fgets(STDIN));
$keliling = $sisi_1 + $sisi_2 + $sisi_3 + $sisi_4;
echo "keliling = sisi_1 + sisi_2 + sisi_3 + sisi_4
keliling = $sisi_1 + $sisi_2 + $sisi_3 + $sisi_4 = $keliling".PHP_EOL;
echo PHP_EOL;

echo "--------menghitung trapesium---------".PHP_EOL;
echo "ketikan sisi sejajar 1 : ";
$sisi1 = trim(fgets(STDIN));
echo "ketikan sisi sejajar 2 : ";
$sisi2 = trim(fgets(STDIN));
echo "ketikan tinggi trapesium :";
$tinggi = trim(fgets(STDIN));
$luas = (1/2) * ($sisi1 + $sisi2) * $tinggi ;
echo "luas = (1/2) * (sisi1 + sisi2) * tinggi
luas = (1/2) * ($sisi1 + $sisi2) * $tinggi = $luas".PHP_EOL;
echo "ketikan sisi_1 lingkaran :";
$sisi_1 = trim(fgets(STDIN));
echo "ketikan sisi_2 lingkaran :";
$sisi_2 = trim(fgets(STDIN));
echo "ketikan sisi_3 lingkaran :";
$sisi_3 = trim(fgets(STDIN));
echo "ketikan sisi_4 lingkaran :";
$sisi_4 = trim(fgets(STDIN));
$keliling = $sisi_1 + $sisi_2 + $sisi_3 + $sisi_4;
echo "keliling = sisi_1 + sisi_2 + sisi_3 + sisi_4
keliling = $sisi_1 + $sisi_2 + $sisi_3 + $sisi_4 = $keliling".PHP_EOL;
echo PHP_EOL;
