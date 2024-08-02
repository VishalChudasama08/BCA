# 72 Write a python code for display all  records form student table in tabular format  

import mysql.connector

# Connect to the MySQL database
conn = mysql.connector.connect(host='localhost', database='python', user='root', password='')
    
# Prepare a cursor using cursor() method
cursor = conn.cursor()

try:
    # Execute the SQL query
    cursor.execute("SELECT * FROM `student`;")

    # Get all rows from the executed query
    rows = cursor.fetchall()

    for row in rows:
        for value in row:
            print(value, end="\t")
        print()

except mysql.connector.Error as err:
    print(f"Error: {err}")
    conn.rollback()  # Rollback in case of error

finally:
    # Close the cursor and connection
    cursor.close()
    conn.close()