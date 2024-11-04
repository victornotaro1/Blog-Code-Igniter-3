<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Postagem</title>
</head>
<body>
    <h1>Criar Nova Postagem</h1>
    <form action="<?= site_url('posts/store'); ?>" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>

        <label for="conteudo">Conteúdo:</label>
        <textarea name="conteudo" required></textarea><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria"><br>

        <label for="publicado">Publicado:</label>
        <input type="checkbox" name="publicado" value="1"><br>

        <input type="submit" value="Salvar">
    </form>
    <a href="<?= site_url('posts/index'); ?>">Voltar</a>
</body>
</html>
