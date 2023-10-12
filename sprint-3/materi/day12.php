<?php
//buat program menghitung keliling persegi pakai arrow function sebagai argument pakai variable luar dari function biasa

$menghitung="keliling : ";
$keliling = fn($sisi) => $menghitung. $sisi + $sisi + $sisi + $sisi;
echo $keliling (5). "\n";

// echo "SISI : ";
// function kililing($keliling){
    // echo "SISI : ";
    // $argumen=trim(fgets(STDIN));
    // echo
// }
// keliling(fn($sisi)=> 4*$sisi);


//callback function
function Naruto($cita,callable $jadi_uppercase):string{
    $hasilnya = call_user_func($jadi_uppercase, $cita);
    return "saya akan menjadi ". $hasilnya. "\n";
}
echo Naruto("hokage", "strtoupper");

//recursive function 
function faktorial($angka){
    if($angka==1){
        return 1;
    }else{
        return $angka * faktorial($angka - 1). "\n";
    }
}
echo faktorial(8);

//is_string

// konsep MVC : Model, View, Controller

//model : data ang akan diolah oleh controller
//view : data yang akan ddi tampilkan oleh controller
//controller : fungsi yang akan di jalankan untuk manipulasi suatu data
