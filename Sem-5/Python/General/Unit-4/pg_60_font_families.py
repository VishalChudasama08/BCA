# 60 Write a python program to know the available font families
from tkinter import *
from tkinter import font
root = Tk()
fontlist = list(font.families())
print(fontlist)
