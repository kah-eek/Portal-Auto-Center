SELECT * FROM tbl_veiculo_parceiro;

SELECT * FROM tbl_veiculo;

SELECT * FROM tbl_imagem_veiculo_parceiro;

SELECT * FROM tbl_cor;

SELECT * FROM tbl_tipo_veiculo;

SELECT * FROM tbl_modelo_veiculo;

SELECT * FROM tbl_fabricante;

SELECT * FROM tbl_parceiro;

SELECT 

/* tbl_imagem_veiculo_parceiro */
img_vei_parc.* ,

/* tbl_veiculo_parceiro */
vei_parc.id_parceiro,

/* tbl_parceiro */
parc.nome_fantasia,
parc.razao_social

FROM tbl_imagem_veiculo_parceiro AS img_vei_parc 

/* tbl_veiculo_parceiro */
INNER JOIN tbl_veiculo_parceiro AS vei_parc
ON vei_parc.id_veiculo_parceiro = img_vei_parc.id_veiculo_parceiro

<<<<<<< HEAD
/* tbl_parceiro */
INNER JOIN tbl_parceiro AS parc
ON parc.id_parceiro = vei_parc.id_parceiro;
=======
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
>>>>>>> 24ff58a6fbe296a108ee46f1bea09a7904aab102
