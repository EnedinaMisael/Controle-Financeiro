<?php

    //classe com funcao de permitir o acesso do usuário
    // ainda nao temos progrmacao nem Banco de dados, execuçao simulada 

    class UtilDAO{

        // 1 passo inicia a sessao do usuario dando acesso a parte interna da aplicaçao

        private static function IniciarSessao(){
            if(!isset($_SESSION)){
                session_start();
            }
        }

        // 2 passo essa funcao vai identificar os dados do usuario para acessar a aplicaçao

        public static function CriarSessao($cod, $nome){
            self::IniciarSessao();

            $_SESSION['cod'] = $cod;
            $_SESSION['nome'] = $nome;
        }

        // 3 passo: vamos receber e identificar o nome do usuario para ser usado na aplicaçao

        public static function UsuarioLogado(){
            // Esse return 1, simula o Log de Acesso do Usuário de ID número 1 (Banco de Dados).
            // return 1; 
            self::IniciarSessao();

            return $_SESSION['cod'];
        }

        public static function NomeLogado(){
            self::IniciarSessao();
            
            return $_SESSION['nome'];
        }

        //ESSA FUNCAO IDENTIFICA OS DADOS DE PERMISAO E LIMPA, DESTROI A SESSAO
        
        public static function Deslogar(){
            self::IniciarSessao();

            unset($_SESSION['cod']);
            unset($_SESSION['nome']);

            header('location: login.php');
            exit;
        }

        //6 PASSO: ESSE MANTEM A SESSAO FUNCIONANDO > MONITORA SE EXITE DADOS DO USUARIO EM SESSAO, CASO NAO, REDIRECIONA PARA TELA DE LOGIN

        public static function VerificarLogado(){
            self::IniciarSessao();

            if(!isset($_SESSION['cod']) || $_SESSION['cod'] == ""){
                header('location: login.php');
                exit;
            }
        }
    }