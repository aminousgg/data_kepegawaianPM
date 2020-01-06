<?php
require_once "koneksi.php";
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$conn = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT * FROM pegawai";
$data = mysqli_query($conn, $query);

$result = array();

while($row = mysqli_fetch_array($data))
{
    array_push($result, array(
        'id'        => $row['id'],
        'nip'       => $row['nip'],
        'nama'      => $row['nama'],
        'tgl_lahir' => $row['tgl_lahir'],
        'jabatan'   => $row['jabatan'],
        'bidang'    => $row['bidang'],
        'gender'    => $row['gender'],
        'alamat'    => $row['alamat'],
        'kota'      => $row['kota']
    ));
}
// $row = mysqli_fetch_array($data);
// echo json_encode($data);

if($result == NULL)
{
    echo json_encode(array('result' => 'Error', 'Message' => 'Data Kosong'));
}
else
{
    echo json_encode(array('result' => $result), TRUE);
}

?>