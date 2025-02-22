<?php

    require_once 'UtilDAO.php';
    UtilDAO::VerificarLogado();
    require_once './UsuarioDAO.php';

    //OBJETO GLOBAL

    $objDao = new UsuarioDAO();

    if(isset($_POST['btnSalvar'])) {
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha  = trim($_POST['senha']);

        $ret = $objDao->GravarMeusDados($nome, $email, $senha);

        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    }
    // VARIAVEL DE TIPO ARRAY POIS RECEBEU O ARRAY MONTADO NO BACK-AND PELO PDO!
    $dados = $objDao->CarregarMeusDados();

    //echo '<pre>';
    //var_dump($dados);
    //echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Dados de Acesso.</h2>
                        <h5>Aqui você pode alterar seus Dados de Acesso.</h5>
                        <?php include_once '_msg.php' ?>
                    </div>
                </div>
                <hr />
                <form action="meus_dados.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere seu Nome:</label>
                            <input class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome" value="<?= $dados[0]['nome_usuario'] ?>">
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= $dados[0]['email_usuario'] ?>">
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Altere sua senha:</label>
                            <div class="box-senha">
                                <input type="password" class="form-control" placeholder="Digite sua senha aqui..." name="senha" id="senha" value="<?= isset($dados[0]['senha']) ? $dados[0]['senha'] : '' ?>" />
                                <img src="./assets/img/img_senha.png" alt="Icone de ver senha!" title="Icone de ver senha" id="olho" class="icon-senha">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarMeusDados();">Salvar</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
    </div>
    <!-- Código JS para habilitar a visualização da Senha! -->
    <script>
        // Essa function converte o tipo de dados do input de senha para texto!

        $("#olho").mousedown(function() {
            $("#senha").attr("type", "text");
        });
        // Essa function converte o tipo de dados do input de texto para senha!
        $("#olho").mouseup(function() {
            $("#senha").attr("type", "password");
        });
    </script>
</body>

</html>