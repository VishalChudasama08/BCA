

CREATE TABLE employee (empno number(4), ename varchar2(10), job varchar2(9), mgr number(4), hiredate date, sal number(7,2), comm number(7,2), deptno number(2))
/
INSERT INTO employee(empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7369, 'SMITH', 'CLERK', 7902, '17-DEC-80', 800, 20)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7499, 'allen', 'salesman', 7698, '20-feb-81', 1600, 300, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7521, 'ward', 'salesman', 7698, '22-feb-81', 1250, 500, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7566, 'jones', 'manager', 7839, '02-apr-81', 2975, 20)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, comm, deptno) VALUES (7654, 'martin', 'salesman', 7698, '28-sep-81', 1250, 1400, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7698, 'BLAKE', 'MANAGER', 7839, '01-MAY-81', 2850, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7782, 'CLARK', 'MANAGER', 7839, '09-JUN-81', 2450, 10)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7788, 'SCOTT', 'ANALYST', 7566, '19-APR-81', 3000, 20)
/
INSERT INTO employee (empno, ename, job, hiredate, sal, deptno) VALUES (7839, 'KING', 'PRESIDENT', '17-NOV-81', 5000, 10)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7844, 'TURNER', 'SALESMAN', 7698, '08-SEP-81', 1500, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7876, 'ADAMS', 'CLERK', 7788, '23-MAY-87', 1100, 10)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7900, 'JAMES', 'CLERK', 7698, '03-DEC-81', 950, 30)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7902, 'FORD', 'ANALYST', 7566, '03-DEC-81', 3000, 20)
/
INSERT INTO employee (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7934, 'MILLER', 'CLERK', 7782, '23-JAN-82', 1300, 10)
/