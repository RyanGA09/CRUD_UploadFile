<?php
class Model {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllFiles() {
        $stmt = $this->conn->prepare("SELECT * FROM files ORDER BY uploaded_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function uploadFile($name, $path) {
        $stmt = $this->conn->prepare("INSERT INTO files (name, path) VALUES (:name, :path)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':path', $path);
        return $stmt->execute();
    }

    public function deleteFile($id) {
        $stmt = $this->conn->prepare("DELETE FROM files WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
