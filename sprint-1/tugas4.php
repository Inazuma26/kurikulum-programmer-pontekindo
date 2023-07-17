<?php
do{
    echo "apakah anda ingin menyewa buku di perpus kami ?\n";
    echo "ketik iya jika ingin menyewa\n";
    echo "ketik tidak jika tidak ingin menyewa\n";
    echo "ketikan pilihan mu :";
    $menu=trim(fgets(STDIN));
    if($menu=="iya"){
        echo "masukan nama kamu :";
        $nama=trim(fgets(STDIN));
        echo "masukan nama buku yang ingin kamu sewa :";
        $buku=trim(fgets(STDIN));
        echo "batas hari sewa buku :";
        $batas=(int)trim(fgets(STDIN));
        echo "jumlah hari sewa buku :";
        $jumlah=(int)trim(fgets(STDIN));
        echo "harga sewa buku adalah, 1hari 10000";
        $harga=10000*$jumlah;
        echo "dan akan dikenakan denda jika lebih dari batas hari sewa buku!!!";
        $denda=$jumlah-$batas;
        echo PHP_EOL;
        echo "====== total pembayaran =====\n";
        echo "nama kamu : $nama\n";
        echo "nama buku : $buku\n";
        echo "batas hari sewa buku : $batas\n";
        echo "jumlah hari sewa buku : $jumlah\n";
        echo "harga sewa buku : $harga\n";
        switch($denda){
            case $denda <= 0;
            $biaya_denda = 0;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 1;
            $biaya_denda = 5000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 2;
            $biaya_denda = 10000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 3;
            $biaya_denda = 15000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 4;
            $biaya_denda = 20000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 5;
            $biaya_denda = 25000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 6;
            $biaya_denda = 30000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;

            case $denda <= 7;
            $biaya_denda = 35000;
            $total = $harga + $biaya_denda;
            echo "biaya denda : $biaya_denda\n";
            echo "total pembayaran : $harga + $biaya_denda : $total\n";
            break;
        }

    }elseif ($menu=="tidak"){
        echo "anda tidak menyewa buku\n";
        exit;
    }else {
        "tidak ada pilihan yang tersedia\n";
    }
    echo "balik ke menu penyewaan buku Y/N :";
    $balik=trim(fgets(STDIN));
}while ($balik=="Y");