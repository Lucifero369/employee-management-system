create database payroll;
use payroll;
create table employee(
client_id varchar(255),
LastName varchar(255),
FirstName varchar(255),
Email varchar(255),
Phonenumber varchar(255),
WorkingDays varchar(255),
image varchar(255),
primary key(client_id)
)

create table wages(
client_id varchar(255),
FirstName varchar(255),
WorkingDays varchar(255),
salary varchar(255)
)