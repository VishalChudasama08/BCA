/***************SYNTAX OF CREATING FUNCTION************/

CREATE [OR REPLACE] FUNCTION function_name
[(PARAMETER LIST)]
RETURN datatype
IS|AS
BEGIN
	STATEMENTS;
	RETURN STATEMENT;
END;

/*****************FUNCTION TO MAKE TOTAL OF THREE VALUE****************/

CREATE OR REPLACE FUNCTION TOT
(A NUMBER, B NUMBER,C NUMBER)
RETURN NUMBER
IS
T NUMBER;
BEGIN
	T:=A+B+C;
	RETURN T;
END;
/

/*********************CALLING FUNCTION IN SQL STATEMENT*****************/

 SELECT TOT(20,10,20) FROM DUAL;

/*****************CALLING FUNCTION IN PLSQL BLOCK************/

DECLARE
	A NUMBER;
	B NUMBER;
	C NUMBER;
BEGIN
	A:=&A;
	B:=&B;
	C:=&C;
	DBMS_OUTPUT.PUT_LINE('TOTAL =' ||TOT(A,B,C));
END;
/

/**************************FUNCTION TO GET RESULT*****************/

/***************marks table**************************/

 create table marks
 (grno number (4),
 sub1 number(3),
 sub2 number(3),
 sub3 number(3),
 total number(3),
 result varchar2(4));


/***********************Inserting data in table ************/

INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (1, 70,75,80);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (2, 60,72,68);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (3, 72,74,83);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (4, 60,55,40);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (5, 35,45,55);

INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (6, 70,75,80);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (7, 60,72,68);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (8, 72,74,83);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (9, 60,55,40);
INSERT INTO marks (grno,  sub1, sub2, sub3) VALUES (10,35,45,55);

UPDATE marks SET result='PASS' where sub1>=40 and sub2>=40 and sub3>=40;
UPDATE marks SET result='FAIL' where sub1<40 or sub2<40 or sub3<40;

SET LINESIZE 200;
CLEAR SCREEN;
SELECT * FROM MARKS;

/*************FUNCTION TO GET RESULT ************/

CREATE OR REPLACE FUNCTION get_result
(G NUMBER)
RETURN VARCHAR2
IS
res VARCHAR2(4);
BEGIN
	SELECT result INTO res FROM marks WHERE grno=G;
	RETURN res;
END;
/

/***************CALLING FUNCTION IN SQL STATEMENT************/
SELECT GET_RESULT(5) FROM DUAL;


/*****************CALLING FUNCTION FROM PL/SQL BLOCK**********/
 DECLARE
  V_GRNO NUMBER;
  R VARCHAR2(4);
 BEGIN
  V_GRNO:=&GRNO;
  R:=GET_RESULT(V_GRNO);
  DBMS_OUTPUT.PUT_LINE('RESULT = '|| R);
 END;
 /

/****************DROP FUNCTION**************************/

DROP FUNCTION TOT;
DROP FUNCTION GET_RESULT;

/*****************************************************/