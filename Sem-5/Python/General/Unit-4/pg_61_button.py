# 61 write a python code take a three Button like Red, Green and Yellow for change back color when click on it

from tkinter import *
from tkinter import messagebox as tmsg
class MyTrafic:
    def __init__(self,root):
        redbutton = Button(root,text="Red", background="red", height=1, width=5, command=lambda:self.MyClick(1))
        redbutton.grid(row=0,column=2)
        
        greenbutton = Button(root,text="Green", background="Green",height=1, width=5,command=lambda:self.MyClick(2))
        greenbutton.grid(row=1,column=2)
        
        yellowbutton= Button(root,text="Yellow", background="Yellow",height=1, width=5,command=lambda:self.MyClick(3))
        yellowbutton.grid(row=2,column=2)
    
    def MyClick(self,num):
        if num==1:
            root.configure(bg='red')
        if num==2:
            root.configure(bg='green')
        if num==3:
            root.configure(bg='Yellow')

root = Tk()
root.geometry("200x200")
mt = MyTrafic(root)
root.mainloop()
