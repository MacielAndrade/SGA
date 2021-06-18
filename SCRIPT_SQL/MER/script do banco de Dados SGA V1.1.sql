drop database SGA;

create database SGA;
use SGA;
CREATE TABLE funcionario (
cod_funcionario INTEGER PRIMARY KEY auto_increment,
nome_funcionario VARCHAR(30),
cpf_funcionario VARCHAR(11) unique key,
email_funcionario VARCHAR(30),
telefone_funcionario VARCHAR(10),
senha_funcionario VARCHAR(50)
);

CREATE TABLE status_pagamento (
cod_pagamento INTEGER PRIMARY KEY auto_increment,
nome_pagamento VARCHAR(10)
);

CREATE TABLE cor (
cod_cor INTEGER PRIMARY KEY auto_increment,
nome_cor VARCHAR(10),
referencia_cor VARCHAR(10)
);


CREATE TABLE agendamento (
cod_agendamento integer PRIMARY KEY auto_increment,
inicio_atend_agendamento DATETIME,
final_atend_agendamento DATETIME,
cpf_cliente VARCHAR(11),
cod_cliente INTEGER,
cod_pagamento INTEGER,
cod_funcionario INTEGER,
cod_servico INTEGER,
cod_cor INTEGER,
FOREIGN KEY(cod_cor) REFERENCES cor (cod_cor),
FOREIGN KEY(cod_pagamento) REFERENCES status_pagamento (cod_pagamento),
FOREIGN KEY(cod_funcionario) REFERENCES funcionario (cod_funcionario)
);

CREATE TABLE cliente (
cod_cliente INTEGER primary key auto_increment,
nome_cliente VARCHAR(30),
cpf_cliente VARCHAR(11) unique key,
data_nasc_cliente VARCHAR(10),
telefone_cliente VARCHAR(10),
endereco_cliente VARCHAR(70)
);


CREATE TABLE catalogo_servicos (
cod_servico INTEGER PRIMARY KEY auto_increment,
nome_servico VARCHAR(20),
valor_servico DECIMAL(7,2),
descricao_servico VARCHAR(300)
);

CREATE TABLE tipo_pagamento (
cod_tipo_pagamento integer PRIMARY KEY auto_increment,
nome VARCHAR(10)
);

CREATE TABLE pagamento (
cod_pagamento INTEGER PRIMARY KEY auto_increment,
valor_pagamento DECIMAL(7,2),
cod_cliente INTEGER,
cod_servico INTEGER,
cod_tipo_pagamento INTEGER,
FOREIGN KEY(cod_cliente) REFERENCES cliente (cod_cliente),
FOREIGN KEY(cod_servico) REFERENCES catalogo_servicos (cod_servico),
FOREIGN KEY(cod_tipo_pagamento) REFERENCES tipo_pagamento (cod_tipo_pagamento)
);

ALTER TABLE agendamento ADD FOREIGN KEY(cod_cliente) REFERENCES cliente (cod_cliente);
ALTER TABLE agendamento ADD FOREIGN KEY(cod_servico) REFERENCES catalogo_servicos (cod_servico);

