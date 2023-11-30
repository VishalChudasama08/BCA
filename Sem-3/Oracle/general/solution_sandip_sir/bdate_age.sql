declare
	bdate date;
	days number;
	leapyear number:=0;
begin
	bdate:='&bdate';

	days:=trunc(sysdate-bdate);
	--dbms_output.put_line(days);

	For i in extract(year from bdate) .. extract(year from sysdate)
	loop
		if mod(i,4)=0 then
			leapyear:=leapyear+1;
		end if;
	end loop;

	--dbms_output.put_line(leapyear);

	if days<=(18*365+leapyear) then
		dbms_output.put_line('you are not eligible for licence');
	else
		dbms_output.put_line('you are eligible for licence');
	end if;
end;
/
