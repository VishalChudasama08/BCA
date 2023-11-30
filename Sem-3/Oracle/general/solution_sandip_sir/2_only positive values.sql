create table positive
(grno number(3),
name varchar2(30));

/**********raise_application_error syntax****************************/

raise_application_error(<error number>,<message in single quotes>);

error number can be from  -20000 to -20999


/***********trigger which allows only positive valuse************/

create or replace trigger positivevalue
before insert or update on positive
for each row
begin
	if :new.grno<0 then
		raise_application_error(-20000,'Please Enter Only Positive Value');
	end if;
end;
/
/*************************************************************/

insert into positive values(1,'abc');
insert into positive values(-1,'xyz');


/***********trigger which converts negative valuse in null************/

create or replace trigger positivevalue
before insert or update on positive
for each row
begin
	if :new.grno<0 then
		:new.grno:=null;
	end if;
end;
/