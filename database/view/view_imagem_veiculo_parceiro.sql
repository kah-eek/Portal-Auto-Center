/*
	VIEW DA IMAGEM DE VEÍCLOS DO PARCEIRO, POSSIBILITANDO A OBTENÇÃO DE TODOS AS IMAGENS VINCULADAS AO PARCEIRO ATRAVÉS DE SEU NOME (nome_fantazia e razao_social) e seu ID (id_parceiro)
*/
CREATE VIEW view_imagem_veiculo_parceiro AS 

SELECT 

/* tbl_imagem_veiculo_parceiro */
img_vei_parc.*,

/* tbl_veiculo_parceiro */
vei_parc.id_parceiro,


/* tbl_parceiro */
parc.nome_fantasia,
parc.razao_social

FROM tbl_imagem_veiculo_parceiro AS img_vei_parc 

/* tbl_veiculo_parceiro */
INNER JOIN tbl_veiculo_parceiro AS vei_parc
ON vei_parc.id_veiculo_parceiro = img_vei_parc.id_veiculo_parceiro

/* tbl_parceiro */
INNER JOIN tbl_parceiro AS parc
ON parc.id_parceiro = vei_parc.id_parceiro;