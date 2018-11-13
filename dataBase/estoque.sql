/***********************************************************/
/* DRIVE:  MySQL                                           */
/* DATABASE:  estoque                                      */
/* Created on:  11/11/2018                                 */
/***********************************************************/

CREATE DATABASE estoque;
use estoque;

--
-- Table: Categoria
--
CREATE TABLE categorias
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);
INSERT INTO categorias (nome) VALUES
('Livros'),
('Jogos'),
('Filmes'),
('Revistas');
--
-- Table: Produto
--
CREATE TABLE produtos
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  preco DOUBLE(9,2) NOT NULL,
  quantidade INT NOT NULL,
  categoria_id INT NOT NULL,
  PRIMARY KEY(id)
);
INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES
('O Senhor dos Anéis, Trilogia Completa', 119.50, 10, 3),
('Batman Arkahan City', 65.99, 7, 2),
('Jogador Nº 1', 29.90, 5, 1),
('As Cronicas de Gelo e Fogo - 5 Livros', 199.99, 2, 1),
('O Poderoso Chefão', 89.90, 1, 3);
--
--FOREIGN KEY categoria_produto
--
ALTER TABLE produtos
ADD CONSTRAINT fk_categorias
FOREIGN KEY (categoria_id)
REFERENCES categorias(id);
--
-- Table: Usuario
-- Encriptado pelo site: https://www.md5online.org/md5-encrypt.html
-- senha padrão: 123456
CREATE TABLE usuarios
(
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY(id)
);
INSERT INTO usuario (email, senha) VALUES
  ('jorge.vmachado@hotmail.com','e10adc3949ba59abbe56e057f20f883e');



