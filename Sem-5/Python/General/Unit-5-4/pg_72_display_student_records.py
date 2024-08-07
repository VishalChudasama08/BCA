# 72 Write a python code for display all  records form student table in tabular format  

import mysql.connector
from tkinter import Tk, Label, font

def display_records():
    # Connect to the MySQL database
    conn = mysql.connector.connect(host='localhost', database='python', user='root', password='')
    cursor = conn.cursor()
    
    try:
        # Execute the SQL query
        cursor.execute("SELECT * FROM student;")
        rows = cursor.fetchall()
        
        # Define static column headers
        headers = ["ID", "Name", "Address", "Gender", "Contact Number", "City"]

        custom_font = font.Font(size=11, weight="bold")
        
        # Create column headers with borders
        for col, header in enumerate(headers):
            Label(root, text=header, borderwidth=1, relief="solid", padx=10, pady=5, bg='lightgrey', font=custom_font).grid(row=0, column=col, sticky='nsew')
        
        # Create rows
        for row_num, row in enumerate(rows, start=1):
            for col_num, value in enumerate(row):
                Label(root, text=value, padx=10, pady=5, borderwidth=1, relief="solid").grid(row=row_num, column=col_num, sticky='nsew')

    except mysql.connector.Error as err:
        print(f"Error: {err}")
    
    finally:
        # Close the cursor and connection
        cursor.close()
        conn.close()

# Create the main window
root = Tk()
root.title("Student Records")
root.geometry("600x400")

# Call the function to display records
display_records()

# Run the application
root.mainloop()
