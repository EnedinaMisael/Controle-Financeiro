<?php
  
    require_once 'conexao.php';
    require_once 'UtilDAO.php';
    
    
    class CategoriaDAO extends Conexao{
        public function CadastrarCategoria($nomeCat){
            if ($nomeCat == ''){
                return 0;
            }else{
                //return = 1;

                // 1 passo: criar a chamada de recursos da classe conexao (herança)
                $conexao = parent::retornarConexao();

                // 2 passo: criar um inject script SQL, que no PDO vai executar no banco de dados
                $comando_sql = 'INSERT INTO tb_categoria (nome_categoria, id_usuario) VALUES (?,?);';

                // 3 passo: criar um objeto com recursos da funçao nativa do php PDO
                $sql = new PDOStatement();

                // 4 passo: preparar a conexao do script SQL via PDO
                $sql = $conexao->prepare($comando_sql);

                // 5 passo: realiza validaçao dos dados que serao inseridos na tABELA DO BANCO DE DADOS
                $sql->bindValue(1, $nomeCat);
                $sql->bindValue (2, UtilDAO::UsuarioLogado());

                // 6 passo: realiza a tentativa de execuçao dos processos desenvolvidos ou realia a trataçao dos possiveis bugs
                try{
                    $sql->execute();
                    return 1;
                } catch (Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarCategoria(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_usuario = ? ORDER BY nome_categoria ASC;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }

        public function DetalharCategoria($idCategoria){
            if($idCategoria == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();
                $comando_sql = 'SELECT id_categoria, nome_categoria FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';
                $sql = new PDOStatement();
                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $idCategoria);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                return $sql->fetchAll();
            }
        }

        public function AlterarCategoria($nomeCat, $idCategoria){
            if ($nomeCat == '' || $idCategoria == ''){
                return 0;
            }else{
                //return 1;

                $conexao = parent::retornarConexao();

                $comando_sql = 'UPDATE tb_categoria SET nome_categoria = ? WHERE id_categoria = ? AND id_usuario = ?';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $nomeCat);
                $sql->bindValue(2, $idCategoria);
                $sql->bindValue(3, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ExcluirCategoria($idCategoria){
            if($idCategoria == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'DELETE FROM tb_categoria WHERE id_categoria = ? AND id_usuario = ?';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $idCategoria);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -4;
                }

            }
            
        }

    }