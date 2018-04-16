ALTER TABLE tbl_funcionario_pac ADD COLUMN log_funcionario_pac DATETIME NOT NULL DEFAULT now();

DESCRIBE tbl_funcionario_pac;