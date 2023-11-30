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

/***************PROCEDURE TO DELETE RECORD**************/

CREATE OR REPLACE PROCEDURE delete_record
(A NUMBER) AS

BEGIN
	DELETE FROM STUD WHERE GRNO=A;
END;
/

/*************MARKS TABLE************************/
CREATE TABLE MARKS
(GRNO NUMBER(3),
M1 NUMBER(3),
M2 NUMBER(3),
M3 NUMBER(3),
TOT NUMBER(3),
PER NUMBER(5,2));


/******************PROCEDURE TO ADD RECORD**************/

CREATE OR REPLACE PROCEDURE add_record
(A NUMBER,B NUMBER,C NUMBER,D NUMBER) AS
V_TOT NUMBER;
V_PER NUMBER;
BEGIN
	V_TOT:=B+C+D;
	V_PER:=V_TOT/3;

	INSERT INTO MARKS(GRNO,M1,M2,M3,TOT,PER)
	VALUES (A,B,C,D,V_TOT,V_PER);
END;
/