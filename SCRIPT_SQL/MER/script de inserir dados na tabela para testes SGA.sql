/* ---------------------INSERINDO  CLIENTE NA TABELA-----------------------------  */
insert into cliente (nome_cliente, cpf_cliente, data_nasc_cliente, telefone_cliente, endereco_cliente) values ("Maciel", "06361647137", '1997-07-27', "33084149", "Quadra 11 Conjunto 01 casa 13");
insert into cliente (nome_cliente, cpf_cliente, data_nasc_cliente, telefone_cliente, endereco_cliente) values ("Cleidson", "84545641", '1998-07-27', "33084149", "Quadra 12 Conjunto 01 casa 13");


/* ---------------------INSERINDO  FUNCIONARIO NA TABELA-----------------------------  */
insert into funcionario (nome_funcionario, cpf_funcionario,email_funcionario, telefone_funcionario, senha_funcionario) values ("TESTE", "0564649654", "FUNCIONARIO@HAMAOTLA", "993702537",  "12346");
insert into funcionario (nome_funcionario, cpf_funcionario,email_funcionario, telefone_funcionario, senha_funcionario) values ("ADM", "00000000000", "ADM@HMOTMAIL.COM", "00000000",  "ADM");

/* ---------------------INSERINDO  SERVIÇOS NA TABELA-----------------------------  */
insert into catalogo_servicos (nome_servico, valor_servico, descricao_servico ) values ("Unha pé e Mão", '25.25', "fknafafkafakfnakfnalfn");
insert into catalogo_servicos (nome_servico, valor_servico, descricao_servico ) values ("Escova", '30.50', "fkanflanfalonfalfn alfn");

/* ---------------------INSERINDO  STATUS DE PAGAMENTO NA TABELA-----------------------------  */
insert into status_pagamento (nome_pagamento) values ("PAGO");
insert into status_pagamento (nome_pagamento) values ("PENDENTE");

/* ---------------------INSERINDO  TIPO DE PAGAMENTO NA TABELA-----------------------------  */
insert into tipo_pagamento (nome) values ("Dinheiro");
insert into tipo_pagamento (nome) values ("Pix");
insert into tipo_pagamento (nome) values ("Débito");
insert into tipo_pagamento (nome) values ("Crédito");

/* ---------------------INSERINDO  PAGAMENTO NA TABELA-----------------------------  */
insert into pagamento (valor_pagamento, cod_cliente, cod_servico, cod_tipo_pagamento) values ('20.80', '1', '1', '2');
insert into pagamento (valor_pagamento, cod_cliente, cod_servico, cod_tipo_pagamento) values ('21.00', '2', '2', '1');

/* ---------------------INSERINDO  COR NA TABELA-----------------------------  */
insert into cor (nome_cor, referencia_cor) values ("Azul", "0000FF");
insert into cor (nome_cor, referencia_cor) values ("Preto", "0 , 0, 0");
insert into cor (nome_cor, referencia_cor) values ("Vermelho", "FF0000");

/* ---------------------INSERINDO  AGENDAMENTO NA TABELA-----------------------------  */
insert into agendamento (inicio_atend_agendamento, final_atend_agendamento, cod_cliente, cod_pagamento, cod_cor, cod_funcionario, cod_servico) values ('2021-04-25 09:25:00', '2021-04-25 10:25:00', '1', '2', '2', '2', '1');
insert into agendamento (inicio_atend_agendamento, final_atend_agendamento, cod_cliente, cod_pagamento, cod_cor, cod_funcionario, cod_servico) values ('2021-04-25 09:25:00', '2021-04-25 10:25:00', '1', '2', '1','2', '1');




