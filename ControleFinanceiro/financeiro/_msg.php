<?php

    if(isset($_GET['ret'])){
        $ret = $_GET ['ret'];
    }
    
    if (isset($ret)){
        switch ($ret){
            case 1;
            echo '<div class="alert alert-success">Ação realizada com SUCESSO!</div>';
            break;
            case 0;
            echo '<div class="alert alert-warning"> Preencher todos os campos OBRIGATÓRIOS!</div>';
            break;
            case -1;
            echo '<div class="alert alert-danger">Houve uma FALHA na operação, tente novamente mais tarde!</div>';
            break;
            case -2;
            echo '<div class="alert alert-warning"> A senha deve conter entre 6 e 8 caracteres!</div>';
            break;
            case -3;
            echo '<div class="alert alert-warning">As senhas devem ser iguais!</div>';
            break;
            case -4;
            echo '<div class="alert alert-warning">Este item não pode ser excluído, pois está em uso!</div>';
            break;
            case -5;
            echo '<div class="alert alert-warning"> Já existe um cadastro com esse E-MAIL!</div>';
            break;
            case -6;
            echo '<div class="alert alert-warning">Usuario não encontrado!</div>';
            break;
        }
    }