<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Resultados da Pesquisa</h2>
    
    <?php if (!empty($resultado)) : ?>
            <tbody>
            <?php foreach ($resultado as $post) : ?>
				
                    <div class="container">
					<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Título e linha acima do conteúdo -->
            <h3 class="pb-3 mb-4 font-italic border-bottom"></h3>
        </div>

        <!-- Coluna para o vídeo ou imagem -->
        <div class="col-md-4">
            <?php if (!empty($post['video_url'])): ?>
                <div class="video-container mb-4">
                    <iframe width="100%" height="250" src="<?= $post['video_url'] ?>" allowfullscreen></iframe>
                </div>
            <?php else: ?>
                <div class="image mb-4">
                    <img src="<?= $post['image_url'] ?>" alt="Imagem do Post" width="100%" height="250">
                </div>
            <?php endif; ?>
        </div>

        <!-- Coluna para o conteúdo -->
        <div class="col-md-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title"><?= $post["titulo"] ?></h2>
                <p class="blog-post-meta">Escrito por <a href="#"><?= $post["autor"] ?></a>, em <?= $post["data_criacao"] ?></p>
                <p><?= $post["conteudo"] ?></p>
                <div class="text-right">
                    <button type="button" class="btn btn-primary">
                        <a href="<?= base_url('noticia/ver/' . $post['id']) ?>" class="text-light">Continuar lendo</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Nenhum resultado encontrado para sua pesquisa.</p>
    <?php endif; ?>
</main>


<script>
    function goDelete(id) {
        var myUrl = 'games/edit/'+id;
        if(confirm("Deseja apagar este registro?")) {
            window.location.href = 'games/destroy/'+id;
        } else {
            alert("Registro não alterado");
            return false;
        }
    }
</script>
