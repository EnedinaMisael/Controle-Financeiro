<?php
    require_once './UtilDAO.php';
    UtilDAO::VerificarLogado();
    require_once './EmpresaDAO.php';

    if (isset ($_POST['btnSalvar'])){
        $nomeEmpresa = trim($_POST['nomeEmpresa']);
        $telefone = trim($_POST['telefone']);
        $endereco = trim($_POST['endereco']);

        $objDAO = new EmpresaDAO();
        $ret = $objDAO->CadastrarEmpresa ($nomeEmpresa, $telefone, $endereco);

    }

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
                        <h2>Cadastrar Empresas.</h2>
                        <h5>Aqui você pode cadastrar todas as suas Empresas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <form action="nova_empresa.php" method="post">
                <div class="form-group">
                    <label>Digite o Nome da Empresa:</label>
                    <input class="form-control" placeholder="Digite o Nome da Empresa aqui..." name="nomeEmpresa" id="nomeEmpresa" value="<?= isset($nomeEmpresa) ? $nomeEmpresa :'' ?>"/>
                </div>
                <div class="form-group">
                    <label>Digite o Telefone (WhatsApp):</label>
                    <input type="number" class="form-control" placeholder="Digite o Telefone aqui..." name="telefone" id="telefone" value="<?= isset ($telefone) ? $telefone : '' ?>" />
                </div>
                <div class="form-group">
                    <label>Digite o Endereço:</label>
                    <input class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco" value="<?= isset ($endereco) ? $endereco :'' ?>"/>
                </div>
                <button class="btn btn-success" name="btnSalvar" onclick="return ValidarEmpresa();">Salvar</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>