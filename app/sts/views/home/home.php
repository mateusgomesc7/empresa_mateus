<?php

if (!defined('URL')) {
    header("Location: /");
    exit ();
}

//var_dump($this->Dados['sts_carousels']);
?>

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $cont_marc = 0;
                foreach ($this->Dados['sts_carousels'] as $carousel) {
                    extract($carousel);
                    echo "<li data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                    $cont_marc++;
                }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
                $cont_slide = 0;
                foreach ($this->Dados['sts_carousels'] as $carousel) {
                    extract($carousel);
            ?>
            <div class="carousel-item <?php if($cont_slide == 0) { echo 'active'; }?>">
                <!-- img-fluid faz com que a imagem seja responsível -->
                <img class="first-slide img-fluid" src="<?php echo URL . '/assets/imgs/carousel/' . $id . '/' . $imagem;?>" alt="<?php echo $titulo; ?>">
                <div class="container">
                    <div class="carousel-caption <?php echo $posicao_text; ?>">
                        <h1 class="d-none d-md-block"><?php echo $titulo; ?></h1>
                        <p class="d-none d-md-block"><?php echo $descricao; ?></p>
                        <p class="d-none d-md-block"><a class="btn btn-lg btn-<?php echo $cor; ?>" href="<?php echo $link; ?>" role="button"><?php echo $titulo_botao; ?></a></p>
                    </div>
                </div>
            </div>
            <?php
                    $cont_slide++;
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>        
    </div>

    <?php extract($this->Dados['sts_servicos'][0]) ?>
    <div class="jumbotron mb-0 servicos">
        <div class="container">
            <h1 class="display-4 text-center"><?php echo $titulo; ?></h1>
            <div class="card-deck">
                <div class="card text-center anime_left">
                    <div class="text-primary">
                        <ion-icon name="<?php echo $icone_um; ?>"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $nome_um; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_um; ?></p>
                    </div>
                </div>
                <div class="card text-center anime_bottom">
                    <div class="text-primary">
                        <ion-icon name="<?php echo $icone_dois; ?>"></ion-icon>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nome_dois; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_dois; ?></p>
                    </div>
                </div>
                <div class="card text-center anime_right">
                    <div class="text-primary">
                        <ion-icon name="<?php echo $icone_tres; ?>"></ion-icon>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $nome_tres; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_tres; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php extract($this->Dados['sts_video'][0]) ?>
    <div class="jumbotron mb-0 video">
        <div class="container">
            <h1 class="display-4 text-center anime_left"><?php echo $titulo; ?></h1>
            <p class="lead text-center anime_right"><?php echo $descricao; ?></p>
            <div class="row justify-content-md-center anime_bottom">
                <div class="col-12 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php echo $video; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron mb-0 servicos">
        <div class="container">
            <h1 class="display-4 text-center">Últimos Artigos</h1>
            <div class="card-deck blog-text">
                <?php
                    foreach ($this->Dados['sts_artigos'] as $artigo) {
                        extract($artigo);
                ?>

                <div class="card anime_bottom">
                    <a href="<?php echo URL . 'artigo/' . $slug; ?>">
                        <img src="<?php echo URL . 'assets/imgs/artigo/' . $id . '/' . $imagem; ?>" class="card-img-top" alt="<?php echo $titulo; ?>">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo URL . 'artigo/' . $slug; ?>">
                            <h5 class="card-title text-center text-primary"><?php echo $titulo; ?></h5>
                        </a>
                        <p class="card-text"><?php echo $descricao; ?></p>
                        <p class="test-center"><a href="<?php echo URL . 'artigo/' . $slug; ?>" class="btn btn-primary">Mais Detalhes</a></p>
                    </div>
                </div>

                <?php
                    }
                ?>  
            </div>
        </div>
    </div>

</main>