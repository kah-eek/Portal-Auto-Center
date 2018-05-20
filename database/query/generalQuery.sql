USE db_auto_center;

SELECT * FROM tbl_produto
INNER JOIN tbl_categoria_produto AS ctg_prd ON ctg_prd.id_categoria_produto = tbl_produto.id_categoria_produto
INNER JOIN tbl_modelo_produto AS mdl_prd ON mdl_prd.id_modelo_produto = tbl_produto.id_modelo_produto;