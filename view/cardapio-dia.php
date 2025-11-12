<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cardápio do Dia | Doces&Doces</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Cardápio do Dia</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="index.php?page=cardapio-dia">Cardápio do Dia</a>
            <a href="index.php?page=cardapio-festa">Cardápio de Festa</a>
        </nav>
    </header>

    <main>
        <div class="produtos-container">
            <?php foreach ($produtos as $p): ?>
                <div class="card">
                    <img src="<?php echo $p['imagem']; ?>" alt="<?php echo $p['nome']; ?>">
                    <h3><?php echo $p['nome']; ?></h3>
                    <p><?php echo $p['descricao']; ?></p>
                    <span class="preco">R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>© 2025 Doces&Doces</p>
    </footer>
</body>
</html>
