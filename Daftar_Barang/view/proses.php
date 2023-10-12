<?php
include_once "../controller/conn.php";
use Data\{Database, Barang};



$barang = new Barang();
$aksi = $_GET["aksi"];

if($aksi == "tambah"){
    //Tambah Data
    $barang->TambahData($_POST['nama'],$_POST['jumlah']);
}
?>