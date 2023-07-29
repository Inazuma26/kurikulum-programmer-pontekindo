<?php
include_once "../model/data.php";
include_once "../helper/input.php";
function delete(){
    global$santri;
    echo "data yang ingin di hapus : ";
    $delete = input();
    echo "anda akan menghapus $santri[$delete]\n";
    for($i = $delete; $i <count($santri); $i++){
        $santri[$i] = $santri[$i+1];
    }
    unset($santri[count($santri)]);
}