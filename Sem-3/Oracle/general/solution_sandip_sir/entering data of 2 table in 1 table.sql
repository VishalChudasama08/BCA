CREATE TABLE STUD
(GRNO NUMBER(3),
NAME VARCHAR2(30),
AGE NUMBER(3),
SEX CHAR(1));

INSERT INTO STUD VALUES(1,'AKASH',21,'M');
INSERT INTO STUD VALUES(2,'DHARTI',21,'F');
INSERT INTO STUD VALUES(3,'SAGAR',20,'M');
INSERT INTO STUD VALUES(4,'NISHA',22,'F');
INSERT INTO STUD VALUES(5,'VINAY',21,'M');
INSERT INTO STUD VALUES(6,'JALPA',23,'F');


CREATE TABLE marks
(GRNO NUMBER(3),
SUB1 NUMBER(3),
SUB2 NUMBER(3),
SUB3 NUMBER(3));

insert into marks values(1,80,85,86);
insert into marks values(2,70,74,58);
insert into marks values(3,44,62,72);
insert into marks values(4,35,55,22);
insert into marks values(5,22,88,77);
insert into marks values(6,56,40,45);

create table stud_marks
(grno number(3),
name varchar2(30),
sub1 number(3),
sub2 number(3),
sub3 number(3),
total number(3),
per number(5,2));


/**********plsql block ***************/

declare
	v_grno number(3);
	v_name varchar2(30);
	v_sub1 number(3);
	v_sub2 number(3);
	v_sub3 number(3);
	v_tot number(3);
	v_per number(5,2);
	v_no_of_rec number(3);
begin
	select count(*) into v_no_of_rec from stud;

	for i in 1..v_no_of_rec
	loop
		select grno,name into v_grno,v_name
		from stud where grno=i;

		select sub1,sub2,sub3 into 
		v_sub1,v_sub2,v_sub3 from
		marks where grno=i;

		v_tot:=v_sub1+v_sub2+v_sub3;
		v_per:=v_tot/3;

		insert into stud_marks values
		(v_grno,v_name,v_sub1,v_sub2,v_sub3,v_tot,v_per);
	end loop;
end;
/