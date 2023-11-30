declare
	v_city stud.city%type;
	v_std stud.standard%type;
	stud_rec stud%rowtype;

	CURSOR stud_cur(p_city stud.city%type,
	STD stud.standard%type) IS
	select * from stud where city=p_city 
	and standard=std;
begin
	v_city:='&v_city';
	v_std:=&v_std;
	Open stud_cur(v_city,v_std);

	loop
		FETCH stud_cur INTO stud_rec;
		exit when stud_cur%notfound;
           dbms_output.put_line('grno :'||stud_rec.grno);
	   dbms_output.put_line('name :'||stud_rec.name);
	   dbms_output.put_line('city :'||stud_rec.city);
	   dbms_output.put_line('standard :'||
	   stud_rec.standard);		
	end loop;
	CLOSE stud_cur;
end;
/