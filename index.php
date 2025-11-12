<?php
require_once 'config.php';
require_once 'controller/HomeController.php';

// Define qual página o usuário quer acessar
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Cria o controller principal
$controller = new HomeController();

// Roteamento simples
switch ($page) {
    case 'cardapio-dia':
        $controller->cardapioDia();
        break;

    case 'cardapio-festa':
        $controller->cardapioFesta();
        break;

    default:
        $controller->index();
        break;
}
?>
