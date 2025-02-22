-- CRUD: Create | Read | Update |Delete.alter
-- EXCLUIR dados (Delete).

-- Exclusão de TODO BANCO DE DADOS
DROP DATABASE db_exemplo;

-- Exclusão de TABELA do Banco de Dados

DROP TABLE tb_exemplo;

DELETE FROM tb_usuario WHERE id_usuario = 1;

DELETE FROM tb_categoria WHERE id_categoria = 1;

DELETE FROM tb_movimento WHERE id_movimento IN (1, 2, 3, 4);

DELETE FROM tb_movimento WHERE id_movimento IN (1, 6, 7, 12) ;
