<?php
require_once 'config.php';

class Produto {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    // Retorna todos os produtos
    public function listarTodos() {
        $sql = "SELECT * FROM produtos ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Retorna apenas produtos do dia
    public function listarDia() {
        $sql = "SELECT * FROM produtos WHERE categoria = 'dia' ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Retorna apenas produtos de festa
    public function listarFesta() {
        $sql = "SELECT * FROM produtos WHERE categoria = 'festa' ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
