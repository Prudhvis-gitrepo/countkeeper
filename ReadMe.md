This web app is to keep track of questions done.

--
-- Database name: countkeeper
--

--There are two tables in this database one for user and one for topics

--create table user(id int auto_increment primary key,user_name varchar(40),email varchar(254));
--create table topics(id int auto_increment primary key,user_id int, topic_name varchar(30) not null, count int not null, constraint `fk-user` foreign key (user_id) references user(id));