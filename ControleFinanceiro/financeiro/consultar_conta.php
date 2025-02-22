<?php

    require_once './UtilDAO.php';
    UtilDAO::VerificarLogado();
    require_once './ContaDAO.php';

    $objDAO = new ContaDAO();
    $conta  = $objDAO->ConsultarConta();

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
                        <h2>Consultar Contas Bancárias.</h2>
                        <h5>Aqui você pode realizar a consulta de todas as Contas Bancárias cadastradas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Essas são as Contas Bancárias cadastradas:</span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nome do Banco</th>
                                        <th>Agência</th>
                                        <th>Número da Conta</th>
                                        <th>Saldo (R$)</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($conta as $ct){?>
                                        <tr>
                                            <td><?= $ct ['banco_conta']?></td>
                                            <td><?= $ct ['agencia_conta'] ?></td>
                                            <td><?= $ct ['numero_conta']?></td>
                                            <td>R$<?= number_format($ct ['saldo_conta'], 2, ',', '.')?></td>
                                            <td><a href="alterar_conta.php?cod=<?= $ct['id_conta']?>" class="btn btn-warning">Alterar</a></td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>