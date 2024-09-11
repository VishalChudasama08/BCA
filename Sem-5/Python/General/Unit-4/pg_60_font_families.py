# 60 Write a python program to know the available font families
from tkinter import *
from tkinter import font
root = Tk()
fontlist = list(font.families())
print(fontlist)
"""
in python 3.12 -> output =>
['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia', 'Helvetica', 'Impact', 'Lucida Console', 'Lucida Sans', 'Microsoft Sans Serif', 'Monaco', 'Times New Roman', 'Trebuchet MS', 'Verdana']
"""
