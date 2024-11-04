<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
    </div>

    <div class="col-md-12">
        <?php if (isset($post)) { ?>
            <form action="<?= base_url() ?>posts/update/<?= $post['id'] ?>" method="post">
        <?php } else { ?>
            <form action="<?= base_url() ?>posts/store" method="post">
        <?php } ?>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" value="<?= isset($post['titulo']) ? $post['titulo'] : '' ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" id="conteudo" rows="5" class="form-control" required><?= isset($post['conteudo']) ? $post['conteudo'] : '' ?></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" value="<?= isset($post['autor']) ? $post['autor'] : '' ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoria" value="<?= isset($post['categoria']) ? $post['categoria'] : '' ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="publicado">Publicado</label>
                    <input type="checkbox" name="publicado" id="publicado" value="1" <?= isset($post['publicado']) && $post['publicado'] ? 'checked' : '' ?>>
                </div>
            </div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                <a href="<?= base_url() ?>posts" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
            </div>
        </form>
    </div>
</main>
