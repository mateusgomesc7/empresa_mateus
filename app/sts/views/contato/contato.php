<?php

if (!defined('URL')) {
    header("Location: /");
    exit();
}

?>

<main role="main">

    <div class="jumbotron mb-0 contato">
        <div class="container">
            <h1 class="display-4 text-center">Contato</h1>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if(isset($this->Dados['form'])) {
                    $valorForm = $this->Dados['form'];
                }
            ?>
            <form method="POST" action="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input name="nome" type="text" class="form-control" placeholder="Nome completo" value="<?php if(isset($valorForm['nome'])) {echo $valorForm['nome'];} ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>E-mail</label>
                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?php if(isset($valorForm['email'])) {echo $valorForm['email'];} ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Assunto</label>
                    <input name="assunto" type="text" class="form-control" placeholder="Assunto da mensagem" value="<?php if(isset($valorForm['assunto'])) {echo $valorForm['assunto'];} ?>">
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="mensagem" class="form-control" rows="6" placeholder="Digite a mensagem"><?php if(isset($valorForm['mensagem'])) {echo $valorForm['mensagem'];} ?></textarea>
                </div>
                <input name="created" type="hidden" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <input name="CadMsgCont" type="submit" class="btn btn-primary" value="Enviar">
            </form>
        </div>
    </div>

</main>