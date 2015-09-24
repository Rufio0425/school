-- pos.sql Point of Sales.....

drop database pos;
create database pos;

use pos;

create table Items(
	ItemID INT AUTO_INCREMENT Primary Key Not Null,
	Description varchar(255) Not Null,
	Cost numeric(5,2) Not Null
);

insert into Items (description,cost)values ("Tube",5);
insert into Items (description,cost) values ("Long Tube",7);
insert into Items (description,cost) values ("Dog",2);
insert into Items (description,cost) values ("Hairy Spider",35);


-- Customers Table....

create table Customers(
	CustomerID INT Auto_Increment Primary Key Not Null,
	Email varchar(255) Not Null,
	ShippingAddress varchar(255) Not Null,
	BillingAddress varchar(255) Not Null,
	FirstName varchar(255) Not Null,
	LastName varchar(255) Not Null
);

-- Add data to Customers....
insert into Customers (email, shippingaddress, billingaddress, firstname, lastname) values ('joe@gmail.com', '123 Main St.', '456 Main St.', 'Joe', 'Smith');
insert into Customers (email, shippingaddress, billingaddress, firstname, lastname) values ('Bryan@gmail.com', '222 Maine St.', '45 Main St.', 'Bryan', 'Smith');
insert into Customers (email, shippingaddress, billingaddress, firstname, lastname) values ('Kyle@gmail.com', '333 Main St.', '46 Main St.', 'Kyle', 'Smith');
insert into Customers (email, shippingaddress, billingaddress, firstname, lastname) values ('Laura@gmail.com', '1 Main St.', '56 Main St.', 'Laura', 'Smith');

-- Orders Table.....

create table Orders(
	OrderID INT Auto_Increment Primary Key Not Null,
	OrderDate DATE Not Null,
	CustomerID INT Not Null
);

-- Add data to Orders...
insert into Orders (OrderDate, CustomerID) values ('2015-01-01', 1);
insert into Orders (OrderDate, CustomerID) values ('2015-01-01', 2);
insert into Orders (OrderDate, CustomerID) values ('2015-01-02', 1);
insert into Orders (OrderDate, CustomerID) values ('2015-01-02', 2);

-- Order Items Table...

create table OrdersItems(
	OrderID INT Not Null,
	ItemID INT Not Null,
	ItemQty INT Not Null
);

insert into OrdersItems (OrderID, ItemID, ItemQty) values (1,10, 12);
insert into OrdersItems (OrderID, ItemID, ItemQty) values (1,11, 6);
insert into OrdersItems (OrderID, ItemID, ItemQty) values (2,18, 5);
insert into OrdersItems (OrderID, ItemID, ItemQty) values (3,11, 5);
insert into OrdersItems (OrderID, ItemID, ItemQty) values (3,66, 5);
insert into OrdersItems (OrderID, ItemID, ItemQty) values (4,66, 1);

-- New Customer!

insert into Customers (email, shippingaddress, billingaddress, firstname, lastname) values('billy@hotmail.com', '255 E. Windsor Ln.', '255 E Pikachu Rd.', 'Billy', 'CoolGuy');