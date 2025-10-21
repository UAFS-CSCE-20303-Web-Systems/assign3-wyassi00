drop database if exists cs2033;
drop user if exists 'cs2033user'@'localhost';
create database cs2033;
use cs2033;

create user 'cs2033user'@'localhost' identified by 'cs2033pass';
grant all on cs2033.* to 'cs2033user'@'localhost';

create table contacts(
   contactID int AUTO_INCREMENT,
   username varchar(50),
   email varchar(120),
   primary key(contactID)
)engine=innodb;

insert into contacts(username,email) values('Jim Smith','jim.smith@gmail.com');
insert into contacts(username,email) values('Mary Jones','mjones@gmail.com');
insert into contacts(username,email) values('Rick Wilson','rick.wilson@gmail.com');
insert into contacts(username,email) values('Kim Johnson','kjohnson@gmail.com');
insert into contacts(username,email) values('Brian Williams','bwilliams@gmail.com');
