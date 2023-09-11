<?php
class crud extends database{
    public function TampilData(){
        $sql = "SELECT id,nama ,jumlah FROM daftar";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    // function creat
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
    //funtion read
    public function detailData($data){
        try {
            $sql = "SELECT id,nama,jumlah FROM daftar WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id",$data);
            $stmt->execute();
            $stmt->bindColumn(1,$this->id);
            $stmt->bindColumn(2,$this->nama);
            $stmt->bindColumn(3,$this->jumlah);
            $stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()==1){
                return true;
            }else{
                return false;
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    //function update
    public function updateData($nama,$jumlah,$data){
        try {
            $sql = "UPDATE daftar SET nama=:nama, jumlah=:jumlah WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":nama",$nama);
            $stmt->bindParam(":jumlah",$jumlah);
            $stmt->bindParam(":id",$data);
            $stmt->execute();
            return true;
        }
        catch(PDOEXception $e){
            echo $e->getMessage();
            return false;
        }
    }
    //function delete
    public function delete($data){
        try {
            $sql = "DELETE FROM daftar WHERE id = :id ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(array("id"=>$data));
            return true;
        }
        catch(PDOEXception $e){
            echo $e->getMessage();
            return false;
        }
    }
}