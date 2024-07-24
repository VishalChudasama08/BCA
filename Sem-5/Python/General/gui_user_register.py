import mysql.connector
from tkinter import *
import subprocess  # Import subprocess to open other scripts

def open_user_login():
    """Open the User Login script."""
    subprocess.Popen(['python', 'Sem-5\\Python\\General\\gui_user_login.py'])


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
result_label.grid(row=9, column=0, columnspan=2, padx=20, pady=20)

# Method to be called when button is clicked
def insertData(event):
    name = name_entry.get()
    mobile_number = int(mobile_number_entry.get())
    email = email_entry.get()
    gender = gender_var.get()
    city = city_entry.get()
    state = state_entry.get()
    password = password_entry.get()
    # Check if any field is empty
    if not (name and mobile_number and email and city and state and gender):
        result_label.config(text="Please fill all fields(All fields are required!)", fg="red")
        return
    

    # Create the insert query string
    insert_query = f"INSERT INTO `user` (`name`, `number`, `email`, `gender`, `city`, `state`, `password`) VALUES ('{name}', '{mobile_number}', '{email}', '{gender}', '{city}', '{state}', '{password}');"


    try:
        # Prepare a cursor using cursor() method
        cursor = conn.cursor()
        # Execute the SQL statement
        cursor.execute(insert_query)
        # Commit the transaction
        conn.commit()
        result_label.config(text="Data inserted successfully!", fg="green")
        # result_label.config(text=insert_query, fg="green")
    except mysql.connector.Error as err:
        result_label.config(text=f"Error: {err}", fg="red")
        print(f"Error: {err}")

# Method to be called when the "Exit" button is clicked
def exitApp(event):
    conn.close()  # Close the database connection
    root.destroy()  # Close the application


# name
name_label = Label(f, font=font_settings, text="Name:")
name_label.grid(row=1, column=0, padx=10, pady=(0, 10))

name_entry = Entry(f, font=font_settings, width=30)
name_entry.grid(row=1, column=1, padx=0, pady=10)

# Mobile Number
mobile_number_label = Label(f, font=font_settings, text="Mobile Number:")
mobile_number_label.grid(row=2, column=0, padx=10, pady=10)

mobile_number_entry = Entry(f, font=font_settings, width=30, validate='key', validatecommand=(validate_numeric, '%d', '%P'))
mobile_number_entry.grid(row=2, column=1, padx=10, pady=10)

# email
email_label = Label(f, font=font_settings, text="Email:")
email_label.grid(row=3, column=0, padx=10, pady=10)

email_entry = Entry(f, font=font_settings, width=30)
email_entry.grid(row=3, column=1, padx=0, pady=10)

# password
password_label = Label(f, font=font_settings, text="Create Password:")
password_label.grid(row=4, column=0, padx=10, pady=10)

password_entry = Entry(f, font=font_settings, width=30)
password_entry.grid(row=4, column=1, padx=0, pady=10)

# gender
gender_label = Label(f, font=font_settings, text="Gender:")
gender_label.grid(row=5, column=0, pady=10)

# Variable to hold the value of the selected radio button
gender_var = StringVar(value="Male")

# Create radio buttons
male_radio = Radiobutton(f, font=font_settings, text="Male", variable=gender_var, value="Male")
male_radio.grid(row=5, column=1, pady=10)

female_radio = Radiobutton(f, font=font_settings, text="Female", variable=gender_var, value="Female")
female_radio.grid(row=5, column=2, pady=10)

# City
city_label = Label(f, font=font_settings, text="City:")
city_label.grid(row=6, column=0, padx=10, pady=10)

city_entry = Entry(f, font=font_settings, width=30)
city_entry.grid(row=6, column=1, padx=0, pady=10)

# State
state_label = Label(f, font=font_settings, text="State:")
state_label.grid(row=7, column=0, padx=10, pady=10)

state_entry = Entry(f, font=font_settings, width=30)
state_entry.grid(row=7, column=1, padx=0, pady=10)



# Create a push button as child to the frame
insert_btn = Button(f, font=font_settings, text='Register', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
insert_btn.grid(row=8, column=0, padx=10, pady=(10, 0))

exit_btn = Button(f, font=font_settings, text='Exit', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
exit_btn.grid(row=8, column=1, padx=10, pady=(10, 0))


# Bind the left mouse button with the method to be called
insert_btn.bind("<Button-1>", insertData)
exit_btn.bind("<Button-1>", exitApp)

# Create buttons to open other scripts
btn_frame = Frame(root)
btn_frame.pack(pady=(0, 20))

insert_display_btn = Button(btn_frame, text="Login", command=open_user_login)
insert_display_btn.pack(side=LEFT, padx=10)

root.mainloop()  # The root window handles the mouse click event

