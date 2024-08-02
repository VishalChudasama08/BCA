# 64 write a python code take 4 radio box and display which you selected by use.

from tkinter import *

class MyRadio:
    def __init__(self, root):
        # create a Frame as child to root window
        self.f = Frame(root, height=200, width=300)
        
        # let the frame will not shrink
        self.f.propagate(False)
        
        # attach the Frame to root windows
        self.f.pack()
        
        # create StringVar class variable
        self.var = StringVar()
        self.var.set("")

        # create radio buttons and bind them to display method
        self.r1 = Radiobutton(self.f, text='Java', variable=self.var, value='Java', command=self.display)
        self.r2 = Radiobutton(self.f, text='Python', variable=self.var, value='Python', command=self.display)
        self.r3 = Radiobutton(self.f, text='.NET', variable=self.var, value='.NET', command=self.display)
        self.r4 = Radiobutton(self.f, text='JavaScript', variable=self.var, value='JavaScript', command=self.display)
        
        # attach radio buttons to the frame
        self.r1.place(x=50, y=100)
        self.r2.place(x=200, y=100)
        self.r3.place(x=300, y=100)
        self.r4.place(x=400, y=100)
        
        # attach the Radio Buttons to Frame windows
        self.r1.pack()
        self.r2.pack()
        self.r3.pack()
        self.r4.pack()
        
    def display(self):
        # retrieve the control variable value
        selection = self.var.get()
        
        # display the user selection as label
        lbl = Label(text=selection, fg='blue').place(x=50, y=150, width=200, height=20)

# create root window
root = Tk()
root.geometry("300x200+100+100")

# create an object to MyRadio class
mb = MyRadio(root)

# the root window handles the mouse click event
root.mainloop()