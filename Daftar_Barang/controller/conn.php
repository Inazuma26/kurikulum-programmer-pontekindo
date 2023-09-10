<?php
namespace Data {

    use PDO;
    const AUTHOR = "inazuma";

    function sayHi(){
        echo "Hi My name is " . AUTHOR;
    }

    class Database {
        const DB_HOST = "localhost";
        const DB_NAME = "daftarbarang";   
        const DB_USER = "inazuma";
        const DB_PASSWORD = "";

        var $pdo;
    
        public function __construct(){
            try{
                $this->pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."",self::DB_USER,self::DB_PASSWORD);        
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }      
    }
    
    class Barang extends Database {
        function index(){
            $index = "SELECT * FROM daftar";
            $statement = $this->pdo->query($index);
            $products = $statement->fetchAll(PDO::FETCH_OBJ);
            return $products;
        }
        public function TambahData($nama,$jumlah){
            try{
                $index = "INSERT INTO daftar (nama,jumlah) VALUES (:nama,:jumlah)";
                $statement->bindParam(":nama",$nama);
                $statement->bindParam(":jumlah",$jumlah);
                $statement->execute();
                return true;
            }
            catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
}