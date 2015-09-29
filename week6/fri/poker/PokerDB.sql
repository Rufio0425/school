-- Poker Database

drop database if exists poker;
create database poker;
use poker;

create table Players(
	playerID int auto_increment primary key not null,
	playerName varchar(255) not null,
	rank int not null
);

insert into Players (playerName, rank) values ("Joe Kuether", 1);
insert into Players (playerName, rank) values ("Jamie Gould", 2);
insert into Players (playerName, rank) values ("Phil Helmuth", 3);
insert into Players (playerName, rank) values ("Dan Smith", 3);

create table Games(
	gameID int auto_increment primary key not null,
	gameName varchar(255) not null,
	startTime int(11) not null,
	state int not null
);

insert into Games (gameName, startTime, state) values ("Texas Hold em", 1443199640, 0);
insert into Games (gameName, startTime, state) values ("Texas Hold em", 1446134400, 1);
insert into Games (gameName, startTime, state) values ("Five Card", 1451404800, 1);

create table GamePlayers(
	gameID int not null,
	playerID int not null
);

insert into GamePlayers (gameID, playerID) values (1,1);
insert into GamePlayers (gameID, playerID) values (1,2);
insert into GamePlayers (gameID, playerID) values (1,3);
insert into GamePlayers (gameID, playerID) values (2,3);
insert into GamePlayers (gameID, playerID) values (2,4);

Select *
from
	GamePlayers as gp,
	Players as p
where
	gp.playerID = p.playerID and
	gp.gameID = 1;