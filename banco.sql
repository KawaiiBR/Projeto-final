create database projeto_final;

use projeto_final

create TABLE usuarios
(
    id int not null PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) not null,
    usuario varchar(255) not null,
    email varchar(255) not null,
    senha varchar(255) not null
);

insert into usuarios (nome, usuario, email, senha) values ('Admin do Sistema', 'admin', 'admin@sp.senac.br', '1234');