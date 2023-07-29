<?php
include_once "../model/data.php";
include_once "../helper/input.php";

function update(){
    global $santri;
    echo "data yang ingin di edit : ";
    $edit = input();
    echo "anda akan mengedit $santri[$edit]\n";
    echo "masukan data baru : ";
    $update = input();
    $santri[$edit] = $update;
}