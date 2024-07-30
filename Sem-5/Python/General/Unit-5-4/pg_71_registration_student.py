# 71 Write a python script for student registration form like name, address, gender, contact number, city save all data in student table
import mysql.connector

def register_student(name, address, gender, contact_number, city):
    # Connect to the MySQL database
    conn = mysql.connector.connect(
        host='localhost',
        database='school',
        user='root',
        password=''
    )
    
    # Prepare a cursor using cursor() method
    cursor = conn.cursor()

    # SQL query to insert student details
    insert_query = (
        "INSERT INTO student (name, address, gender, contact_number, city) "
        "VALUES (%s, %s, %s, %s, %s)"
    )

    # Data to be inserted
    data = (name, address, gender, contact_number, city)

    try:
        # Execute the SQL query
        cursor.execute(insert_query, data)
        conn.commit()  # Commit the transaction
        print("Student registered successfully.")
    except mysql.connector.Error as err:
        print(f"Error: {err}")
        conn.rollback()  # Rollback in case of error
    finally:
        # Close the cursor and connection
        cursor.close()
        conn.close()

# Example usage
register_student(
    name="John Doe",
    address="123 Main St, Anytown, USA",
    gender="Male",
    contact_number="1234567890",
    city="Anytown"
)
