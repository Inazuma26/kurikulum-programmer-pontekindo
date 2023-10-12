<?php

class Connection {
    const DB_HOST = "localhost";
    const DB_NAME = "indomedia";
    const DB_USER = "inazuma";
    const DB_PASSWORD = "";

    function __construct(){
        try{
            $this->pdo = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME."",self::DB_USER);        
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }      
}