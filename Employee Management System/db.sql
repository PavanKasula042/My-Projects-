create database company;

create table users(
    id bigserial primary key not null,
    username varchar(55) not null,
    password varchar(55) not null,
    email varchar(55) not null,
    phonenumber varchar(55) not null,
    tokens varchar(25)
    );

   ----   drop table users;

   insert into users(username, password, email,phonenumber) values ('pavan','141bc86dfd5c40e3cc37219c18d471ca','pavan@gmail.com','7013309894');

   create table employee_details(
    id bigserial primary key ,

    first_name varchar(55) not null,
    last_name varchar(55) not null,
    aadhar_number varchar(55) not null,
    phone_number varchar(55) not null,
    department_id int not null,
    designation_id int not null
   );
   
   drop table  employee_details;

   insert into employee_details(first_name, last_name, aadhar_number,phone_number,department_id,designation

   create table designations(
    id bigserial primary key ,
    designation varchar(55) not null
   );
 

 insert into designations(designation) values('Senior Developer');
 insert into designations(designation) values('Junior Developer');
 insert into designations(designation) values('Associate Developer');

 insert into designations(designation) values('Senior Software Tester');
 insert into designations(designation) values('Junior Software Tester');
 insert into designations(designation) values('Quality Head');

 insert into designations(designation) values('UI Designer');
 insert into designations(designation) values('UX Designer');
 insert into designations(designation) values('Editor');

   insert into designations(designation) values('Senior Operations Head');
   insert into designations(designation) values('Junior Operations Head');
   insert into designations(designation) values('Delivery Head');

insert into designations(designation) values('HR head');
insert into designations(designation) values('HR junior');


insert into designations(designation) values('Senior legal advisor');
insert into designations(designation) values('Junior legal advisor');
insert into designations(designation) values('Senior legal associate');
insert into designations(designation) values('Junior legal associate');
insert into designations(designation) values('Lawyer');



   create table departments(
    id bigserial primary key ,
    department_name varchar(55) not null
   );
insert into departments(department_name) values('Develeper Department');
insert into departments(department_name) values('Testing Department');
insert into departments(department_name) values('Frontend Developers');
insert into departments(department_name) values('Operations Department');
insert into departments(department_name) values('Human Resources Department');
insert into departments(department_name) values('Legal Department');

drop table departments;
drop table designations;
drop table employee_details;