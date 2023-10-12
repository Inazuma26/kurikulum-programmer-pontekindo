<?php
//procedural
// $conn = mysqli_connect("localhost","inazuma","","market");

// if (mysqli_connect_errno()){
//     echo "koneksi database gagal : " . mysqli_connect_error();
// }

// echo "koneksi database berhasil";


//object orientid
// $mysqli = new mysqli("localhost","inazuma","","market");

// if($mysqli -> connect_errno){
//     echo "koneksi database gagal : " . $mysqli->connect_error;
// }

echo "koneksi berhasil. Host Info : ". mysqli_get_host_info($mysqli)



//OOP - PDO
// try{
//     $pdo = new PDO("mysql:host=localhost; dbname=mark","inazuma","");

//     if($pdo){
//         echo "koneksi database beehasil";
//     }

// }catch(PDOException $e){
//     echo $e->getmessage();
// }




?>

