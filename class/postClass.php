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

    public function getAllPosts() {
        $sql = "SELECT posts.*, categories.category_name 
                FROM posts 
                LEFT JOIN categories ON posts.category_id = categories.category_id";
        $result = $this->conn->query($sql);

        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getPostById($postId) {
        $sql = "SELECT * FROM posts WHERE post_id = $postId";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    public function updatePost($postId, $title, $content, $category_id, $image) {
        $sql = "UPDATE posts SET title = '$title', content = '$content', category_id = '$category_id', image_url = '$image' WHERE post_id = '$postId'";
        return $this->conn->query($sql);
    }

    public function deletePost($postId) {
        $sql = "DELETE FROM posts WHERE post_id = '$postId'";
        return $this->conn->query($sql);
    }


}