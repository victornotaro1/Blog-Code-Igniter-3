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
         style="background-image: url('<?= !empty($post["image_url"]) ? $post["image_url"] : '' ?>'); background-size: cover; background-position: center;">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?= $post["titulo"] ?></h1>
             <p class="lead my-3"><?= $post["conteudo"] ?></p>
            <button type="button" class="btn" data-toggle="modal" data-target="#modal-<?= $index ?>">
                     <a href="#" class="text-light">Continue lendo</a>
            </button>
        </div>
    </div> 

    <div class="modal fade" id="modal-<?= $index ?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado-<?= $index ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado-<?= $index ?>"><?= $post["titulo"] ?></h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $post["conteudo"] ?>
                    
                    <div class="video-container">
                      <iframe width="100%" height="100%" src="<?= $post["video_url"] ?>" 
                              title="YouTube video player" frameborder="0" 
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                      </iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>  
    
<?php endforeach; ?>
    
<div class="row mb-2">
    <?php foreach (array_slice($posts, 1, 2) as $index => $post) : ?>
        <div class="col-md-6">
            <div class="card h-100" style="background-image: url('<?= $post['image_url'] ?>'); background-size: cover; background-position: center; height: 300px;">
                <div class="card-body d-flex flex-column align-items-start" style="background-color: rgba(0, 0, 0, 0.5);">
                    <strong class="d-inline-block mb-2 text-primary">Jogos</strong>
                    <h3 class="mb-0">
                        <a class="text-light" href="#"><?= $post["titulo"] ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?= $post["data_criacao"] ?></div>
                    <p class="card-text mb-auto text-light"><?= substr($post["conteudo"], 0, 100) . '...' ?></p>
                    
                    <button type="button" class="btn" data-toggle="modal" data-target="#modal-<?= $index ?>">
                     <a href="#" class="text-light">Continue lendo</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-<?= $index ?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado-<?= $index ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado-<?= $index ?>"><?= $post["titulo"] ?></h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $post["conteudo"] ?>
                    <img src="<?= $post['image_url'] ?>" alt="Imagem do Post" width="100%" height="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>



<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          </h3>
          <?php foreach (array_slice($posts, 3, 3) as $index => $post) : ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?= $post["titulo"] ?></h2>
        <p class="blog-post-meta">Escrito por <a href="#"><?= $post["autor"] ?></a>, em <?= $post["data_criacao"] ?></p>
        <p><?= $post["conteudo"] ?></p>
        <div class="text-right">
          
          <button type="button" class="btn" data-toggle="modal" data-target="#modal-<?= $index ?>">
              Continuar Lendo...
          </button>
        </div>
        <hr>
    </div>  
    
    
    <div class="modal fade" id="modal-<?= $index ?>" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado-<?= $index ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado-<?= $index ?>"><?= $post["titulo"] ?></h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $post["conteudo"] ?>
                    <img src="<?= $post['image_url'] ?>" alt="Imagem do Post" width="100%" height="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>  
<?php endforeach; ?>  


          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Mais antigos</a>
            <a class="btn btn-outline-secondary disabled" href="#">Mais novos</a>
          </nav>

        </div><!-- /.blog-mai -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Sobre</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div>
          <h4 class="fst-italic">Recent posts</h4>
          <?php foreach (array_slice($posts, 6, 2) as $post) : ?>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="<?= $post['image_url'] ?>" alt="Imagem do Post" width="100%" height="96">
                <div class="col-lg-8">
                  <h6 class="mb-0"><?= $post["titulo"] ?></h6>
                  <small class="text-body-secondary"><?= $post["data_criacao"] ?></small>
                </div>
              </a>
            </li>
          </ul>
        </div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
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