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