<?php
require_once 'model/Produto.php';

class HomeController {

    public function index() {
        $produto = new Produto();
        $produtos = $produto->listarTodos();
        require 'view/home.php';
    }

    public function cardapioDia() {
        $produto = new Produto();
        $produtos = $produto->listarDia(); // padronizado
        require 'view/cardapio-dia.php';
    }

    public function cardapioFesta() {
        $produto = new Produto();
        $produtos = $produto->listarFesta(); // padronizado
        require 'view/cardapio-festa.php';
    }
}
?>
