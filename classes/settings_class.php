<?php
require_once 'db_conn_class.php';
class Setting extends Database {

    public function store($app_name, $email, $address, $phone) {
        $app_name = mysqli_real_escape_string($this->conn, $_POST['app_name']);
        $email = mysqli_real_escape_string($this->conn, $_POST['email']);
        $address = mysqli_real_escape_string($this->conn, $_POST['address']);
        $phone = mysqli_real_escape_string($this->conn, $_POST['phone']);

        $sql = "INSERT INTO settings (name, email, address, phone) VALUES ('$app_name', '$email', '$address', '$phone')";

        return $this->conn->query($sql);
    }
}