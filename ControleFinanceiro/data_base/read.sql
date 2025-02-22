-- CRUD: Create | Read | Update |Delete.alter
-- Pesquisa de dados (Read).
-- O comando * significa TODOS OS DADOS do local selecionado

SELECT * FROM tb_usuario;

SELECT * FROM tb_categoria;

SELECT * FROM tb_empresa;

SELECT * FROM tb_conta;

SELECT * FROM tb_movimento;

SELECT * FROM tb_categoria WHERE id_usuario = 1;

SELECT * FROM tb_categoria WHERE id_usuario = 2;

SELECT * FROM tb_usuario WHERE nome_usuario LIKE '%c%';

SELECT nome_usuario, data_cadastro FROM tb_usuario WHERE data_cadastro BETWEEN '2024-11-02' AND '2024-11-05';

-- relatórios com Inner Join :
-- Consulta geral entre Tabelas relacionadas.
SELECT  nome_usuario, nome_categoria
	FROM tb_usuario
INNER JOIN tb_categoria
	ON tb_categoria.id_usuario = tb_usuario.id_usuario;

SELECT nome_usuario, nome_categoria, saldo_conta
	FROM tb_usuario
INNER JOIN tb_categoria
	ON tb_categoria.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_conta
	ON tb_conta.id_usuario = tb_usuario.id_usuario;
    
SELECT nome_usuario, nome_categoria, banco_conta, saldo_conta
	FROM tb_usuario
INNER JOIN tb_categoria
	ON tb_categoria.id_usuario = tb_usuario.id_usuario
INNER JOIN tb_conta
	ON tb_conta.id_usuario = tb_usuario.id_usuario;


