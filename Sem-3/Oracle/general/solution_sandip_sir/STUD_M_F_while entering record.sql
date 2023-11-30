declare
	v_grno number(3);
	v_name varchar2(30);
	v_age number(3);
	v_sex char(1);
begin
	v_grno:=&grno;
	v_name:='&v_name';
	v_age:=&age;
	v_sex:='&sex';

	if v_sex='M' or v_sex='m' then
		insert into stud_male 
		values
		(v_grno,v_name,v_age);
	else
		insert into stud_female 
		values
		(v_grno,v_name,v_age);
	end if;
end;
/