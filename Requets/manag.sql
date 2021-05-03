create database manag;
use manag;
create table car(id int AUTO_INCREMENT, prix int, model char(50), unique(id), primary key(id))
drop Table car;
insert into car (prix, model) value(4000000, "Dacia S.CH")
insert into car (prix, model) value(10000, "Electric Self Drive")
insert into car (prix, model) value(300000,"Honda 50"),(270000,"Ferrari 0.5"),(900000000,"Bugatti SoliCode Edition")
select *from car



