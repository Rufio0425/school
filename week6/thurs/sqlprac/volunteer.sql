-- mockup volunteer database

drop database volunteer;
create database volunteer;

use volunteer;

-- Volunteer table

create table Volunteers(
	VolunteerID INT AUTO_INCREMENT Primary Key Not Null,
	FirstName varchar(255) Not Null,
	LastName varchar(255) Not Null,
	Phone varchar(255) Not Null,
	Email varchar(255)
);

-- Volunteers

insert into Volunteers (FirstName, LastName, Phone, Email) values('Sean', 'Aguirre', '480-926-6384', 'seanpeteraguirre@gmail.com');
insert into Volunteers (FirstName, LastName, Phone) values('Jenna', 'Connolly', '480-525-1122');
insert into Volunteers (FirstName, LastName, Phone, Email) values('Jordan', 'Slattery', '480-894-2222', 'jdawg@gmail.com');
insert into Volunteers (FirstName, LastName, Phone, Email) values('Zac', 'Webber', '480-665-2845', 'zacwebber@gmail.com');


-- Service Locations

create table Locations(
	LocationID INT AUTO_INCREMENT Primary Key Not Null,
	LocationName varchar(255) Not Null,
	Address varchar(255) Not Null,
	Phone varchar(255) Not Null
);

-- Locations

insert into Locations (LocationName, Address, Phone) values('St Vincent De Paul', '55 S. 7th St, Phoenix, AZ', '602-557-7742');
insert into Locations (LocationName, Address, Phone) values('International Refugee Committee', '785 W. Monroe St, Phoenix, AZ', '602-448-1958');
insert into Locations (LocationName, Address, Phone) values('St. Marys Food Bank', '10 N. Central St, Phoenix, AZ', '602-887-1144');
insert into Locations (LocationName, Address, Phone) values('Skate After School', '1255 N. 5th St, Mesa, AZ', '602-224-1258');