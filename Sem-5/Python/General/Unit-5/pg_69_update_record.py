# 69 Write a python program to update record from emp table
import mysql.connector

#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

#prepare a cursor using cursor() method
cursor = conn.cursor()

# Execute a SQL statement to update record
try:
    cursor.execute("UPDATE `emp` SET job='clerk    ' WHERE empno=7934;") #
    conn.commit()  # Commit the transaction
    print("1 row Updated.")
except mysql.connector.Error as err:
    print("Error: ", err)
    conn.rollback()  # Rollback in case of error

#close connection
cursor.close()
conn.close()