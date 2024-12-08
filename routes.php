<?php
require_once 'controllers/AuthController.php';

$authController = new AuthController();

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/login':
        $authController->login();
        break;
    case '/register':
        $authController->register();
        break;
    case '/dashboard':
        $authController->dashboard();
        break;
    case '/logout':
        $authController->logout();
        break;
        case '/home':
            $authController->home();
            break;
    default:
        header("HTTP/1.0 404 Not Found");
        require_once 'views/404.php';
        break;
}
?>
