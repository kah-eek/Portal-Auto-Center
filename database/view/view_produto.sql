/*
	VIEW DE PRODUTO, POSSIBILITANDO A OBTENÇÃO DE DADOS BÁSICOS VINCULADOS AO PRODUTO
*/
ALTER VIEW view_produto AS 

SELECT 
/* PRODUTO */
pdrt.id_produto,
pdrt.conteudo_embalagem, 
pdrt.garantia,
pdrt.observacao,
pdrt.preco,
pdrt.descricao,
/* IMAGEM PRODUTO PARCEIRO */
img_pdrt_parc.imagem,
/* MODELO PRODUTO */
mdl_pdrt.modelo,
/* PARCEIRO */
parc.nome_fantasia,
parc.id_endereco,
parc.telefone,
parc.celular,
/* ENDERECO */
endrc.logradouro,
endrc.numero,
endrc.cidade,
endrc.id_estado,
endrc.cep,
endrc.bairro,
endrc.complemento,
/* ESTADO */
estd.estado,
/* CATEGORIA PRODUTO*/
ctg_pdrt.categoria,
ctg_pdrt.id_categoria_produto
FROM tbl_produto AS pdrt

INNER JOIN tbl_modelo_produto AS mdl_pdrt 
ON mdl_pdrt.id_modelo_produto = pdrt.id_modelo_produto

INNER JOIN tbl_parceiro AS parc 
ON parc.id_parceiro = pdrt.id_parceiro

INNER JOIN tbl_endereco AS endrc
ON endrc.id_edereco = parc.id_endereco

INNER JOIN tbl_estado AS estd
ON estd.id_estado = endrc.id_estado

INNER JOIN tbl_categoria_produto AS ctg_pdrt
ON ctg_pdrt.id_categoria_produto = pdrt.id_categoria_produto

INNER JOIN tbl_imagem_produto_parceiro AS img_pdrt_parc
ON img_pdrt_parc.id_imagem_produto_parceiro = pdrt.id_produto;
