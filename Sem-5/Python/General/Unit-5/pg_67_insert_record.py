# 67 Write a python program to insert record from emp table
import mysql.connector

# Connect to MySQL database
conn = mysql.connector.connect(host='localhost', database='python', user='root', password='')

# Prepare a cursor using cursor() method
cursor = conn.cursor()

# Execute a SQL statement to insert a record
try:
    cursor.execute("INSERT INTO emp (empno, ename, job, mgr, hiredate, sal, deptno) VALUES (7934, 'MILLER', 'CLERK', 7782, '1982-01-23', 1300, 10);")
    conn.commit()  # Commit the transaction
    print("1 row inserted.")
except mysql.connector.Error as err:
    print("Error: ", err)
    conn.rollback()  # Rollback in case of error

# Close cursor and connection
cursor.close()
conn.close()
