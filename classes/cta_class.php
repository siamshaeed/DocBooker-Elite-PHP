<?php
require 'db_conn_class.php';

class Cta  extends  Database {

    public function store($title, $value) {
        $title = mysqli_real_escape_string($this->conn, $title);
        $value = mysqli_real_escape_string($this->conn, $value);

        $sql = "INSERT INTO cta (title, value ) VALUES ('$title', '$value')";
        return $this->conn->query($sql);
    }

    public function show() {
        $sql = "SELECT * FROM cta";
        return $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM cta WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function update($id, $title, $value) {
        $sql = "UPDATE cta SET title = '$title', value = '$value' WHERE id = '$id'";
        return $this->conn->query($sql);
    }

    public function destoy($id) {
        $sql = "DELETE FROM cta WHERE id = $id";
        $this->conn->query($sql);
    }
}