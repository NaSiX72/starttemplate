drop schema if exists Inf2ZH;
CREATE SCHEMA Inf2ZH DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
use Inf2ZH;

create table kollega
( id int primary key,
  nev varchar(45),
  szoba varchar(10),
  telszam int,
);

insert into kollega values('4','Csorba Kristóf','QB226',3702);
insert into kollega values('3','Ekler Péter','QB226',3702);
insert into kollega values('2','Almási Nóra','QB207',2870);
insert into kollega values('1','Táborszki Anna','QB207',2884);