create table upperdata
(name varchar2(30),
city varchar2(30));

/*************triiger to insert all data in upper case**************************/

create or replace trigger upper_trigger
before insert or update on upperdata
for each row
begin
	:new.name:=upper(:new.name);
	:new.city:=upper(:new.city);
end;
/


/****************inserting data************/

insert into upperdata (name,city) values ('abc','rajkot');
insert into upperdata (name,city) values ('XYZ','Rajkot');
insert into upperdata (name,city) values ('pqr','RAJKOT');
