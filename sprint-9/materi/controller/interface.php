<?php

interface Kendaraan{
    public function gas();
}

class Mobil implements Kendaraan{
    public function berjalan(){
        echo "Mobil Berjalan";
    }

    public function gas(){
        echo "Mobil NgeGas";
    }

    public function apa(){
        echo "Mobil Apa";
    }
}

$mobil = new Mobil();
$mobil->apa();
echo "<br>";
$mobil->gas();
echo "<br>";
$mobil->berjalan();
