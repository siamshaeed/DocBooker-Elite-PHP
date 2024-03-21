<?php
require 'db_conn_class.php';

class Cta  extends  Database {

    public function store($title, $value){
        $title = mysqli_real_escape_string($this->conn, $title);
        $value = mysqli_real_escape_string($this->conn, $value);

        $sql = "INSERT INTO cta (title, value ) VALUES ('$title', '$value')";
        return $execute = $this->conn->query($sql);
    }
}