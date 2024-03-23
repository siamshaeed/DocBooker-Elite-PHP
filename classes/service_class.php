<?php
require 'db_conn_class.php';

class Service extends Database {

    public function store($title, $description, $image){
        $title = mysqli_real_escape_string($this->conn, $title);
        $description = mysqli_real_escape_string($this->conn, $description);

        // Check if file was uploaded without errors
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image_path = '../../assets/uploads/' . basename($_FILES['image']['name']); // Define the path where the file will be stored
            // Move the uploaded file to the specified directory
            if(move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
                // Insert the image path into the database
                $sql = "INSERT INTO services (title, description, image) VALUES ('$title', '$description', '$image_path')";
                return $this->conn->query($sql);
            } else {
                // Error handling if file upload fails
                return false;
            }
        } else {
            // Error handling if no file was uploaded or if there was an error during upload
            return false;
        }

    }
}
?>
