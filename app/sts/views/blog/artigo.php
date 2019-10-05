<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>

<main role="main">

    <div class="jumbotron mb-0 blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php
                        if(!empty($this->Dados['sts_artigos'][0])){
                            extract($this->Dados['sts_artigos'][0]);
                    ?>

                    <div class="blog-post">  
                        <h2 class="blog-post-title"><?php echo $titulo; ?></h2>
                        <img src="<?php echo URL . 'assets/imgs/artigo/' . $id . '/' . $imagem; ?>" class="img-fluid mb-4" alt="<?php echo $titulo; ?>">
                        <?php echo $conteudo; ?>
                    </div>              

                    <?php        
                        }
                    ?>

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
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