<?php
require_once 'db_conn_class.php';
class Setting extends Database {

    public function update($app_name, $email, $address, $phone, $logo, $favicon) {
        $app_name = mysqli_real_escape_string($this->conn, $app_name);
        $email = mysqli_real_escape_string($this->conn, $email);
        $address = mysqli_real_escape_string($this->conn, $address);
        $phone = mysqli_real_escape_string($this->conn, $phone);

        $logo  = $logo;
        $directory = '../../assets/uploads/';
        $target_file_logo = $directory . basename(str_replace(' ', '_', $_FILES['logo']['name']));
        $logoMoved = move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file_logo);

        // Favicon upload handling
        $directory_favicon = '../../assets/uploads/';
        $target_file_favicon = $directory_favicon . basename(str_replace(' ', '_', $_FILES['favicon']['name']));
        $faviconMoved = move_uploaded_file($_FILES['favicon']['tmp_name'], $target_file_favicon);

        $sql = "UPDATE settings SET name = '$app_name', email = '$email', address = '$address', phone = '$phone', photo = '$target_file_logo', favicon = '$target_file_favicon' WHERE status = 1";

        // Execute the SQL query
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getData() { // Show
        $sql = "SELECT * FROM settings WHERE status = 1";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

}



