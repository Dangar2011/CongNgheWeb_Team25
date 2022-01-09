create database meetup
create table Users(
idUser int primary key identity,
username varchar(50),
pass varchar(50),
email varchar(50),
avatar image,
gender varchar(10) default 'Male',
birthday date
)
drop table Users
create table Post(
idPost int Primary key identity,
idUser int,
idPCate int,
images image,
content text,
created date not null default(getdate()),
openDay date not null,
addresspost varchar(50)
)

create table PostCategory(
idPCate int primary key identity,
namePC varchar(50),
)
create table Comments(
idCmt int primary key identity,
idUser int,
idPost int,
content text
)
create table Groups(
idGroups int primary key identity,
idUser int,
idPost int
)
--drop table Groups
--the hien cmt do ai viet
alter table Comments
add constraint fk_cmt_user foreign key (idUser) references Users(idUser)
--the hien post do ai viet
alter table Post
add constraint fk_post_user foreign key (idUser) references Users(idUser)
--the hien post thuoc danh muc gi
alter table Post
add constraint fk_pc_post foreign key (idPCate) references PostCategory(idPCate)
--the hien cmt o bai post nao
alter table Comments
add constraint fk_cmt_post foreign key (idPost) references Post(idPost)
--the hien group co user nao
alter table Groups
add constraint fk_groups_user foreign key (idUser) references Users(idUser)
--the hien group co nhieu post
alter table Groups
add constraint fk_groups_post foreign key (idPost) references Post(idPost)
 

--EXEC sp_helpconstraint Groups
