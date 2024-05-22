create database agenda_compromisso;

use agenda_compromisso;

create table agenda(cod_evento int(2) primary key auto_increment,
					nome_evento varchar(50),
                    data_evento date,
                    hora_inicio time,
                    hora_fim time,
                    desc_evento varchar(100),
                    local_evento varchar(50),
                    resp_evento varchar(40));
CREATE TABLE  tb_dados (
  nome varchar(50) NOT NULL,
  senha varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_dados (nome,senha) values ("israel","123456");
insert into tb_dados (nome,senha) values ("Matheus","123");


select * from tb_dados;