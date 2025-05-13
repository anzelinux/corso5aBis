create database crowfounding;

use crowfounding;

create table progetto (

cod_progetto smallint not null,
titolo varchar(60) not null,
presentazione varchar (100) not null,
obiettivi varchar(60) not null,
soglia decimal(7,2) default 5000.00 not null,
ricompensa varchar(50) not null, 
data_inizio date not null,
scadenza date not null,
beneficiari varchar(30) not null,
primary key (cod_progetto)

);  

create table finanzia ( cod_operazione smallint AUTO_INCREMENT , data date not null, importo decimal(7,2) not null, modalita varchar(10) not null, cod_fiscale char(16) not null, cod_progetto smallint not null, primary key (cod_operazione), foreign key (cod_fiscale) references donatore(cod_fiscale), foreign key (cod_progetto) references progetto(cod_progetto) )

create table donatore (
cod_fiscale char(16) not null,
data_nascita date not null,
luogo_nascita varchar(30) not null,
indirizzo varchar(50) not null, 
email varchar(50) not null,
cognome varchar(50) not null,
nome varchar(50) not null,
check (data_nascita>= date(2007-05-13))
primary key (cod_fiscale)

);