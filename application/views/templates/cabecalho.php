<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <body>

    <div class="container">
    <header class="blog-header">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid mb-2">
          <div class="nav-scroller py-7 mb-2">
          <nav class="nav d-flex justify-content-center">
            <a class="p-2 text-muted" href="<?= base_url() ?>posts/categoria/futebol">Futebol</a>
            <a class="p-2 text-muted" href="<?= base_url() ?>posts/categoria/ufc">UFC</a>
          </nav>
        </div>
            <a class="navbar-brand ms-auto" href="<?= base_url() ?>home">
                <img src="<?= base_url('/assets/images/logoVN.png') ?>" alt="VNOTARO Logo" style="height: 50px;">
            </a>
            <form method="POST" action="<?= base_url('posts/pesquisar') ?>" class="d-flex">
                <div class="form-group position-relative">
                    <input type="text" name="busca" id="busca" class="form-control pl-5" placeholder="Pesquisar">
                    <button class="btn position-absolute" type="submit" style="top: 50%; transform: translateY(-50%); right: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </nav>
    
</header>
   
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
</body>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<style>
  .blog-header .navbar-brand {
    display: flex;
    justify-content: center;
    flex: 1;
}

a.p-2.text-muted {
    color: black !important;

}


</style>