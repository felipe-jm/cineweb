DROP TABLE IF EXISTS `funcionarios`;
DROP TABLE IF EXISTS `comidas`;
DROP TABLE IF EXISTS `filmes`;
DROP TABLE IF EXISTS `sessoes`;
DROP TABLE IF EXISTS `assentos`;
DROP TABLE IF EXISTS `combos`;
DROP TABLE IF EXISTS `promocoes`;
DROP TABLE IF EXISTS `clientes`;
DROP TABLE IF EXISTS `unidades`;
DROP TABLE IF EXISTS `cidades`;

CREATE TABLE IF NOT EXISTS `cidades` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    estado VARCHAR(2)
);

CREATE TABLE IF NOT EXISTS `unidades` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (cidade_id) REFERENCES cidades(id),
    nome VARCHAR(200) NOT NULL,
    endereco text(200)
);

CREATE TABLE IF NOT EXISTS `clientes` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    nome VARCHAR(200) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    telefone VARCHAR(11)
);

CREATE TABLE IF NOT EXISTS `promocoes` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    nome VARCHAR(200) NOT NULL,
    data_fim DATETIME,
    data_inicio DATETIME,
    preco double
);

CREATE TABLE IF NOT EXISTS `combos` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    nome VARCHAR(200) NOT NULL,
    tipo int(6),
    preco float
);

CREATE TABLE IF NOT EXISTS `sessoes` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    numero int(6) UNSIGNED NOT NULL
);

CREATE TABLE IF NOT EXISTS `assentos` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    cliente_id INT(6) UNSIGNED, 
    sessao_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (sessao_id) REFERENCES sessoes(id),
    numero INT(6) UNSIGNED NOT NULL,
    disponivel boolean NOT NULL
);

CREATE TABLE IF NOT EXISTS `filmes` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    sessao_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    FOREIGN KEY (sessao_id) REFERENCES sessoes(id),
    nome VARCHAR(200) NOT NULL,
    duracao int(6) UNSIGNED,
    categoria VARCHAR(25),
    classificacao int(6)
);

CREATE TABLE IF NOT EXISTS `comidas` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    nome VARCHAR(200) NOT NULL,
    peso double,
    preco double
);

CREATE TABLE IF NOT EXISTS `funcionarios` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    unidade_id INT(6) UNSIGNED, 
    FOREIGN KEY (unidade_id) REFERENCES unidades(id),
    nome VARCHAR(200) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    telefone VARCHAR(11)
);
