<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>

<main role="main">
    <div class="jumbotron mb-0 blog">
        <div class="container">
            <h1 class="display-4 text-center">Blog</h1>
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php
                        foreach($this->Dados['artigos'] as $artigo){
                            extract($artigo);
                    ?>
                    
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2 blog-text anime_right">
                            <a href="<?php echo URL . 'Artigo/' . $slug; ?>">
                                <h2 class="featurette-heading"><?php echo $titulo; ?>.</h2>
                            </a>
                            <p class="lead"><?php echo $descricao; ?><a
                                    href="<?php echo URL . 'Artigo/' . $slug; ?>">Continuar lendo</a></p>
                        </div>
                        <div class="col-md-5 order-md-1 anime_left">
                            <a href="<?php echo URL . 'Artigo/' . $slug; ?>">
                                <img class="featurette-image img-fluid mx-auto" src="<?php echo URL . 'assets/imgs/artigo/' . $id . '/' . $imagem; ?>" alt="<?php echo $titulo; ?>">
                            </a>
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    
                    <?php
                        }
                    ?>

                    <nav aria-label="paginacao">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <aside class="col-md-4 blog-sidebar">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="font-italic">Sobre</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis
                            consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Artigo 1</a></li>
                            <li><a href="#">Artigo 2</a></li>
                            <li><a href="#">Artigo 3</a></li>
                            <li><a href="#">Artigo 4</a></li>
                            <li><a href="#">Artigo 5</a></li>
                            <li><a href="#">Artigo 6</a></li>
                            <li><a href="#">Artigo 7</a></li>
                            <li><a href="#">Artigo 8</a></li>
                            <li><a href="#">Artigo 9</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Destaque</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Artigo 2</a></li>
                            <li><a href="#">Artigo 6</a></li>
                            <li><a href="#">Artigo 7</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div>

        </div>
    </div>

</main>