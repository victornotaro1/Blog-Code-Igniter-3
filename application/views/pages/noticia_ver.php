<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['titulo'] ?></title>

    <!-- Link atualizado para o Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MO7Ed+3/kvI/b8Z7vpi8yGv34VI+Z34Qw65p3tzkCt+5K5kqNRehgmcpU66l9o1E" crossorigin="anonymous">
</head>
<body>

<!-- Conteúdo da Notícia -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1 class="mb-3"><?= $post['titulo'] ?></h1>
            <p class="text-muted"><em>Escrito por <?= $post['autor'] ?> em <?= $post['data_criacao'] ?></em></p>
            <img src="<?= $post['image_url'] ?>" alt="Imagem da Notícia" class="img-fluid rounded mb-4">
            <p><?= $post['conteudo'] ?></p>

            <?php if (!empty($post['video_url'])): ?>
                <div class="ratio ratio-16x9 mt-4">
                    <iframe src="<?= $post['video_url'] ?>" allowfullscreen></iframe>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Rodapé -->
<footer class="bg-dark text-white mt-5 p-4 text-center">
    <p>© 2024 Blog. Todos os direitos reservados.</p>
</footer>

<!-- Scripts do Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-NJo85ZzCgLrDXHgqrYksLxmcFJjbNKX65jKg4W78N3BZAL4CkRVC9lX28lP7BhgZ" crossorigin="anonymous"></script>
</body>
</html>
