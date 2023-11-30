declare
	v_regtime number;
	v_actualtime number;
	v_overtime number;
begin
	v_regtime:=50;
	v_actualtime:=&v_actualtime;

	if v_actualtime>v_regtime then
		v_overtime:=
			v_actualtime-v_regtime;

		dbms_output.put_line
		('over time is '|| v_overtime);

	end if;
end;
/