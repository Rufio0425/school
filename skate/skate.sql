drop database if exists skate;
create database skate;

use skate;

create table volunteer(
	id int auto_increment primary key not null,
	first_name varchar(255) not null,
	last_name varchar(255) not null,
	email varchar(255) not null,
	profile_image varchar(255) 
);

insert into volunteer(first_name, last_name, email) values('Sean', 'Aguirre', 'seanpeter.aguirre@gmail.com');

create table volunteer_image(
	volunteer_id int not null,
	image_name varchar(255) not null
);

create table volunteer_video(
	volunteer_id int not null,
	video_url varchar(255) not null
);

create table admin(
	id int auto_increment primary key not null,
	first_name varchar(255) not null,
	last_name varchar(255) not null,
	email varchar(255) not null
);

insert into admin(first_name, last_name, email) values('Tim', 'Ward', 'tward@gmail.com');

create table sponsor(
	id int auto_increment primary key not null,
	sponsor_name varchar(255) not null,
	sponsor_image varchar(255) not null
);
