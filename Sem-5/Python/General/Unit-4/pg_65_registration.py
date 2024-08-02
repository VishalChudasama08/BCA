# 65 Write a python script for student registration form like name, address, gender, contact number, city

from tkinter import *

class StudentRegistration:
    def __init__(self, root):
        self.root = root
        self.root.title("Student Registration Form")
        self.root.geometry("400x400+100+100")
        
        # Labels and Entries
        Label(root, text="Student Registration Form", font=("Arial", 14)).grid(row=0, column=0, columnspan=2, pady=10)
        
        Label(root, text="Name").grid(row=1, column=0, padx=10, pady=5, sticky=E)
        self.name_entry = Entry(root)
        self.name_entry.grid(row=1, column=1, padx=10, pady=5)
        
        Label(root, text="Address").grid(row=2, column=0, padx=10, pady=5, sticky=E)
        self.address_entry = Entry(root)
        self.address_entry.grid(row=2, column=1, padx=10, pady=5)
        
        Label(root, text="Gender").grid(row=3, column=0, padx=10, pady=5, sticky=E)
        self.gender_var = StringVar(value="Male")
        Radiobutton(root, text="Male", variable=self.gender_var, value="Male").grid(row=3, column=1, sticky=W)
        Radiobutton(root, text="Female", variable=self.gender_var, value="Female").grid(row=3, column=1)
        
        Label(root, text="Contact Number").grid(row=4, column=0, padx=10, pady=5, sticky=E)
        self.contact_entry = Entry(root)
        self.contact_entry.grid(row=4, column=1, padx=10, pady=5)
        
        Label(root, text="City").grid(row=5, column=0, padx=10, pady=5, sticky=E)
        self.city_entry = Entry(root)
        self.city_entry.grid(row=5, column=1, padx=10, pady=5)
        
        # Submit button
        Button(root, text="Submit", command=self.submit).grid(row=6, column=0, columnspan=2, pady=10)
        
        # Result label
        self.result_label = Label(root, text="")
        self.result_label.grid(row=7, column=0, columnspan=2, pady=10)
    
    def submit(self):
        name = self.name_entry.get()
        address = self.address_entry.get()
        gender = self.gender_var.get()
        contact = self.contact_entry.get()
        city = self.city_entry.get()
        
        result_text = f"Name: {name}\nAddress: {address}\nGender: {gender}\nContact: {contact}\nCity: {city}"
        self.result_label.config(text=result_text)

# create root window
root = Tk()

# create an object of StudentRegistration class
app = StudentRegistration(root)

# the root window handles the mouse click event
root.mainloop()