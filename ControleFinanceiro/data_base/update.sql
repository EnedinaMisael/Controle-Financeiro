-- CRUD: Create | Read | Update |Delete.alter
-- ATUALIZAR dados (Update).

UPDATE tb_usuario
	SET nome_usuario = 'Alisson Rocha'
WHERE id_usuario = 3;

UPDATE tb_usuario
	SET email_usuario = 'alisson.rocha@gmail.com',
		senha_usuario = 'ali999'
WHERE id_usuario = 3;