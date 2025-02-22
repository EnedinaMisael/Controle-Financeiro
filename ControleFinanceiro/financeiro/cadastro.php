<?php

require_once 'UsuarioDAO.php';

    if(isset($_POST['btnCadastrar'])) {
        $nomeUsuario = trim($_POST['nomeUsuario']);
        $emailUsuario = trim($_POST['emailUsuario']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->CriarCadastro($nomeUsuario, $emailUsuario, $senha, $repSenha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br />
                <br />
                <h2>Cadastrar uma Conta.</h2>
                <h5>(Crie uma Conta em nosso Sistema de Controle Financeiro).</h5>
                <br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Preencha todos os dados:</strong>
                    </div>
                    <div class="panel-body">
                        <?php include_once '_msg.php' ?>
                        <br />
                        <form role="form" action="cadastro.php" method="post">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nomeUsuario" id="nomeUsuario" value="<?= isset($nomeUsuario) ? $nomeUsuario : '' ?>" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="emailUsuario" id="emailUsuario" value="<?= isset($emailUsuario) ? $emailUsuario : '' ?>" />
                            </div>
                            <span style="font-size: 10px; font-style: italic;">"A Senha deve conter entre 6 e 8 caracteres!"</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <div class="box-senha">
                                    <input type="password" class="form-control" placeholder="Digite sua Senha..." name="senha" id="senha" value="<?= isset($senha) ? $senha : '' ?>" />
                                    <img src="./assets/img/img_senha.png" alt="Icone de ver senha!" title="Icone de ver senha!" id="olho" class="icon-senha">
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <div class="box-senha">
                                    <input type="password" class="form-control border-camp" placeholder="Digite novamente sua Senha..." name="repSenha" id="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>" />
                                    <img src="./assets/img/img_senha.png" alt="Icone de ver senha!" title="Icone de ver senha!" id="olho_2" class="icon-senha">
                                </div>
                            </div>
                            <button class="btn btn-success" name="btnCadastrar" onclick="return ValidarCadastro()">Cadastrar</button>
                        </form>
                        <hr />
                        <span>Já possui uma Conta?</span> <a href="login.php"> Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Código JS para habilitar a visualizaçao da Senha   -->

    <script> 
        // Essa function converte o tipo de dado do imput de senha para texto
        $("#olho").mousedown(function(){
        $("#senha").attr("type", "text");
        });

        // Essa function converte o tipo de dado do input de texto para senha
         $("#olho").mouseup(function(){
        $("#senha").attr("type", "password");
        });
    
        $("#olho_2").mousedown(function(){
        $("#repSenha").attr("type", "text");
        });

        // Essa function converte o tipo de dados do input de texto para senha!
        $("#olho_2").mouseup(function(){
        $("repSenha").attr("type", "password");
        });
    </script>

</body>
</html>