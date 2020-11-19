<?php 

$conn = mysqli_connect("localhost","root","","keluarga");
// $result = mysqli_query($conn, "SELECT * FROM silsilah");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo mysqli_error($conn);
    }
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
   
    return $rows;
}

$nama = query("SELECT nama FROM silsilah");
$kolom = query("SELECT * FROM silsilah");
// var_dump($kolom);

if(isset($_POST['anak'])){
    // var_dump($_POST);
    // echo $_POST["nama"];
        $anak = query("SELECT nama FROM silsilah WHERE status='anak' AND orang_tua='budi'");
        // var_dump($anak);
        // foreach($anak as $a){
        //     echo "<br>";
        //     echo $a["nama"];
        // }
} elseif(isset($_POST['cucu'])) {
        $cucu = query("SELECT nama FROM silsilah WHERE status='cucu'");
} elseif(isset($_POST['cPerempuan'])){
        $cPerempuan = query("SELECT nama FROM silsilah WHERE status='cucu' AND gender='perempuan'");
} elseif(isset($_POST['bibi'])){
        $bibi = query("SELECT nama FROM silsilah WHERE status='anak' AND gender='perempuan'");
} elseif(isset($_POST['sepupu'])) {
    $sepupu = query("SELECT nama FROM silsilah WHERE status='cucu' AND gender='laki laki'");
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $status = htmlspecialchars($data["status"]);
    $gender = htmlspecialchars($data["gender"]);
    $orangTua = htmlspecialchars($data["orangtua"]);

    $query = "INSERT INTO silsilah VALUES ('','$nama','$status','$gender','$orangTua')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM silsilah WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $status = htmlspecialchars($data["status"]);
    $gender = htmlspecialchars($data["gender"]);
    $orangTua = htmlspecialchars($data["orangtua"]);

    $query = "UPDATE silsilah SET nama = '$nama',
                status = '$status',
                gender = '$gender',
                orang_tua = '$orangTua' WHERE id = $id";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

