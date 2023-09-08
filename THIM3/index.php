<?php
// Ket noi voi DB
require_once 'db.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'benhnhan';
switch ($controller) {
    case 'benhnhan':
        require_once 'Controllers/BenhnhanController.php';
        $objController = new BenhnhanController();
        break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'show':
        $objController->show();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}
