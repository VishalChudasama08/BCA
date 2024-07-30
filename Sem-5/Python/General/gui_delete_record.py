import mysql.connector
from tkinter import *
from tkinter import ttk
import subprocess  # Import subprocess to open other scripts

def open_display_record():
    """Open the display record script."""
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_display_record.py'])

def open_insert_record():
    """Open the insert record script."""
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_insert_record.py'])

def delete_row():
    """ Delete a row based on the provided ID. """
    row_id = row_id_entry.get()
    if row_id:
        try:
            # Delete row from the database
            cursor.execute("DELETE FROM `students` WHERE `ID` = %s", (row_id,))
            conn.commit()

            # Remove row from the Treeview
            for item in tree.get_children():
                if tree.item(item, 'values')[0] == row_id:
                    tree.delete(item)
                    break

            row_id_entry.delete(0, END)  # Clear the entry field
        except Exception as e:
            print(f"Error: {e}")

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

# Define columns without the "Delete" column
columns = ("ID", "First Name", "Last Name", "Age", "City", "State", "Mobile Number")

# Create Treeview
tree = ttk.Treeview(f, columns=columns, show='headings')

# Define headings
for col in columns:
    tree.heading(col, text=col)
    tree.column(col, anchor=CENTER)

# Insert data into the table
for row in rows:
    values = list(row)  # Convert tuple to list
    tree.insert("", END, values=values)

# Calculate and adjust the width of each column based on its content
for col in tree["columns"]:
    max_width = len(col) * 10  # Start with the width of the column header
    for row in tree.get_children():
        text = tree.item(row, "values")[tree["columns"].index(col)]
        text_width = len(str(text)) * 10  # Approximate width based on text length
        if text_width > max_width:
            max_width = text_width
    tree.column(col, width=max_width)

# Calculate total width of all columns
total_width = sum(tree.column(col, option="width") for col in tree["columns"])

tree.pack()


# Create label and entry for deleting a row by ID
row_id_label = Label(f, text="Enter ID to delete:")
row_id_label.grid(row=0, column=0, padx=10, pady=(250, 10))

row_id_entry = Entry(f, width=20)
row_id_entry.grid(row=0, column=1, padx=10, pady=(250, 10))

# Create a button to trigger the deletion
delete_button = Button(f, text="Delete Row", command=delete_row)
delete_button.grid(row=0, column=2, padx=10, pady=(250, 10))

# Create buttons to open other scripts
btn_frame = Frame(root)
btn_frame.pack(pady=10)

delete_display_btn = Button(btn_frame, text="Open Display Record", command=open_display_record)
delete_display_btn.pack(side=LEFT, padx=10)

delete_insert_btn = Button(btn_frame, text="Open Insert Record", command=open_insert_record)
delete_insert_btn.pack(side=LEFT, padx=10)

root.geometry(f"{total_width + 45}x400")  # 45 used for padding and extra space
root.mainloop()

# Close connection
cursor.close()
conn.close()