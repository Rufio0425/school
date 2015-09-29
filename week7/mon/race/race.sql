-- making race database
drop database if exists race;
create database race;
use race;

create table races(
	raceID int auto_increment primary key not null,
	raceName varchar(255) not null,
	startDate int(11) not null,
	location varchar(255) not null,
	length varchar(255) not null
);

insert into races (startDate, raceName, location, length) values (1446049120, 'Race The Heat','Phoenix', '5 Miles');
insert into races (startDate, raceName, location, length) values (1444925920, 'Old Town Run Around','Gilbert', '10 Miles');
insert into races (startDate, raceName, location, length) values (1452874720, 'Escape L.A.','Los Angeles', '21 Miles');

create table racers(
	racerID int auto_increment primary key not null,
	age int not null,
	name varchar(255) not null
);

insert into racers (age, name) values (30, 'Brian');
insert into racers (age, name) values (26, 'Sean');
insert into racers (age, name) values (36, 'Daniel');
insert into racers (age, name) values (28, 'Chris');

create table raceRacers(
	raceID int not null,
	racerID int not null
);

insert into raceRacers (raceID, racerID) values (1,2);
insert into raceRacers (raceID, racerID) values (1,1);
insert into raceRacers (raceID, racerID) values (2,2);
insert into raceRacers (raceID, racerID) values (2,3);
insert into raceRacers (raceID, racerID) values (3,4);
insert into raceRacers (raceID, racerID) values (3,3);

select * from racers as r, raceRacers as rr where r.racerID = rr.racerID and rr.raceID = 1;