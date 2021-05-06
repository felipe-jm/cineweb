INSERT INTO cidades (nome, estado) VALUES ('Cuiabá', 'MT');

INSERT INTO unidades (nome, cidade_id, endereco) VALUES ('Unidade Jardim das Américas', 1, 'Jardim das Américas');

INSERT INTO sessoes (numero, unidade_id) VALUES (1, 1);

INSERT INTO comidas (nome, unidade_id, peso, preco) VALUES ('Pipoca', 1, 500, 20);

INSERT INTO combos (nome, unidade_id, tipo, preco) VALUES ('Quiet Place 2 Combo', 1, 3, 50);

INSERT INTO promocoes (nome, preco, data_fim, data_inicio, unidade_id) VALUES (' Pipoca pela metade do preço', 20, '2021-05-1', '2021-05-30',1);

INSERT INTO clientes (nome, unidade_id, cpf, telefone) VALUES ('Fulano de Tal', 1, '99999999999', '65999999999');

INSERT INTO filmes (nome, duracao, unidade_id, sessao_id, categoria, classificacao) VALUES ('Quiet Place 2', 120, 1, 1, 'Terror', 10);

INSERT INTO assentos (numero, unidade_id, cliente_id, sessao_id, disponivel) VALUES (1, 1, 1, 1, '1');

INSERT INTO funcionarios (nome, cpf, telefone, unidade_id) VALUES ('Felipe', '11111111111', '11111111111', 1);
INSERT INTO funcionarios (nome, cpf, telefone, unidade_id) VALUES ('Fernanda', '22222222222', '22222222222', 1);
INSERT INTO funcionarios (nome, cpf, telefone, unidade_id) VALUES ('Carol', '33333333333', '33333333333', 1);