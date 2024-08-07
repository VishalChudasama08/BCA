import mysql.connector
from tkinter import *
from tkinter import ttk
# import subprocess  # Import subprocess to open other scripts

"""
def open_delete_record():
    #Open the delete record script.
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_delete_record.py'])

def open_insert_record():
    #Open the insert record script.
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_insert_record.py'])
"""

# Create the root window
root = Tk()
root.title("Display Records")

# Create frame and make it a child to root window
f = Frame(root, padx=20, pady=20)
f.pack_propagate(False)  # Ensure the frame does not shrink
f.pack(fill=BOTH, expand=True)  # Fill the frame in the window

# Connect to MySQL database
conn = mysql.connector.connect(host='localhost', database='python', user='root', password='')

# Prepare a cursor using cursor() method
cursor = conn.cursor()

# Execute a SQL statement
cursor.execute("SELECT * FROM `students`;")

# Get all rows from the executed query
rows = cursor.fetchall()

# Define columns
headers = ("ID", "First Name", "Last Name", "Age", "City", "State", "Mobile Number")

# Create column headers
for col, header in enumerate(headers):
    label = Label(f, text=header, font=('Helvetica', 10, 'bold'), borderwidth=1, relief="solid", padx=10, pady=5, bg='lightgrey')
    label.grid(row=0, column=col, sticky='nsew')

# Create rows
for row_num, row in enumerate(rows, start=1):
    for col_num, value in enumerate(row):
        label = Label(f, text=value, borderwidth=1, relief="solid", padx=10, pady=5)
        label.grid(row=row_num, column=col_num, sticky='nsew')

"""
# Create buttons to open other scripts
btn_frame = Frame(root)
btn_frame.pack(pady=10)

display_delete_btn = Button(btn_frame, text="Open Delete Record", command=open_delete_record)
display_delete_btn.pack(side=LEFT, padx=10)

display_insert_btn = Button(btn_frame, text="Open Insert Record", command=open_insert_record)
display_insert_btn.pack(side=LEFT, padx=10)
"""

root.geometry("800x400") 
root.mainloop()

# Close connection
cursor.close()
conn.close()
