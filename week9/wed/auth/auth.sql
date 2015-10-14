drop database if exists auth;

create database auth;

use auth;

create table user(
	id int auto_increment primary key not null,
	email varchar(255),
	password varchar(255),
	name varchar(255),
	remember_token varchar(255),
	created_at datetime,
	updated_at datetime
);