<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/keluarga.php';

$database = new Database();
$db = $database->getConnection();

$keluarga = new Keluarga($db);

$stmt = $keluarga->read();
$num = $stmt->rowCount();

if($num>0){
    $keluarga_arr = array();
    $keluarga_arr["records"] = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $keluarga_item = array(
            "id" => $id,
            "nama" => $nama,
            "status" => $status,
            "gender" => $gender,
        );
        array_push($keluarga_arr["records"], $keluarga_item);
    }

    http_response_code(202);

    echo json_encode($keluarga_arr);
} else {
    http_response_code(404);

    echo json_encode(
        array("message" => "No product found.")
    );
}