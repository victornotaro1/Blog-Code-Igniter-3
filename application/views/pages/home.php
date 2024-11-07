<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
</head>
<body>

<?php foreach (array_slice($posts, 0, 1) as $index => $post) : ?>
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-success"
            style="background-image: url('<?= !empty($post["image_url"]) ? $post["image_url"] : '' ?>'); background-size: cover; background-position: center; position: relative;">

            <!-- Camada de sobreposição escura -->
            <div style="background-color: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

            <div class="col-md-6 px-0" style="position: relative; z-index: 1;">
                <h1 class="display-4 font-italic"><?= $post["titulo"] ?></h1>
                <p class="lead my-3"><?= $post["conteudo"] ?></p>
                <button type="button" class="btn">
                    <a href="<?= base_url('noticia/ver/' . $post['id']) ?>" class="text-light">Continuar lendo</a>
                </button>
            </div>

    </div>
    
<?php endforeach; ?>

<div class="row mb-2">
    <?php foreach (array_slice($posts, 1, 2) as $index => $post) : ?>
        <div class="col-md-6">
            <div class="card h-100" style="background-image: url('<?= $post['image_url'] ?>'); background-size: cover; background-position: center; height: 300px;">
                <div class="card-body d-flex flex-column align-items-start" style="background-color: rgba(0, 0, 0, 0.5);">
                    <strong class="d-inline-block mb-2 text-success"><?= $post["categoria"] ?></strong>
                    <h3 class="mb-0">
                        <a class="text-light" href="#"><?= $post["titulo"] ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $post["data_criacao"] ?></div>
                    <p class="card-text mb-auto text-light"><?= substr($post["conteudo"], 0, 100) . '...' ?></p>
                    
                    <button type="button" class="btn">
                        <a href="<?= base_url('noticia/ver/' . $post['id']) ?>" class="text-light">Continuar lendo</a>
                    </button>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom"></h3>
            <?php foreach (array_slice($posts, 3, 4) as $index => $post) : ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?= $post["titulo"] ?></h2>
                    <p class="blog-post-meta">Escrito por <?= $post["autor"] ?></a>, em <?= $post["data_criacao"] ?></p>
                    <p><?= $post["conteudo"] ?></p>
                    <div class="text-right">
                        <button type="button" class="btn">
                            <a href="<?= base_url('noticia/ver/' . $post['id']) ?>" class="text-dark">Ver mais...</a>
                        </button>
                    </div>
                    <hr>
                </div>  
            <?php endforeach; ?>  

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Mais antigos</a>
                <a class="btn btn-outline-secondary disabled" href="#">Mais novos</a>
            </nav>
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">Sobre</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            
            <!-- side bar -->
            <div>
                <h4 class="fst-italic">Recent posts</h4>
                <?php foreach (array_slice($posts, 6, 2) as $post) : ?>
                <ul class="list-unstyled">
                    <li>
                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                        <img src="<?= $post['image_url'] ?>" alt="Imagem do Post" width="100%" height="96">
                        <div class="col-lg-8">
                            <h6 class="mb-0 "><?= $post["titulo"] ?></h6>
                            <small class="text-body-secondary"><?= $post["data_criacao"] ?></small>
                        </div>
                        </a>
                    </li>
                </ul>
                <?php endforeach; ?>    

                <div class="p-3">
                    <h4 class="font-italic">Arquivos</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Março de 2018</a></li>
                        <li><a href="#">Fevereiro de 2018</a></li>
                        <li><a href="#">Janeiro de 2018</a></li>
                        <li><a href="#">Dezembro de 2017</a></li>
                        <li><a href="#">Novembro de 2017</a></li>
                        <li><a href="#">Outubro de 2017</a></li>
                        <li><a href="#">Setembro de 2017</a></li>
                        <li><a href="#">Agosto de 2017</a></li>
                        <li><a href="#">Julho de 2017</a></li>
                        <li><a href="#">Junho de 2017</a></li>
                        <li><a href="#">Maio de 2017</a></li>
                        <li><a href="#">Abril de 2017</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Onde nos encontrar, por aí:</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

<style>
.jumbotron.p-3.p-md-5.text-white.rounded.bg-success {
    margin-top: 20px;
}
</style>
