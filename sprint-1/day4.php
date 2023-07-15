<?php 
// expresion : nila/value

//statmen : klaimat kode hingga akhir titik koma

//block : code yang berada di dalam {} / kurung kurawal

//percabangan  -> if alse
// echo "=====================================\n";
// echo "=======meta data nilai santri========\n";
// echo "=====================================\n";
// echo "masukan nama santri :";
// $nama = trim(fgets(STDIN));
// echo "masukan nilai santri :";
// $nilai = trim(fgets(STDIN));
// echo "nilai santri :$nama\n";
// echo "nila santri : $nilai dengan predikat :";
// $nilai = 70;
// if($nilai == 100){
//     echo "perfect";
// }else if($nilai >= 80){
//     echo "excelent";
//     echo "\n";
// }else if ($nilai >= 60){
//     echo "good";
//     echo "\n";
// }else  {
//     echo "not passed";
//     echo "\n";
// }
// echo PHP_EOL;

// echo "masukan nama konsumen :";
// $konsumen = trim(fgets(STDIN));
// echo "masukan nama barang :";
// $nama = trim(fgets(STDIN));
// echo "masukan harga barang :";
// $harga = trim(fgets(STDIN));
// echo "nama barang : $nama\n";
// echo "harga barang : $harga dengan bonus :";
// $harga = 70;
// if ($harga == 100){
//     echo "gelas";
//     echo "\n";
// }else if($harga >= 80){
//     echo "sendok";
//     echo "\n";
// }else if ($harga >= 50){
//     echo "permen";
//     echo "\n";
// }else {
//     echo "tidak ada bonus";
//     echo "\n";
// }

//switch mirip seperti else if , namun sintax nya lebih simpel
// $nilai = 110;
// switch($nilai){
//     case $nilai >= 100 ;
//     echo "perfect\n";
//     break;
//     case $nilai >= 80;
//     echo "good\n";
//     break;
//     default:
//     echo "not passed\n";
//     break; 
// }

echo "========================================\n";
echo "=============== sewa buku ==============\n";
echo "========================================\n";
echo "ketikan nama kamu :";
$nama = trim(fgets(STDIN));
echo "nama buku : ";
$buku = trim(fgets(STDIN));
echo "batas hari sewa buku :";
$batas = (int) trim(fgets(STDIN));
echo "jumlah hari sewa buku :";
$hari = (int) trim(fgets(STDIN));
$harga = 5000 * $hari;
$denda = $hari-$batas;
echo "=========== total pembayaran ============\n";
echo "nama kamu : $nama\n";
echo "nama buku : $buku\n";
echo "batas hari sewa buku : $batas\n";
echo "jumlah hari sewa buku : $hari\n";
echo "harga sewa buku : $harga\n";
switch($denda){
    case $denda <= 1;
    $biaya_denda = 10000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 2;
    $biaya_denda = 20000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 3;
    $biaya_denda = 30000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 4;
    $biaya_denda = 40000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 5;
    $biaya_denda = 50000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 6;
    $biaya_denda = 60000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;

    case $denda <= 7;
    $biaya_denda = 70000;
    $total = $harga + $biaya_denda;
    echo "biaya denda : $biaya_denda\n";
    echo "total pembayaran : $harga + $biaya_denda : $total\n";
    break;
}
