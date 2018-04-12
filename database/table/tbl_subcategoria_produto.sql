CREATE TABLE tbl_subcategoria_produto
(
	id_subcategoria_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_categoria_produto INT NOT NULL,
    subcategoria VARCHAR(180) NOT NULL,
    CONSTRAINT fk_tbl_subcategoria_produto_id_categoria_produto FOREIGN KEY(id_categoria_produto) REFERENCES tbl_categoria_produto(id_categoria_produto)
);