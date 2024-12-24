<?php
require_once "../app/core/Database.php";
require_once "../app/controllers/Controller.php";

$db = (new Database())->connect();
$controller = new Controller($db);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'upload':
        $controller->upload();
        break;
    case 'delete':
        if ($id) $controller->delete($id);
        break;
    case 'view':
        if ($id) $controller->view($id);
        break;
    default:
        echo "Page not found!";
}


