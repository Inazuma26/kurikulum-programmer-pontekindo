<?php
include_once "../Model/conn.php";

class Products extends Connection {
    var $satu;
    public $dua;
    protected $tiga = "tiga";
    private string $name;
    private $buah;

    public function dapatNama() { //getter
        return $this->buah;
    }

    public function masukNama($a){ //setter                
        $this->buah = $a;
    }

    function index(){
        $index = "SELECT * FROM indomedia";
        $statement = $this->pdo->query($index);
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    private function tampil3(){        
        echo $this->tiga;
    }

    function tampilTiga(){        
        self::tampil3();
    }
}

class Detail extends Products{
    public function tampilNama(){        
        
    }
}

$oreo = new Products();
$oreo->satu = "satu";
$oreo->dua = "dua";
// $oreo->tiga = "tiga";
echo $oreo->satu;
echo "<br>";
echo $oreo->dua;
echo "<br>";
// $oreo->tampilNama();
// echo $oreo->name;
// echo $oreo->tiga;
// $oreo->tampil3();
$detail = new Detail;
$detail->tampilTiga();
echo "<br>";
// $detail->tampilNama();
// $oreo->name = "Hanif";
// echo $oreo->name;

// $oreo->buah = "Pepaya";
$oreo->masukNama("Pepaya");
echo $oreo->dapatNama();