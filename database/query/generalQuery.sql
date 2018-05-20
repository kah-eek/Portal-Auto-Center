USE db_auto_center;

DESCRIBE tbl_Produto;
SELECT * FROM tbl_Produto;
INNER JOIN tbl_categoria_produto AS ctg_prd ON ctg_prd.id_categoria_produto = tbl_produto.id_categoria_produto;