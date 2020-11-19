<?php 

class Keluarga {
    private $conn;
    private $table_name = "silsilah";

    public $id;
    public $nama;
    public $status;
    public $gender;
    public $orangTua;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function read(){
        $query = "SELECT * FROM $this->table_name";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}