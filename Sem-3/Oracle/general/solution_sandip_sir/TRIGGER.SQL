CREATE OR REPLACE TRIGGER  tot_per BEFORE
 INSERT OR UPDATE ON stud FOR EACH ROW 
	DECLARE
		xtotal NUMBER(3);
		xper NUMBER(5,2);
		xmaths NUMBER(3);
		xscience NUMBER(3);
		xenglish NUMBER(3);
	BEGIN
		xmaths:=:NEW.maths;
		xscience:=:NEW.science;
		xenglish:=:NEW.english;
		xtotal:=xmaths+xscience+xenglish;
		xper:=xtotal/3;
		:new.total:=xtotal;
		:new.per:=xper;
	END tot_per;
