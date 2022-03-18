<!--
    Coluna
    col-lg-4  = 3 Vídeos por linha em uma tela grande
    col-md-6  = 2 Vídeos por linha em uma tela média
    col-sm-12 = 1 Vídeo por linha em uma tela pequena
-->
<div class="col-lg-4 col-md-6 col-sm-12">
    <!-- Card -->
    <div class="card mt-4 shadow-lg h-100">
        <iframe height="315" src="https://www.youtube.com/embed/<?= $video["cod_youtube"]; ?>" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        
        <div class="card-body">
            <h5 class="card-title"><?= $video["titulo"]; ?></h5>
            <p class="card-text"><?= $video["descricao"]; ?></p>
        </div><!-- card-body -->

        <div class="card-footer">
            <a href="https://www.youtube.com/watch?v=<?= $video["cod_youtube"];?>" 
               class="btn btn-danger w-100 my-3"
               target="_blank" rel="noreferrer noopener">
                Assistir no youtube
            </a>
        </div><!-- fim do card-footer -->
        
    </div><!-- fim do card -->
</div><!--fim da coluna -->