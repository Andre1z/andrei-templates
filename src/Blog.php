<?php
require_once 'DB.php';

class Blog {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Obtiene todos los posts en orden descendente de fecha
    public function getPosts() {
        $stmt = $this->db->prepare("SELECT * FROM posts ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para agregar un nuevo post (para ampliar en el futuro)
    public function addPost($title, $content) {
        $stmt = $this->db->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        return $stmt->execute();
    }
}