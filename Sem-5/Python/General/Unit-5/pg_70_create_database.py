# 70 Write a python program to create database 
import mysql.connector

# Connect to MySQL database
conn = mysql.connector.connect(host='localhost', user='root', password='')

# Prepare a cursor using cursor() method
cursor = conn.cursor()

# Execute a SQL statement to insert a record
try:
    # cursor.execute("DROP DATABASE new_py_db")
    cursor.execute("CREATE DATABASE new_py_db")
    print("Database created successfully.")
except mysql.connector.Error as err:
    print("Error: ", err)

# Close cursor and connection
cursor.close()
conn.close()
