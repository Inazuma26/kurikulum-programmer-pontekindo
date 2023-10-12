<?php 
//koneksi
$conn = mysqli_connect("localhost","inazuma","","todolist"); 

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    $des = htmlspecialchars($data["deskription"]);
    $per = htmlspecialchars($data["periority"]);

    $query = "INSERT INTO todo (priority,deskription) VALUES ('$per','$des')";
    mysqli_query($conn,$query);

return mysqli_affected_rows($conn);  

}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM todo WHERE id =$id");
    return mysqli_affected_rows($conn); 
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $des = htmlspecialchars($data["deskription"]);
    $per = htmlspecialchars($data["priority"]);

    $query = "UPDATE todo SET deskription='$des', priority='$per'WHERE id='$id'";
    mysqli_query($conn,$query);

return mysqli_affected_rows($conn);  
}