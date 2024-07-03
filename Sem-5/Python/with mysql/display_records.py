# cmd python/script derectry -> pip install mysql-connector
# write a python to retrive and display all rows from the employee table
# fetch recored one by one
import mysql.connector

#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

#check if connected ot not
if conn.is_connected():
    print("MySql is Connected")

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


