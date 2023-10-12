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
}