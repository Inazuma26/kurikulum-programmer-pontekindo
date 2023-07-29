<?php
include_once "../model/data.php";
function read(){
    global $santri;
    foreach ($santri as $no => $nama){
        echo "$no. $nama \n";
    }
}