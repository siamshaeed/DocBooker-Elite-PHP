<?php
require_once 'db_connect.php';

class Post extends Database {

    public function getAllPost() {
      echo "Get All Posts";
    }

    public function addPost($title, $content, $category_id, $image) {
        $sql = "INSERT INTO posts (title, content, category_id, image_url) VALUES ('$title', '$content', '$category_id', '$image')";
        return $this->conn->query($sql);
    }


}