create database contacts;

create table users (
    id bigserial primary key ,
    username varchar(55)not null,
    password varchar(55) not null,
    email varchar(35) not null,
    phonenumber varchar(11) not null
);                                                                                                                     

ALTER TABLE table_name ADD column_name datatype;
ALTER TABLE users ADD tokens varchar(55);

create table phonebook(
    id bigserial primary key,
    username varchar(25),
    name varchar(25) ,
    phonenumber varchar(25),
    relation varchar(100)
);

