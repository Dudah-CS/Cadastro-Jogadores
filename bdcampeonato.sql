-- bdcampeonato 
CREATE TABLE tbposicao (
  codPosicao int(11) PRIMARY KEY AUTO_INCREMENT,
  posicao varchar(50)  NULL
); 
CREATE TABLE tbstatus (
  codStatus int(11) PRIMARY KEY AUTO_INCREMENT,
  status varchar(20)  NULL
); 

CREATE TABLE tbtime (
  codTime int(11) PRIMARY KEY AUTO_INCREMENT,
  nomeTime varchar(50)  NULL
); 
CREATE TABLE tbjogador (
  codJogador int(11) PRIMARY KEY AUTO_INCREMENT,
  nomeJogador varchar(50)  NULL,
  codPosicao int(11)NULL,
  idadeJogador int(11)  NULL,
  alturaJogador varchar(5)  NULL,
  pesoJogador varchar(5)  NULL,
  FOREIGN KEY(codPosicao) REFERENCES tbposicao(codPosicao)
);
CREATE TABLE tbjogadortime (
  codJogadorTime int(11) PRIMARY KEY AUTO_INCREMENT,
  codJogador int(11)  NULL,
  codTime int(11)  NULL,
  codStatus int(11)  NULL,
  dataCadastro varchar(10)  NULL,
  horaCadastro varchar(8)  NULL,
  FOREIGN KEY(codJogador) REFERENCES tbjogador(codJogador),
  FOREIGN KEY(codTime) REFERENCES tbtime(codTime),
  FOREIGN KEY(codStatus) REFERENCES tbstatus(codStatus)
);


