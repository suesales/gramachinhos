create database gramachinhos;

use gramachinhos;

create or replace table tb_criancas (
  id int primary key auto_increment,
  nome varchar(255),
  nomePai varchar(255),
  nomeMae varchar(255),
  dtNasc varchar(20),
  peso float,
  altura float,
  calcado float,
  nomeEscola varchar(255),
  serie varchar(50),
  autoSaidaExterna tinyint(1),
  autoImage tinyint(1),
  lograouro varchar(150),
  cep varchar(10),
  bairro varchar(150),
  cidade varchar(150),
  cerNasc  tinyint(1),
  rg tinyint(1),
  cpf tinyint(1),
  foto varchar(255),
  registro DATETIME
);

create or replace table tb_admin (
  id int primary key auto_increment,
  nome varchar(255),
  login varchar(10) not null,
  senha text not null,
  registro DATETIME
);

insert into tb_admin(nome, login, senha, registro) values ("Administrador do Sistema", "admin", md5('admin123'), now());
