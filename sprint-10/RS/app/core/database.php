<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $pdo;
    private $statment;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=UTF8";
        try
        {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->statment = $this->pdo->prepare($query);
    }

    public function execute()
    {
        $this->statment->execute();
    }
}