begin
	for i in 1..5
	loop
		for j in 1..i
		loop
			dbms_output.put(j);
		end loop;
		dbms_output.new_line;
	end loop;

	/*dbms_output.put_line('Ashik');
	dbms_output.put_line(chr(9));
	dbms_output.put_line(chr(9));
	dbms_output.put_line(chr(9));
	dbms_output.put_line('Multani');*/
end;
/