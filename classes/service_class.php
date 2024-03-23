<?php
require 'db_conn_class.php';

class Service extends Database {

    public function store($title, $description, $image) {
        $title = mysqli_real_escape_string($this->conn, $title);
        $description = mysqli_real_escape_string($this->conn, $description);

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {   // Image Upload
            $image_path = '../../assets/uploads/' . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
                $sql = "INSERT INTO services (title, description, image) VALUES ('$title', '$description', '$image_path')";
                return $this->conn->query($sql);
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    public function show() {
       $sql = "SELECT * FROM services";
       return  $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
?>
