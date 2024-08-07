import mysql.connector
from tkinter import *
from tkinter import ttk
# import subprocess  # Import subprocess to open other scripts

"""
def open_display_record():
    #Open the display record script.
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_display_record.py'])

def open_insert_record():
    #Open the insert record script.
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_insert_record.py'])
"""

def delete_row():
    # Delete a row based on the provided ID. 
    row_id = row_id_entry.get()
    if row_id:
        try:
            # Delete row from the database
            cursor.execute("DELETE FROM `students` WHERE `ID` = %s", (row_id,))
            conn.commit()

            # Update status label to indicate success
            status_label.config(text=f"Row with ID {row_id} deleted successfully.", fg='green')
            row_id_entry.delete(0, END)  # Clear the entry field
        except Exception as e:
            # Update status label to indicate error
            status_label.config(text=f"Error: {e}", fg='red')

# Create the root window
root = Tk()
root.title("Delete Records")

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

# Create label and entry for deleting a row by ID
row_id_label = Label(f, text="Enter ID to delete:")
row_id_label.grid(row=(row_num+1), column=1, padx=10, pady=(10, 10) )

row_id_entry = Entry(f, width=20)
row_id_entry.grid(row=(row_num+1), column=2, padx=10, pady=(10, 10))

# Create a button to trigger the deletion
delete_button = Button(f, text="Delete Row", command=delete_row)
delete_button.grid(row=(row_num+1), column=4, padx=10, pady=(10, 10))

# Status label for displaying messages
status_label = Label(f, text="", font=('Helvetica', 10))
status_label.grid(row=(len(rows)+2), column=0, columnspan=3, padx=10, pady=(10, 10))

# Create buttons to open other scripts
btn_frame = Frame(root)
btn_frame.pack(pady=10)

"""
delete_display_btn = Button(btn_frame, text="Open Display Record", command=open_display_record)
delete_display_btn.pack(side=LEFT, padx=10)

delete_insert_btn = Button(btn_frame, text="Open Insert Record", command=open_insert_record)
delete_insert_btn.pack(side=LEFT, padx=10)
"""

root.geometry("800x400")  # 45 used for padding and extra space
root.mainloop()

# Close connection
cursor.close()
conn.close()