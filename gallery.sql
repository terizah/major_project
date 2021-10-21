drop database if exists Gallery;
create database Gallery;
use Gallery;

create table artefact(
	artefact_id serial primary key,
    membername text,
    title text,
    type text,
    description text,
    year year,
    price int,
    imagename text);
	
create table member(    
		user_id serial primary key,
		membername varchar(20),
		password char(40),
		reg_date datetime);
		
insert into user valuse(null, 'admin', SHA('friday123'));