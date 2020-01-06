<?php
require_once 'koneksi.php';
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $DefaultId = 0;
    $nip  = $_POST['nip'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jabatan = $_POST['jabatan'];
    $bidang = $_POST['bidang'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    //  $ImageName = $_POST['image_tag'];
    $InsertSQL = "INSERT INTO pegawai (nip, nama, tgl_lahir, jabatan, bidang, gender, alamat, kota) values('$nip', '$nama', '$tgl_lahir', '$jabatan', '$jabatan', '$gender', '$alamat', '$kota')";
    if(mysqli_query($conn, $InsertSQL)){
        // file_put_contents($ImagePath,base64_decode($ImageData));
        echo json_encode(['code'=>200]);
    }
    else{
        echo json_encode(['code'=>500]);
    }
    mysqli_close($conn);
}
else
{
    echo json_encode(404);
}
 
?>