<?php
require_once "../app/core/Database.php";
require_once "../app/controllers/Controller.php";

$db = (new Database())->connect();
$controller = new Controller($db);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action === 'index') {
    $controller->index();
} elseif ($action === 'upload') {
    $controller->upload();
} elseif ($action === 'delete' && $id) {
    $controller->delete($id);
} elseif ($action === 'view' && $id) {
    $controller->view($id);
}

