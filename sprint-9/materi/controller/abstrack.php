<?php

abstract class Kendaraan{
    static public $string = "Kendaraan";
    abstract function berjalan();
    abstract function gas();
}

class Mobil extends Kendaraan{
    
    static public $string = "Mobil";
    public function gas(){
        echo self::$string;
        echo parent::$string;
    }
    
    public function berjalan(){
        echo "berjalan";
    }
}

class Motor extends Kendaraan{
    public function berjalan(){
        echo "berjalan";
    }

    function gas();
}

// $abstract = new Mobil();
// $abstract->gas();
$mobil = new Mobil();
$mobil->gas();
echo "<br>";
echo kendaraan::$string;
echo "<br>";
Motor::berjalan();
