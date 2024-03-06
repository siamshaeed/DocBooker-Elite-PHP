<?php
include_once 'classes/db_conn_class.php';
class User extends Database {

    public function adminLogin($email, $password) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result =  $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
        return false;
    }
}
