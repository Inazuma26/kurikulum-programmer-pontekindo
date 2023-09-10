<?php
class crud extends database{
    public function TampilData(){
        $sql = "SELECT id,nama ,jumlah FROM daftar";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    public function insertData($nama,$jumlah){
        try{
            $sql = "INSERT INTO daftar (nama,jumlah) VALUES (:nama, :jumlah)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":nama",$nama);
            $stmt->bindParam(":jumlah",$jumlah);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}