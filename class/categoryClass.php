<?php
require_once '../class/db_connect.php';
session_start(); // session start


class Category extends Database {
   public function getAllCategories() {     //show category
       $sql = "SELECT * FROM categories";
       $result = $this->conn->query($sql);

       if ($result->num_rows > 0) {
           return $result->fetch_all(MYSQLI_ASSOC);
       } else {
           return array();
       }
   }

    public function addCategory($categoryName) {        // Add Category
        $sql = "INSERT INTO categories (category_name) VALUES ('$categoryName')";
       if ($this->conn->query($sql)) {
           $_SESSION['success_message'] = "Category Created Successfully";
       } else {
           $_SESSION['error_message'] = "Category Create Problem";
       }
    }

    public function getCategoryById($categoryId) {
        $sql    = "SELECT * FROM categories WHERE category_id = $categoryId";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updateCategory($categoryId, $categoryName) {
       $sql = "UPDATE categories SET category_name = '$categoryName' WHERE category_id = '$categoryId'";
        if ($this->conn->query($sql)) {
            $_SESSION['success_message'] = "Category Update Successfully";
        } else {
            $_SESSION['error_message'] = "Category Update Problem";
        }
    }

    public function deleteCategory($categoryId) {
       $sql = "DELETE FROM categories WHERE category_id = $categoryId";
       if ($this->conn->query($sql)) {
           $_SESSION['success_message'] = "Category Deleted";
       } else {
           $_SESSION['error_message'] = "Category Delete Problem";
       }
    }


 }