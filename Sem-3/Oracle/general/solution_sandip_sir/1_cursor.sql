CREATE TABLE stud 
(grno number (4),
 Name varchar2(25),
 Standard number(2),
 Birthdate date,
 City varchar2(25));

/**** INSERTING THE DATA INTO STUD TABLE  *******/

INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (1,'MAHESH',10,'3-JAN-1993','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (2,'NARESH',10,'4-Apr-1993','KALAWAD');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (3,'VIKAS',10,'15-Aug-1992','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (4,'ROHIT',10,'12-May-1993','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (5,'RAJESH',10,'5-May-1992','KALAWAD');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (6,'MEHUL',10,'18-Dec-1992','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (7,'VIPUL',10,'6-Dec-1993','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (8,'NIRAV',11,'8-May-1991','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (9,'NEETA',11,'6-Jun-1991','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (10,'SEEMA',11,'3-Mar-1991','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (11,'VEENA',11,'2-May-1992','KALAWAD');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (12,'REKHA',11,'8-May-1990','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (13,'VINAY',11,'2-May-1990','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (14,'LALAJI',11,'8-Dec-1989','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (15,'KETAN',12,'14-Jan-1990','KALAWAD');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (16,'VEENA',12,'22-Feb-1989','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (17,'NEHA',12,'9-Sep-1989','RAJKOT');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (18,'PRAKASH',12,'5-Oct-1990','KALAWAD');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (19,'ROHAN',12,'28-Feb-1990','GONDAL');
INSERT INTO stud (grno,name,standard,birthdate,city) VALUES (20,'BABU',12,'11-Nov-1989','RAJKOT');


/************* cursor ******************/

declare
	v_grno stud.grno%type;
	CURSOR stud_cur IS select * from stud;
begin
	v_grno:=&v_grno;
	for stud_rec in stud_cur
	loop
		if stud_rec.grno=v_grno then
			dbms_output.put_line('Name of grno '||v_grno|| ' is'||stud_rec.name);
			dbms_output.put_line('He/She is studing in '||stud_rec.standard);
			dbms_output.put_line('Birth date is '||stud_rec.birthdate);
			dbms_output.put_line('city is '||stud_rec.city);			
		end if;
	end loop;
end;
/