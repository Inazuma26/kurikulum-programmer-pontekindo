<?php
class crud extends database{
    public function TampilData(){
        $sql = "SELECT id,pasien ,bpjs, poliklinik, dokter FROM klinik";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    // function creat
    public function insertData($pasien,$bpjs,$poliklinik,$dokter){
        try{
            $pasien = htmlspecialchars($pasien);
            $bpjs = htmlspecialchars($bpjs);
            $poliklinik = htmlspecialchars($poliklinik);
            $dokter = htmlspecialchars($dokter);

            $sql = "INSERT INTO klinik (pasien,bpjs,poliklinik,dokter) VALUES (:pasien, :bpjs, :poliklinik, :dokter)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":pasien",$pasien);
            $stmt->bindParam(":bpjs",$bpjs);
            $stmt->bindParam(":poliklinik",$poliklinik);
            $stmt->bindParam(":dokter",$dokter);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    //function read
    public function detailData($data){
        try {
            $sql = "SELECT id,pasien ,bpjs, poliklinik, dokter FROM klinik WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id",$data);
            $stmt->execute();
            $stmt->bindColumn(1,$this->id);
            $stmt->bindColumn(2,$this->pasien);
            $stmt->bindColumn(3,$this->bpjs);
            $stmt->bindColumn(4,$this->poliklinik);
            $stmt->bindColumn(5,$this->dokter);
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
    public function updateData($pasien,$bpjs,$poliklinik,$dokter,$data ){
        try {
            $sql = "UPDATE klinik SET pasien=:pasien, bpjs=:bpjs, poliklinik=:poliklinik, dokter=:dokter WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":pasien",$pasien);
            $stmt->bindParam(":bpjs",$bpjs);
            $stmt->bindParam(":poliklinik",$poliklinik);
            $stmt->bindParam(":dokter",$dokter);
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
            $sql = "DELETE FROM klinik WHERE id = :id ";
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