<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
?>

<main role="main">
    <div class="jumbotron mb-0 blog">
        <div class="container">
            <h1 class="display-4 text-center">Vitrine</h1>
            <div class="row">
                <div class="col-md-8 blog-main">
                    <?php
                        if(empty($this->Dados['artigos'])){
                            echo "<div class='alert alert-danger'>Erro: Nenhum artigo encontrado</div>";
                        }

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

                        echo $this->Dados['paginacao'];
                    ?>

                </div>
                <aside class="col-md-4 blog-sidebar">
                    <?php if(!empty($this->Dados['sobreAutor'][0])){ ?>
                    <div class="p-4 mb-3 bg-light rounded">
                        <?php
                                extract($this->Dados['sobreAutor'][0]); 
                        ?>

                        <h4 class="font-italic"><?php echo $titulo; ?></h4>
                        <img src="<?php echo URL . 'assets/imgs/sobre_autor/' . $id . '/' . $imagem; ?>" class="img-fluid" alt="<?php echo $titulo ?>">
                        <p class="mb-0"><?php echo $descricao; ?></p>
                    </div>
                    <?php } ?>

                    <div class="p-4">
                        <h4 class="font-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <?php
                                foreach($this->Dados['artRecente'] as $artigoRec){
                                    extract($artigoRec);
                                    echo "<li><a href='".URL."artigo/$slug'>$titulo</a></li>";
                                }
                            ?>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Destaque</h4>
                        <ol class="list-unstyled">
                            <?php
                                foreach($this->Dados['artDestaque'] as $artigoDest){
                                    extract($artigoDest);
                                    echo "<li><a href='".URL."artigo/$slug'>$titulo</a></li>";
                                }
                            ?>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar -->
            </div>

        </div>
    </div>

</main>