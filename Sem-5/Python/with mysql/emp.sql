CREATE TABLE emp(empno INT(4), ename VARCHAR(10), job VARCHAR(9), mgr INT(4), hiredate DATE, sal INT(7), comm INT(7), deptno INT(2));

INSERT INTO emp(empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7369, 'SMITH', 'CLERK', 7902, '1980-12-17', 800, 20), ;
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7499, 'allen', 'salesman', 7698, '1981-02-20', 1600, 300, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7521, 'ward', 'salesman', 7698, '1981-02-22', 1250, 500, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7566, 'jones', 'manager', 7839, '1981-04-02', 2975, 20);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7654, 'martin', 'salesman', 7698, '1981-09-28', 1250, 1400, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7698, 'BLAKE', 'MANAGER', 7839, '1981-05-01', 2850, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7782, 'CLARK', 'MANAGER', 7839, '1981-06-09', 2450, 10);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7788, 'SCOTT', 'ANALYST', 7566, '1982-12-09', 3000, 20);
INSERT INTO emp (empno, ename, job, hiredate, sal, deptno) VALUES (7839, 'KING', 'PRESIDENT', '1981-11-17', 5000, 10);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7844, 'TURNER', 'SALESMAN', 7698, '1981-09-08', 1500, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7876, 'ADAMS', 'CLERK', 7788, '1983-01-12', 1100, 10);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7900, 'JAMES', 'CLERK', 7698, '1981-12-03', 950, 30);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7902, 'FORD', 'ANALYST', 7566, '1981-12-03', 3000, 20);
INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7934, 'MILLER', 'CLERK', 7782, '1982-01-23', 1300, 10);