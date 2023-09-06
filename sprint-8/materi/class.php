<?php 

//cara membuat class
class laptop{
    const DB_HOST = "localhost";
    const DB_NAME = "todolist";
    const DB_USER = "inazuma";
    const DB_PASSWD = '';
    const DB = "MARIA DB";
    var  ?string $brand;
    var  int $price = 15000;

    function __construct(){
        try{
            $pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."", "inazuma", "");

            if($pdo){
                echo "koneksi database berhasil";
            }
        }catch (PDOException $e){
            echo $e->getmessage();
        }
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
        echo "hai saya adalah destruct <br>";
    }
}

// cara membuar objeck
// $lenovo = new laptop();
// $lenovo->brand = "Lenovo";
// $lenovo->price = 4500000;
// $lenovo->hargaProduk();
// echo "<br>";
// echo laptop::DB;
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
class NamaProduk extends laptop {
    function index() {
        $index = "SELECT * FROM products";
        $statement = $this->$pdo->query($index);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
$laptop = new laptop();
echo "<br>";
$asus = new NamaProduk();
echo "<br>";
echo $asus->price."<br>";
