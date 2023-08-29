<?php 

//cara membuat class
class laptop{
    var  $brand;
    var  $price = 15.000;

    function sayHello($milik,$c):string{
        return "ini laptop".$c($milik);
    }
}

//car membuar objeck
$lenovo = new laptop();
$lenovo->brand = NULL;
$lenovo->price = 4500000;
// var_dump($lenovo);
echo "Nama Brand : ".$lenovo->brand;
echo "<br>";
echo "Harga : ".$lenovo->price;
echo "<br>";
echo $lenovo->sayHello(" Hanif","strtoupper");
echo "<br>";

$asus = new laptop();
$hp = new laptop();
var_dump($asus,$hp,$lenovo);
?>