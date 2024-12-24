<?php
require_once "../app/models/Model.php";

class Controller {
    private $model;

    public function __construct($db) {
        $this->model = new Model($db);
    }

    public function index() {
        $files = $this->model->getAllFiles();
        require "../app/views/files/index.php";
    }

    public function upload() {
        if (isset($_POST['upload'])) {
            $name = $_POST['name'];
            $file = $_FILES['file'];
            $targetDir = "../public/uploads/";
            $targetFile = $targetDir . basename($file['name']);

            if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                $this->model->uploadFile($name, $targetFile);
                header("Location: /public/index.php");
            } else {
                echo "File upload failed!";
            }
        }
        require "../app/views/files/add.php";
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmDelete'])) {
            $this->model->deleteFile($id);
            header("Location: /public/index.php");
            exit;
        }
        require "../app/views/files/delete.php";
    }

    public function view($id) {
        $files = $this->model->getAllFiles();
        $file = array_filter($files, fn($f) => $f['id'] == $id);
        if (!empty($file)) {
            $file = array_shift($file);
        } else {
            echo "File not found!";
            return;
        }
        require "../app/views/files/view.php";
    }
}
