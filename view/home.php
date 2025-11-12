<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Doces&Doces</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo(a) à Doces&Doces!</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="index.php?page=cardapio-dia">Cardápio do Dia</a>
            <a href="index.php?page=cardapio-festa">Cardápio de Festa</a>
        </nav>
    </header>

    <main>
        <h2>Destaques do nosso cardápio ✨</h2>
        <div class="produtos-container">
            <?php foreach ($produtos as $p): ?>
                <div class="card">
                    <img src="<?php echo $p['imagem']; ?>" alt="<?php echo $p['nome']; ?>">
                    <h3><?php echo $p['nome']; ?></h3>
                    <p><?php echo $p['descricao']; ?></p>
                    <?php if (isset($p['preco'])): ?>
                        <span class="preco">R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>© 2025 Doces&Doces - Feito com amor 🍫</p>
    </footer>
</body>
</html>
