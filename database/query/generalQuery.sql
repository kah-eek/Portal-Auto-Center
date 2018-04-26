SELECT * FROM tbl_produto;

SELECT * FROM tbl_cliente;

SELECT * FROM view_cliente WHERE id_cliente = 1;

SELECT * FROM tbl_cor;

SELECT * FROM view_parceiro WHERE id_parceiro = 1;

SELECT * FROM tbl_modelo_produto;

SELECT * FROM tbl_nivel_usuario;

SELECT * FROM tbl_fabricante_produto;

SELECT * FROM tbl_categoria_produto;

SELECT * FROM tbl_parceiro WHERE nome_fantasia OR razao_social LIKE '%a%';

SELECT * FROM view_parceiro WHERE id_parceiro =1;

SELECT * FROM tbl_endereco;

SELECT * FROM tbl_funcionario_pac;

SELECT * FROM tbl_estado;

SELECT * FROM tbl_plano_contratacao;

SELECT * FROM view_produto;

SELECT * FROM tbl_sobre_empresa;

SELECT * FROM tbl_topico_sobre_empresa;

SELECT * FROM tbl_imagem_produto_parceiro;

SELECT * FROM tbl_produto;

SHOW TABLES;

CREATE DATABASE db_auto_center;

USE db_auto_center;

DROP DATABASE db_auto_center;

DESCRIBE tbl_parceiro;

SELECT  tp.nome, tp.preco, img.imagem FROM tbl_imagem_produto_parceiro as img INNER JOIN tbl_produto as tp;
