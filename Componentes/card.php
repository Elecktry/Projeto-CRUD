
<div class="col-lg-4 col-md-6 col-sm-12 text-center text-danger">
    <!-- Card -->
    <div class="card mt-4 card mb-4 shadow-lg h-100">
        <iframe height="360" src="https://www.youtube.com/embed/<?= $video["cod_youtube"]; ?>" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <div class="card-body ">
        <h5 class="card-title"> <?= $video["titulo"]; ?> </h5>
            <p class="card-text"></p><?= $video["descricao"]; ?></p>
            
        </div>
        <div class="card-footer">
        <a href="https://www.youtube.com/watch?v=<?= $video["cod_youtube"];?> "
        class="btn btn-danger bgp-white w-100 my-3"
        target="_blank" rel="noreferrer noopener">
        Assistir no youtube
        </a>
        </div>
    </div><!-- fim do card -->
</div>