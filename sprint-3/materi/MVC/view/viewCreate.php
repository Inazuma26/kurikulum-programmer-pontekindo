<?php
include_once "../controllers/create.php";
include_once "../helper/input.php";


function viewCreat(){
    echo "masukan nama santri : ";
    $nama = input();
    creat($nama);
}