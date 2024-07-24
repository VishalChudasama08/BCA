import mysql.connector
from tkinter import *
import subprocess  # Import subprocess to open other scripts

def open_user_register():
    """Open the User register script."""
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_user_register.py'])


root = Tk()
root.title("User Register")

font_settings = ('Helvetica', 10)  # Font settings for all labels and entries

label_text = Frame(root)
label_text.pack()

label = Label(label_text, font=font_settings, text="Please Enter Details Below")
label.grid(row=0, padx=10, pady=(10, 0))

# Create frame and make it a child to root window
f = Frame(root, padx=30, pady=30)
f.pack_propagate(False)  # Ensure the frame does not shrink
f.pack(fill=BOTH, expand=True)  # Fill the frame in the window

def validate_numeric_input(action, value_if_allowed):
    if action == '1':  # '1' means the action is an insertion
        return value_if_allowed.isdigit()
    return True

# Register the validation function
validate_numeric = root.register(validate_numeric_input)


#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

# Define result_label at the top level
result_label = Label(f, text="", font=font_settings)
result_label.grid(row=8 , column=0, columnspan=2, padx=20, pady=20)

# Method to be called when button is clicked
def insertData(event):
    email = email_entry.get()
    password = password_entry.get()
    # Check if any field is empty
    if not (password and email):
        result_label.config(text="Please fill all fields", fg="red")
        return
    

    # Create the insert query string
    insert_query = f"SELECT * FROM `user` WHERE email='{email}';"


    try:
        # Prepare a cursor using cursor() method
        cursor = conn.cursor()
        # Execute the SQL statement
        cursor.execute(insert_query)
        row = cursor.fetchone()

        # Commit the transaction
        conn.commit()
        if row is not None and email == row[3] and password == row[7]:
            result_label.config(text=f"Welcome {row[1]}", fg="green")
        else :
            result_label.config(text="Invalid email or password", fg="red")
        # result_label.config(text=f"Username: {row[3]}, Password: {row[7]}", fg="green")
    except mysql.connector.Error as err:
        result_label.config(text=f"Error: {err}", fg="red")
        print(f"Error: {err}")

# Method to be called when the "Exit" button is clicked
def exitApp(event):
    conn.close()  # Close the database connection
    root.destroy()  # Close the application

# email
email_label = Label(f, font=font_settings, text="Username(Email):")
email_label.grid(row=1, column=0, padx=10, pady=10)

email_entry = Entry(f, font=font_settings, width=30)
email_entry.grid(row=1, column=1, padx=0, pady=10)

# name
password_label = Label(f, font=font_settings, text="Password:")
password_label.grid(row=2, column=0, padx=10, pady=(0, 10))

password_entry = Entry(f, font=font_settings, width=30)
password_entry.grid(row=2, column=1, padx=0, pady=10)


# Create a push button as child to the frame
insert_btn = Button(f, font=font_settings, text='Register', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
insert_btn.grid(row=7, column=0, padx=10, pady=(10, 0))

exit_btn = Button(f, font=font_settings, text='Exit', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
exit_btn.grid(row=7, column=1, padx=10, pady=(10, 0))


# Bind the left mouse button with the method to be called
insert_btn.bind("<Button-1>", insertData)
exit_btn.bind("<Button-1>", exitApp)

# Create buttons to open other scripts
btn_frame = Frame(root)
btn_frame.pack(pady=(0, 20))

insert_display_btn = Button(btn_frame, text="Register", command=open_user_register)
insert_display_btn.pack(side=LEFT, padx=10)

root.mainloop()  # The root window handles the mouse click event

