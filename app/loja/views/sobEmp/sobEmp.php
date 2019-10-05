<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

?>

<main role="main">
    <div class="jumbotron mb-0 sobre-empresa">
        <div class="container">
            <h1 class="display-4 text-center">Sobre a Empresa Mateus</h1>
            <?php
                $cont_sob_emp = 1;
                foreach($this->Dados['sts_sobs_emps'] as $sob_emp){
                    extract($sob_emp);
                    if($cont_sob_emp == 1){
            ?>
            <div class="row featurette">
                <div class="col-md-7 anime_right">
                    <h2 class="featurette-heading"><?php echo $titulo; ?></h2>
                    <p class="lead"><?php echo $descricao; ?></p>
                </div>
                <div class="col-md-5 anime_left">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL . 'assets/imgs/sob_emp/' . $id . '/' . $imagem; ?>" alt="<?php echo $titulo; ?>">
                </div>
            </div>
            <hr class="featurette-divider">
            <?php
                        $cont_sob_emp = 2;
                    }else{
            ?>
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2 anime_left">
                                <h2 class="featurette-heading"><?php echo $titulo; ?></h2>
                                <p class="lead"><?php echo $descricao; ?></p>
                            </div>
                            <div class="col-md-5 order-md-1 anime_right">
                                <img class="featurette-image img-fluid mx-auto" src="<?php echo URL . 'assets/imgs/sob_emp/' . $id . '/' . $imagem; ?>" alt="<?php echo $titulo; ?>">
                            </div>
                        </div>
            <?php
                        $cont_sob_emp = 1;
                    }
                }
            ?>

        </div>
    </div>
</main>