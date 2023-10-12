<?php
include_once "../model/data.php";
include_once "../controllers/read.php";


function viewRead(){
    global $santri;
    if(empty($santri)){
        echo "barang kosong\n";
    }else{
        echo "===== Data Santri =====\n";
        read();
    }
}