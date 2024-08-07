# 71 Write a python script for student registration form like name, address, gender, contact number, city save all data in student table
import mysql.connector
from tkinter import *
# Connect to the MySQL database
conn = mysql.connector.connect(host='localhost', database='python', user='root', password='')

class StudentRegistration:
    def __init__(self, root):
        self.root = root
        self.root.title("Student Registration Form")
        self.root.geometry("500x500+100+100")
        
        # Labels and Entries
        Label(root, text="Student Registration Form", font=("Arial", 14)).grid(row=0, column=0, columnspan=2, pady=10)
        
        Label(root, text="Name").grid(row=1, column=0, padx=10, pady=5)
        self.name_entry = Entry(root, width=40)
        self.name_entry.grid(row=1, column=1, padx=0, pady=10)
        
        Label(root, text="Address").grid(row=2, column=0, padx=10, pady=5)
        self.address_entry = Entry(root, width=40)
        self.address_entry.grid(row=2, column=1, padx=0, pady=10)
        
        Label(root, text="Gender").grid(row=3, column=0, padx=10, pady=5)
        self.gender_var = StringVar(value="Male")
        Radiobutton(root, text="Male", variable=self.gender_var, value="Male").grid(row=3,column=1, padx=(0, 10), pady=5, sticky='w')
        Radiobutton(root, text="Female", variable=self.gender_var, value="Female").grid(row=3,column=1, padx=(10, 0), pady=5)
        
        Label(root, text="Contact Number").grid(row=4, column=0, padx=10, pady=5)
        self.contact_entry = Entry(root, width=40)
        self.contact_entry.grid(row=4, column=1, padx=0, pady=10)
        
        Label(root, text="City").grid(row=5, column=0, padx=10, pady=5)
        self.city_entry = Entry(root, width=40)
        self.city_entry.grid(row=5, column=1, padx=0, pady=10)
        
        # Submit button
        Button(root, text="Submit", command=self.submit).grid(row=6, column=1, pady=10)
        
        # Result label
        self.result_label = Label(root, text="", wraplength=400)  # Use wraplength to ensure text wraps within width
        self.result_label.grid(row=7, column=0, columnspan=3, pady=10) 
    
    def submit(self):
        name = self.name_entry.get()
        address = self.address_entry.get()
        gender = self.gender_var.get()
        contact = self.contact_entry.get()
        city = self.city_entry.get()
        
        insert_query = f"INSERT INTO student (name, address, gender, contact_number, city) VALUES ('{name}', '{address}', '{gender}', '{contact}', '{city}');"
        try:
            # Prepare a cursor using cursor() method
            cursor = conn.cursor()

            # Execute the SQL statement
            cursor.execute(insert_query)
            
            conn.commit()  # Commit the transaction
            result_text = f"Name: {name}, Address: {address},\nGender: {gender}, Contact: {contact}, City: {city}\nThis Student registered successfully."
            self.result_label.config(text=result_text)

        except mysql.connector.Error as err:
            print(f"Error: {err}")
            conn.rollback()  # Rollback in case of error
        finally:
            # Close the cursor and connection
            cursor.close()
            conn.close()

# create root window
root = Tk()

# create an object of StudentRegistration class
app = StudentRegistration(root)

# the root window handles the mouse click event
root.mainloop()
