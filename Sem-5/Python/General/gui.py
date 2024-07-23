import mysql.connector
from tkinter import *



root = Tk()
root.title("Insert Record")

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

font_settings = ('Helvetica', 10)  # Font settings for all labels and entries

#connect to mysql database
conn =  mysql.connector.connect(host='localhost', database='python', user='root', password='')

# Define result_label at the top level
result_label = Label(f, text="", font=font_settings)
result_label.grid(row=7, column=0, columnspan=2, padx=20, pady=20)

# Method to be called when button is clicked
def insertData(event):
    first_name = first_name_entry.get()
    last_name = last_name_entry.get()
    age = int(age_entry.get())
    city = city_entry.get()
    state = state_entry.get()
    mobile_number = int(mobile_number_entry.get())
    # Check if any field is empty
    if not (first_name and last_name and age and city and state and mobile_number):
        result_label.config(text="All fields are required!", fg="red")
        return
    

    # Create the insert query string
    insert_query = f"INSERT INTO `student` (first_name, last_name, age, city, state, mobile_number) VALUES ('{first_name}', '{last_name}', {age}, '{city}', '{state}', {mobile_number});"

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


# first name
first_name_label = Label(f, font=font_settings, text="First Name:")
first_name_label.grid(row=0, column=0, padx=10, pady=10)

first_name_entry = Entry(f, font=font_settings, width=20)
first_name_entry.grid(row=0, column=1, padx=0, pady=10)

#last name
last_name_label = Label(f, font=font_settings, text="Last Name:")
last_name_label.grid(row=1, column=0, padx=10, pady=10)

last_name_entry = Entry(f, font=font_settings, width=20)
last_name_entry.grid(row=1, column=1, padx=0, pady=10)

#age
age_label = Label(f, font=font_settings, text="Age:")
age_label.grid(row=2, column=0, padx=10, pady=10)

age_entry = Entry(f, font=font_settings, width=20, validate='key', validatecommand=(validate_numeric, '%d', '%P'))
age_entry.grid(row=2, column=1, padx=10, pady=10)

#City
city_label = Label(f, font=font_settings, text="City:")
city_label.grid(row=3, column=0, padx=10, pady=10)

city_entry = Entry(f, font=font_settings, width=20)
city_entry.grid(row=3, column=1, padx=0, pady=10)

#State
state_label = Label(f, font=font_settings, text="State:")
state_label.grid(row=4, column=0, padx=10, pady=10)

state_entry = Entry(f, font=font_settings, width=20)
state_entry.grid(row=4, column=1, padx=0, pady=10)

#Mobile Number
mobile_number_label = Label(f, font=font_settings, text="Mobile Number:")
mobile_number_label.grid(row=5, column=0, padx=10, pady=10)

mobile_number_entry = Entry(f, font=font_settings, width=20, validate='key', validatecommand=(validate_numeric, '%d', '%P'))
mobile_number_entry.grid(row=5, column=1, padx=10, pady=10)

# Create a push button as child to the frame
insert_btn = Button(f, font=font_settings, text='Insert', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
insert_btn.grid(row=6, column=0, padx=10, pady=10)

exit_btn = Button(f, font=font_settings, text='Exit', width=8, bg='Yellow', fg='blue', activebackground='green', activeforeground='red')
exit_btn.grid(row=6, column=1, padx=10, pady=10)

# Use grid to place buttons side by side

# Bind the left mouse button with the method to be called
insert_btn.bind("<Button-1>", insertData)
exit_btn.bind("<Button-1>", exitApp)

root.mainloop()  # The root window handles the mouse click event

