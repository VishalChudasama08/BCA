# 66 Write a python program to display all record from emp table
import mysql.connector

#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

#prepare a cursor using cursor() method
cursor = conn.cursor()

try:
    # Execute the SQL query
    cursor.execute("SELECT * FROM `emp`;")

    # Get all rows from the executed query
    rows = cursor.fetchall()

    for row in rows:
        for value in row:
            print(value, end="\t     ")
        print()

except mysql.connector.Error as err:
    print(f"Error: {err}")
    conn.rollback()  # Rollback in case of error

finally:
    # Close the cursor and connection
    cursor.close()
    conn.close()
