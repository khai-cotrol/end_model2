<?php

use App\Controller\Controller;
use \App\Controller\userController;
use \App\Controller\ControllerDetail;
include "vendor/autoload.php";

$controller = new Controller();
$controllerUser = new userController();
$controllerOrder = new ControllerDetail();
$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
$name = isset($_REQUEST['search'])? $_REQUEST['search']: null;
switch ($page) {
    case 'product':
        switch ($action) {
            case'list':
                $controller->ShowAll();
                break;
            case 'add':
                $controller->Add();
                break;
            case 'delete':
                $controller->Delete();
                break;
            case 'edit':
                $controller->Update();
                break;
            case 'search':
                $controller->Search($name);
                break;
            case 'add_User':
                $controllerUser->AddUser();
                break;
            case 'login':
                $controllerUser->Login();
                break;
            case 'listDetail':
                $controllerOrder->GetDetail();
                break;
        }
        break;
}
