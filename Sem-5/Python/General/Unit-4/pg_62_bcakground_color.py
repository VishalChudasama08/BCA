# 62 Write a python code for change background when click on button. (RED, BLUE, GREEN, YELLOW, BLACK)
import tkinter as tk

def change_color(color):
    root.configure(bg=color)

colors = ['red', 'blue', 'green', 'yellow', 'black']

root = tk.Tk()
root.geometry('300x200')

for color in colors:
    color_btn = tk.Button(root, text=color.capitalize(), command=lambda c = color:change_color(c))
    color_btn.pack(pady=2)

root.mainloop()
