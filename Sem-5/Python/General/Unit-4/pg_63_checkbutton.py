# 63 write a python code take 4 check box and display which you selected by use. 
from tkinter import *

class MyCheck:
    def __init__(self, root):
        # create a Frame as child to root window
        self.f = Frame(root, height=500, width=500)
        
        # let the frame will not shrink
        self.f.propagate(False)
        
        # attach the Frame to root windows
        self.f.pack()
        
        # create IntVar class variables
        self.var1 = IntVar()
        self.var2 = IntVar()
        self.var3 = IntVar()
        self.var4 = IntVar()
        
        # create checkboxes and bind them to display method
        self.c1 = Checkbutton(self.f, text='Java', variable=self.var1, command=self.display)
        self.c2 = Checkbutton(self.f, text='Python', variable=self.var2, command=self.display)
        self.c3 = Checkbutton(self.f, text='.NET', variable=self.var3, command=self.display)
        self.c4 = Checkbutton(self.f, text='JavaScript', variable=self.var4, command=self.display)
        
        # attach check boxes to the frame
        self.c1.place(x=50, y=100)
        self.c2.place(x=200, y=100)
        self.c3.place(x=300, y=100)
        self.c4.place(x=400, y=100)
        
        # attach the Check Box to Frame windows
        self.c1.pack()
        self.c2.pack()
        self.c3.pack()
        self.c4.pack()
        
    def display(self):
        # retrieve the control variable values
        x = self.var1.get()
        y = self.var2.get()
        z = self.var3.get()
        v = self.var4.get()
        
        # string is empty initially
        str = ''
        
        # catch user choice
        if x == 1:
            str += 'Java'
        if y == 1:
            str += 'Python'
        if z == 1:
            str += '.NET'
        if v == 1:
            str += 'JavaScript'
        
        # display the user selection as label
        lbl = Label(text=str, fg='blue').place(x=50, y=150, width=200, height=20)

# create root window
root = Tk()
root.geometry("300x200+100+100")

# create an object to MyCheck class
mb = MyCheck(root)

# the root window handles the mouse click event
root.mainloop()