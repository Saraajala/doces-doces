<?php
// Configurações básicas do banco
$host = 'localhost';
$dbname = 'doces_doces';
$username = 'root';
$password = '';

// Conexão PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>
