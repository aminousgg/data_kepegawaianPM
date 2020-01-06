<?php

require_once 'koneksi.php';
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    
    $sql = "DELETE FROM pegawai WHERE id = '$id'";
    
    //Menghapus Nilai pada Database
    if(mysqli_query($conn,$sql)){
        echo json_encode(['code'=>200]);
    }else{
        echo json_encode(['code'=>500]);
    }
    mysqli_close($conn);
}
else{
    echo json_encode(['code'=>404]);
}
?>
