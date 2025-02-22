-- CRUD: Create | Read | Update |Delete.alter
-- Cadastro de dados (create).

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Ana Maria', 'ana_maria@hotmail.com', 'ana321', '2024-11-12');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Paulo Roberto', 'paulo.roberto@gmail.com', 'plo213', '2024-11-12');

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Faculdade', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 2);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Internet', 2);
INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2024-11-19', 1600

