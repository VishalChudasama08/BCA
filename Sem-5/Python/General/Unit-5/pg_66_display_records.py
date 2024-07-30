# 66 Write a python program to display all record from emp table
import mysql.connector

#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

#prepare a cursor using cursor() method
cursor = conn.cursor()

#execute a sql statement
cursor.execute("SELECT * FROM emp")

#get only one row
row = cursor.fetchone

#if the row exits
while row is not None:
    print(row)
    row=cursor.fetchone()

#close connection
cursor.close()
conn.close()


