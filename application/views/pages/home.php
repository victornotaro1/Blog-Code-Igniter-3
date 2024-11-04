<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
</head>
<body>
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-success">
        <div class="col-md-6 px-0">
          <?php foreach (array_slice($posts, 0, 1) as $post) : ?>
            
              <h1 class="display-4 font-italic"><?= $post["titulo"] ?></h1>
              <p class="lead my-3"><?= $post["conteudo"] ?></p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
          <?php endforeach; ?>
        </div>
    </div>
    
<div class="row mb-2">
  <?php foreach(array_slice($games, 0, 2) as $game) : ?>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Jogos</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#"><?= $game["name"] ?></a>
                </h3>
                  <div class="mb-1 text-muted"><?= $game["release_date"] ?></div>
                    <p class="card-text mb-auto"><?= substr($game["description"], 0, 100) . '...' ?></p>
                    <p class="text-success"><?= reais($game["price"]) ?></p>
              <a href="#">Continue lendo</a>
          </div>
         <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
       </div>
    </div>
  <?php endforeach; ?>
</div>

<main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
          Noticias de hoje!
          </h3>
          <?php foreach (array_slice($posts, 1, 3) as $post) : ?>
            <div class="blog-post">
              <h2 class="blog-post-title"><?= $post["titulo"] ?></h2>
              <p class="blog-post-meta">Escrito por <a href="#"><?= $post["autor"] ?></a>, em <?= $post["data_criacao"] ?></p>

              <p><?= $post["conteudo"] ?></p>
              <hr>
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