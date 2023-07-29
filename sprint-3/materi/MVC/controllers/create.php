<?php

include_once "../model/data.php";
include_once "../helper/input.php";
function creat($nama){
    global $santri;
    $index = count($santri)+1;
    $santri[$index] = $nama;
}
