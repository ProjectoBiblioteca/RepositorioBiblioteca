create database bibliotecaUCR;

use bibliotecaUCR;


create table tipo_usuarios(
id int auto_increment primary key,
tipo varchar(20) not null
);


insert into tipo_usuarios  (tipo) values ('Administrador');
insert into tipo_usuarios  (tipo) values ('Profesor');
insert into tipo_usuarios  (tipo) values ('Estudiante');

create table students(
id int auto_increment primary key,
carnet varchar(6) not null,
identidad varchar(11) not null,
nombre varchar(50) not null,
created datetime default null,
fecha_vencimiento datetime,
telefono varchar(10)default null,
direccion varchar(50)default null,
tipo_usuario_id int not null

);





create table managers(
id int auto_increment primary key,
nombre varchar(50) not null,
contraseña varchar(50) not null,
tipo_usuario_id int not null
);

create table editorials(id int auto_increment primary key,
editorial varchar(30) not null);



create table materias(id int auto_increment primary key,
materia varchar(30) not null
);

create table locations(id int auto_increment primary key,
lugar varchar(30) not null);



create table books(
id int auto_increment primary key,
ISBN int not null,
titulo varchar(30)not null,
descripcion varchar(50),
precio int,
location_id int not null,
materia_id int not null,
editorial_id int not null
);


insert into editorials (editorial) values ('Santillana');
insert into editorials (editorial) values ('Akal');
insert into editorials (editorial) values ('Phaidon');

insert into materias (materia) values ('Ciencias');
insert into materias (materia) values ('Matematicas');
insert into materias (materia) values ('Literatura');

insert into locations (lugar) values ('Biblioteca UCR Guapiles');
insert into locations (lugar) values ('Biblioteca UCR Grecia');
insert into locations (lugar) values ('Biblioteca Luis Demetrio');

create table ejemplars(
id int auto_increment primary key,
cantidad int not null,
book_id int not null
);


create table prestamos(
id int auto_increment primary key,
created datetime,
devuelto boolean,
book_id int,
student_id int
);


create table devueltos(
id int auto_increment primary key,
prestado datetime,
devuelto datetime,
book_id int,student_id int
);



-- delimiter $$
-- create trigger insertarDevolucion after 
-- insert on prestamos for each row
 -- begin 
  
 -- if new.devuelto = 1 then
 -- insert into devueltos(prestado,devuelto,book_id) values (new.created,now(),book_id);
-- end if;
 -- end $$
 -- delimiter ;

delimiter $$
create trigger editDevolucion after 
update on prestamos for each row
  begin 
  
  if new.devuelto = true then
	insert into devueltos(prestado,devuelto,book_id,student_id) values (new.created,now(),new.book_id,new.student_id);
	end if;
  end $$
  delimiter ;
  
-- drop trigger editDevolucion;
-- drop table prestamos;
-- drop table devueltos;