<?php 

//cara membuat class
class laptop{
    var  $brand;
    var  $price = 15.000;
    const DB = "MARIA DB";

    function __construct(){
        echo "hai saya adalah construct<br>";
    }

    function sayHello($milik,$c):string{
        return "ini laptop".$c($milik);
    }

    function hargaProduk(){
        $harga = number_format($this->price,0,0,'.');
        echo "Laptop Merek {$this->brand} <br> Harga Nya Rp.{$harga} <br>";
        echo "database yang digunakan adalah : ".self::DB;
    }

    function __destruct(){
        echo "hai saya adalah destruct<br>";
    }
}

//car membuar objeck
$lenovo = new laptop();
$lenovo->brand = "Lenovo";
$lenovo->price = 4500000;
$lenovo->hargaProduk();
echo "<br>";
echo laptop::DB;
// var_dump($lenovo);
// echo "Nama Brand : ".$lenovo->brand;
// echo "<br>";
// echo "Harga : ".$lenovo->price;
// echo "<br>";
// echo $lenovo->sayHello(" Hanif","strtoupper");
// echo "<br>";

// $asus = new laptop();
// $hp = new laptop();
// var_dump($asus,$hp,$lenovo);
// 
?>