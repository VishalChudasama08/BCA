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

clear screen;
set linesize 200;
SET SERVEROUTPUT ON;
select * from stud;

/**************************EXAMPLE ********************/

declare
	v_grno stud.grno%type;
	STUD_REC STUD%ROWTYPE;
begin
	v_grno:=&v_grno;
	SELECT * INTO STUD_REC FROM STUD WHERE GRNO=V_GRNO; 
	dbms_output.put_line('Name     : '||stud_rec.name);
	dbms_output.put_line('STANDARD : '||stud_rec.standard);
	dbms_output.put_line('Birthdate: '||stud_rec.birthdate);
	dbms_output.put_line('city     : '||stud_rec.city);			
end;
/



/***************************NO_DATA_FOUND*************/
DECLARE
	v_grno stud.grno%type;
	STUD_REC STUD%ROWTYPE;
BEGIN
	v_grno:=&v_grno;
	SELECT * INTO STUD_REC FROM STUD WHERE GRNO=V_GRNO; 
	dbms_output.put_line('Name     : '||stud_rec.name);
	dbms_output.put_line('STANDARD : '||stud_rec.standard);
	dbms_output.put_line('Birthdate: '||stud_rec.birthdate);
	dbms_output.put_line('city     : '||stud_rec.city);
EXCEPTION
	WHEN NO_DATA_FOUND THEN
		DBMS_OUTPUT.PUT_LINE('THERE IS NO RECORD');
END;
/


/************************TOO_MANY_ROWS****************/

DECLARE
	v_grno stud.grno%type;
	STUD_REC STUD%ROWTYPE;
BEGIN
	v_grno:=&v_grno;
	SELECT * INTO STUD_REC FROM STUD WHERE GRNO=V_GRNO; 
	dbms_output.put_line('Name     : '||stud_rec.name);
	dbms_output.put_line('STANDARD : '||stud_rec.standard);
	dbms_output.put_line('Birthdate: '||stud_rec.birthdate);
	dbms_output.put_line('city     : '||stud_rec.city);
EXCEPTION
	WHEN NO_DATA_FOUND THEN
		DBMS_OUTPUT.PUT_LINE('THERE IS NO RECORD');
	WHEN TOO_MANY_ROWS THEN
		DBMS_OUTPUT.PUT_LINE('THERE ARE MORE THAN ONE RECORD');
	WHEN OTHERS THEN
		DBMS_OUTPUT.PUT_LINE('THERE ARE SOME PROBLEM');		
END;
/

/*****************USER DEFINED EXCEPTION******************/

DECLARE
	v_grno stud.grno%type;
	E_MYEXCEPTION EXCEPTION;
	STUD_REC STUD%ROWTYPE;
BEGIN
	v_grno:=&v_grno;
	IF v_grno>20 THEN
		RAISE E_MYEXCEPTION;
	END IF;
	SELECT * INTO STUD_REC FROM STUD WHERE GRNO=V_GRNO; 
	dbms_output.put_line('Name     : '||stud_rec.name);
	dbms_output.put_line('STANDARD : '||stud_rec.standard);
	dbms_output.put_line('Birthdate: '||stud_rec.birthdate);
	dbms_output.put_line('city     : '||stud_rec.city);
EXCEPTION
	WHEN E_MYEXCEPTION THEN
		DBMS_OUTPUT.PUT_LINE('THERE IS NO RECORD');
END;
/
